<?php

namespace App\Entity\Users;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tokenExpire;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    public function __construct(
        string $username,
        string $mail,
        string $password,
        string $token,
        ?\DateTime $tokenExpire,
        bool $isActive,
        string $role
    ){
        $this->username=$username;
        $this->mail=$mail;
        $this->password=$password;
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
        $this->isActive=$isActive;
        $this->role=$role;
    }
    public function activateUser(
        ?bool $isActive,
        ?string $token,
        ?\DateTime $tokenExpire
    ){
        $this->isActive=$isActive;
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
    }

    public function TokenExpire(
        ?string $token,
        ?\DateTime $tokenExpire
    ){
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
    }

    public function loginUser(
        string $username,
        string $mail,
        string $password
    ){
       $this->username=$username;
       $this->mail=$mail;
       $this->password=$password;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getToken(): string
    {
        return (string) $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getTokenExpire(): ?\DateTime
    {
        return $this->tokenExpire;
    }

    /**
     * @param \DateTime|null $tokenExpire
     */
    public function setTokenExpire(?\DateTime $tokenExpire): void
    {
        $this->tokenExpire = $tokenExpire;
    }
}
