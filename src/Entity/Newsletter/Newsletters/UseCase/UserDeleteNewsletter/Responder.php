<?php


namespace App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter;

use App\Entity\Newsletter\Newsletter;
use App\Entity\Users\User;

interface Responder
{
    public function DeleteNewsletter(Newsletter $newsletter);
}