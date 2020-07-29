<?php

namespace App\Entity\Users;

use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
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
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @var string The hashed password
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

    public function loginUser(
        ?string $username,
        ?string $mail,
        ?string $password
    ){
        $this->username=$username;
        $this->mail=$mail;
        $this->password=$password;
    }

    public function TokenExpire(
        ?string $token,
        ?\DateTime $tokenExpire
    ){
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
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
        return (string) $this->password;
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

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
