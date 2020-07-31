<?php


namespace App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter;

use App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter\Responder;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Users\User;

class NullResponder implements Responder
{

    public function JoinNewsletter(Newsletter $newsletter)
    {
        // TODO: Implement JoinNewsletter() method.
    }

    public function UserJoined(string $username)
    {
        // TODO: Implement UserJoined() method.
    }
}