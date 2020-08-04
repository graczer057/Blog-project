<?php

namespace App\Entity\Newsletter\Newsletters\UseCase\SendingNewsletter;

use App\Entity\Newsletter\Newsletter;

class NullResponder implements Responder
{
    public function SendNewsletter(Newsletter $newsletter)
    {
        // TODO: Implement SendNewsletter() method.
    }
}