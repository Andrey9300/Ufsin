<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProverkaNarushenie extends \AppBundle\Entity\ProverkaNarushenie implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'proverka', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'objects', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'date_ustraneniya', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'otmetka_ustraneniya', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'zatraty', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'primechanie', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'vnimanie');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'proverka', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'objects', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'date_ustraneniya', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'otmetka_ustraneniya', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'zatraty', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'primechanie', '' . "\0" . 'AppBundle\\Entity\\ProverkaNarushenie' . "\0" . 'vnimanie');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProverkaNarushenie $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUstraneniya($dateUstraneniya)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUstraneniya', array($dateUstraneniya));

        return parent::setDateUstraneniya($dateUstraneniya);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUstraneniya()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUstraneniya', array());

        return parent::getDateUstraneniya();
    }

    /**
     * {@inheritDoc}
     */
    public function setOtmetkaUstraneniya($otmetkaUstraneniya)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOtmetkaUstraneniya', array($otmetkaUstraneniya));

        return parent::setOtmetkaUstraneniya($otmetkaUstraneniya);
    }

    /**
     * {@inheritDoc}
     */
    public function getOtmetkaUstraneniya()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOtmetkaUstraneniya', array());

        return parent::getOtmetkaUstraneniya();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimechanie($primechanie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimechanie', array($primechanie));

        return parent::setPrimechanie($primechanie);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimechanie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimechanie', array());

        return parent::getPrimechanie();
    }

    /**
     * {@inheritDoc}
     */
    public function setProverka(\AppBundle\Entity\Proverka $proverka)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProverka', array($proverka));

        return parent::setProverka($proverka);
    }

    /**
     * {@inheritDoc}
     */
    public function getProverka()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProverka', array());

        return parent::getProverka();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdOrganizationObject(\AppBundle\Entity\Objects $idOrganizationObject)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdOrganizationObject', array($idOrganizationObject));

        return parent::setIdOrganizationObject($idOrganizationObject);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdOrganizationObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOrganizationObject', array());

        return parent::getIdOrganizationObject();
    }

    /**
     * {@inheritDoc}
     */
    public function addNar(\AppBundle\Entity\Proverka $proverka)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNar', array($proverka));

        return parent::addNar($proverka);
    }

    /**
     * {@inheritDoc}
     */
    public function setZatraty($zatraty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZatraty', array($zatraty));

        return parent::setZatraty($zatraty);
    }

    /**
     * {@inheritDoc}
     */
    public function getZatraty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZatraty', array());

        return parent::getZatraty();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjects(\AppBundle\Entity\Objects $objects)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjects', array($objects));

        return parent::setObjects($objects);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjects()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjects', array());

        return parent::getObjects();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjectsOrg(\AppBundle\Entity\Objects $objectsOrg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjectsOrg', array($objectsOrg));

        return parent::setObjectsOrg($objectsOrg);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjectsOrg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjectsOrg', array());

        return parent::getObjectsOrg();
    }

    /**
     * {@inheritDoc}
     */
    public function setVnimanie($vnimanie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVnimanie', array($vnimanie));

        return parent::setVnimanie($vnimanie);
    }

    /**
     * {@inheritDoc}
     */
    public function getVnimanie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVnimanie', array());

        return parent::getVnimanie();
    }

}