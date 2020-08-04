<?php

namespace App\Entity\Newsletter;

interface NewslettersInterface
{
    public function add(Newsletter $newsletter);
    public function delete(Newsletter $newsletter);
    public function getAll(): ?array;
    public function finOneByMail(string $mail);
}