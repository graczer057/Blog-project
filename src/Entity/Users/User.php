<?php

namespace App\Entity\Users;

use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
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

    /**
     * @ORM\OneToOne(targetEntity=Newsletter::class, mappedBy="User", cascade={"persist", "remove"})
     */
    private $newsletter;

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
        $this->password=password_hash($password, PASSWORD_BCRYPT);
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

    public function PasswordReset(
        string $mail,
        bool $isActive,
        string $token,
        \DateTime $tokenExpire
    ){
        $this->mail=$mail;
        $this->isActive=$isActive;
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
    }

    public function PasswordChange(
        string $password,
        ?bool $isActive,
        ?string $token,
        ?\DateTime $tokenExpire
    ){
        $this->password=password_hash($password, PASSWORD_BCRYPT);
        $this->isActive=$isActive;
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
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

    /**
     * @see UserInterface
     */
    public function getPassword(): string
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

    /**
     * Returns the roles granted to the user.
     */
    public function getRole()
    {
        return array('ROLE_USER');
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
        return ["ROLE_USER"];
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
