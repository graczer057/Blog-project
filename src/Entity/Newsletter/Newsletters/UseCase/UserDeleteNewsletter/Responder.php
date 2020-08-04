<?php

namespace App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter;

use App\Entity\Newsletter\Newsletter;

interface Responder
{
    public function DeleteNewsletter(Newsletter $newsletter);
}