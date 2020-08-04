<?php


namespace App\Entity\Newsletter\Newsletters\UseCase\SendingNewsletter;

use App\Entity\Newsletter\Newsletter;

interface Responder
{
    public function SendNewsletter(Newsletter $newsletter);
}