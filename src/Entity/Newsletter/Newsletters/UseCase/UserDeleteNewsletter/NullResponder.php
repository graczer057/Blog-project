<?php


namespace App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter;

use App\Entity\Newsletter\Newsletter;
use App\Entity\Users\User;
use App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter\Responder;

class NullResponder implements Responder
{

    public function DeleteNewsletter(Newsletter $newletter)
    {
        // TODO: Implement DeleteNewsletter() method.
    }

    public function NewsletterDeleted(string $username)
    {
        // TODO: Implement NewsletterDeleted() method.
    }
}