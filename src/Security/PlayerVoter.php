<?php

namespace App\Security;


use App\Entity\Player;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class PlayerVoter extends Voter
{
    const VIEW = 'view';
    const EDIT = 'edit';

    /**
     * @inheritDoc
     */
    protected function supports(string $attribute, $subject)
    {
        // if the attribute isn't one we support, return false
        if (!in_array($attribute, [self::VIEW, self::EDIT])) {
            return false;
        }

        // only vote on `Player` objects
        if (!$subject instanceof Player) {
            return false;
        }

        return true;
    }

    /**
     * @inheritDoc
     */
    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof Player) {
            // the user must be logged in; if not, deny access
            return false;
        }

        // you know $subject is a Post object, thanks to `supports()`
        /** @var Player $player */
        $player = $subject;

        switch ($attribute) {
            case self::VIEW:
                return $this->canView($player, $user);
            case self::EDIT:
                return $this->canEdit($player, $user);
        }

        throw new \LogicException('This code should not be reached!');
    }

    private function canView(Player $player, Player $user)
    {
        // if they can edit, they can view
        if ($this->canEdit($player, $user)) {
            return true;
        }
    }

    private function canEdit(Player $player, Player $user)
    {
        return $user === $player;
    }
}
