<?php


namespace App\Adapter\Newsletter;

use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\NewslettersInterface;
use Doctrine\Persistence\ObjectManager;

final class Newsletters implements NewslettersInterface
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager=$manager;
    }

    public function delete(Newsletter $newsletter)
    {
        $this->manager->remove($newsletter);
    }

    public function getAll(Newsletter $newsletter)
    {
        return $this->manager->getRepository('App:Newsletter\Newsletter')->findAll();
    }

    public function add(Newsletter $newsletter)
    {
        $this->manager->persist($newsletter);
    }

    public function finOneByMail(string $mail)
    {
        return $this->manager->getRepository('App:Newsletter\Newsletter')->findOneBy(['mail'=>$mail]);
    }
}