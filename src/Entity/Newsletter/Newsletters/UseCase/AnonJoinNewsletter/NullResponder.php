<?php


namespace App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter;

use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter\Responder;

class NullResponder implements Responder
{

    public function JoinNewsletter(Newsletter $newsletter)
    {
        // TODO: Implement JoinNewsletter() method.
    }

    public function mailAlreadyInUse(string $mail)
    {
        // TODO: Implement mailAlreadyInUse() method.
    }
}