<?php


namespace App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter;

use App\Entity\Newsletter\Newsletter;

interface Responder
{
    public function JoinNewsletter(Newsletter $newsletter);
    public function UserJoined(string $username);
}