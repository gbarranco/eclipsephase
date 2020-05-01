<?php

namespace App\Security;


use App\Entity\Backups;
use App\Entity\Player;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class BackupsVoter extends Voter
{
    const VIEW = 'view';
    const DELETE = 'delete';

    /**
     * @inheritDoc
     */
    protected function supports(string $attribute, $subject)
    {
        // if the attribute isn't one we support, return false
        if (!in_array($attribute, [self::VIEW, self::DELETE])) {
            return false;
        }

        // only vote on `Character` objects
        if (!$subject instanceof Backups) {
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
        /** @var Backups $backup */
        $backup = $subject;

        switch ($attribute) {
            case self::VIEW:
                return $this->canView($backup, $user);
            case self::DELETE:
                return $this->canDelete($backup, $user);
        }

        throw new \LogicException('This code should not be reached!');
    }

    private function canView(Backups $backup, Player $user)
    {
        // if they can delete, they can view OR if they are GM
        if ($this->canDelete($backup, $user) || 'MJ' === $user->getPlayerType()) {
            return true;
        }
    }

    private function canDelete(Backups $backup, Player $user)
    {
        return $user === $backup->getPlayableCharacter()->getPlayer();
    }
}
