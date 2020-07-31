<?php

namespace App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter;

use App\Entity\Newsletter\Newsletter;

interface Responder
{
    public function JoinNewsletter(Newsletter $newsletter);
    public function mailAlreadyInUse(string $mail);
}