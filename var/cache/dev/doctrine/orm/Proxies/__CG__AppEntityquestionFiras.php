<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class questionFiras extends \App\Entity\questionFiras implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'id', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'date', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'like', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'dislike', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'commentaire', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'type', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'reponses', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'color', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'Name', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'image'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'id', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'date', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'like', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'dislike', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'commentaire', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'type', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'reponses', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'color', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'Name', '' . "\0" . 'App\\Entity\\questionFiras' . "\0" . 'image'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (questionFiras $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
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
    public function getDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTimeInterface $date): \App\Entity\questionFiras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaire(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaire', []);

        return parent::getCommentaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentaire(string $commentaire): \App\Entity\questionFiras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentaire', [$commentaire]);

        return parent::setCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\questionFiras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getColor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColor', []);

        return parent::getColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setColor(string $color): \App\Entity\questionFiras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColor', [$color]);

        return parent::setColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getreponses(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getreponses', []);

        return parent::getreponses();
    }

    /**
     * {@inheritDoc}
     */
    public function addCReponseontrat($reponse): \App\Entity\questionFiras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCReponseontrat', [$reponse]);

        return parent::addCReponseontrat($reponse);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCReponseontrat($reponse): \App\Entity\questionFiras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCReponseontrat', [$reponse]);

        return parent::removeCReponseontrat($reponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $Name): \App\Entity\questionFiras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$Name]);

        return parent::setName($Name);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): \App\Entity\questionFiras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikes(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikes', []);

        return parent::getLikes();
    }

    /**
     * {@inheritDoc}
     */
    public function like(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'like', []);

        parent::like();
    }

    /**
     * {@inheritDoc}
     */
    public function getDislikes(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDislikes', []);

        return parent::getDislikes();
    }

    /**
     * {@inheritDoc}
     */
    public function dislike(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'dislike', []);

        parent::dislike();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
