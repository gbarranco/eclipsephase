<?php

namespace App\Security;


use App\Entity\Character;
use App\Entity\Player;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class CharacterVoter extends Voter
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

        // only vote on `Character` objects
        if (!$subject instanceof Character) {
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
        /** @var Character $character */
        $character = $subject;

        switch ($attribute) {
            case self::VIEW:
                return $this->canView($character, $user);
            case self::EDIT:
                return $this->canEdit($character, $user);
        }

        throw new \LogicException('This code should not be reached!');
    }

    private function canView(Character $character, Player $user)
    {
        // if they can edit, they can view OR if they are GM
        if ($this->canEdit($character, $user) || 'MJ' === $user->getPlayerType()) {
            return true;
        }
    }

    private function canEdit(Character $character, Player $user)
    {
        return $user === $character->getPlayer();
    }
}
