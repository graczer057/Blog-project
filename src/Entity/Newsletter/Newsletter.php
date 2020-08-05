<?php

namespace App\Entity\Newsletter;

use App\Repository\NewsletterRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Users\User;

/**
 * @ORM\Entity(repositoryClass=NewsletterRepository::class)
 */
class Newsletter
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\OneToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    public function __construct(
        string $mail,
        bool $isActive,
        ?User $user
    ){
        $this->mail=$mail;
        $this->isActive=$isActive;
        $this->user=$user;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
}
