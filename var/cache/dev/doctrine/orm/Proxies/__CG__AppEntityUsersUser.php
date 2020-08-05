<?php

namespace Proxies\__CG__\App\Entity\Users;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\Users\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'mail', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'token', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'tokenExpire', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'isActive', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'newsletter'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'mail', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'token', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'tokenExpire', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'isActive', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Users\\User' . "\0" . 'newsletter'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function activateUser(?bool $isActive, ?string $token, ?\DateTime $tokenExpire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'activateUser', [$isActive, $token, $tokenExpire]);

        return parent::activateUser($isActive, $token, $tokenExpire);
    }

    /**
     * {@inheritDoc}
     */
    public function TokenExpire(?string $token, ?\DateTime $tokenExpire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'TokenExpire', [$token, $tokenExpire]);

        return parent::TokenExpire($token, $tokenExpire);
    }

    /**
     * {@inheritDoc}
     */
    public function PasswordReset(string $mail, bool $isActive, string $token, \DateTime $tokenExpire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'PasswordReset', [$mail, $isActive, $token, $tokenExpire]);

        return parent::PasswordReset($mail, $isActive, $token, $tokenExpire);
    }

    /**
     * {@inheritDoc}
     */
    public function PasswordChange(string $password, ?bool $isActive, ?string $token, ?\DateTime $tokenExpire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'PasswordChange', [$password, $isActive, $token, $tokenExpire]);

        return parent::PasswordChange($password, $isActive, $token, $tokenExpire);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): \App\Entity\Users\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getMail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMail', []);

        return parent::getMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMail(string $mail): \App\Entity\Users\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMail', [$mail]);

        return parent::setMail($mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Users\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken(?string $token): \App\Entity\Users\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive(bool $isActive): \App\Entity\Users\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(string $role): \App\Entity\Users\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokenExpire(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokenExpire', []);

        return parent::getTokenExpire();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokenExpire(?\DateTime $tokenExpire): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokenExpire', [$tokenExpire]);

        parent::setTokenExpire($tokenExpire);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsletter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletter', []);

        return parent::getNewsletter();
    }

}
