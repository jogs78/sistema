<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Corte extends \Application\Entity\Corte implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id_corte', 'id_usr', 'momento', 'fecha_corte', 'fecha_corte2', 'entradas', 'quedo', 'saldo', 'comentario', '' . "\0" . 'Application\\Entity\\Corte' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Corte' . "\0" . 'desgloces');
        }

        return array('__isInitialized__', 'id_corte', 'id_usr', 'momento', 'fecha_corte', 'fecha_corte2', 'entradas', 'quedo', 'saldo', 'comentario', '' . "\0" . 'Application\\Entity\\Corte' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Corte' . "\0" . 'desgloces');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Corte $proxy) {
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
    public function getIdCorte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCorte', array());

        return parent::getIdCorte();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUsr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUsr', array());

        return parent::getIdUsr();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUsr($id_usr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUsr', array($id_usr));

        return parent::setIdUsr($id_usr);
    }

    /**
     * {@inheritDoc}
     */
    public function getMomento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMomento', array());

        return parent::getMomento();
    }

    /**
     * {@inheritDoc}
     */
    public function setMomento($momento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMomento', array($momento));

        return parent::setMomento($momento);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCorte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCorte', array());

        return parent::getFechaCorte();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCorte($fecha_corte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCorte', array($fecha_corte));

        return parent::setFechaCorte($fecha_corte);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCorte2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCorte2', array());

        return parent::getFechaCorte2();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCorte2($fecha_corte2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCorte2', array($fecha_corte2));

        return parent::setFechaCorte2($fecha_corte2);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntradas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntradas', array());

        return parent::getEntradas();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntradas($entradas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntradas', array($entradas));

        return parent::setEntradas($entradas);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuedo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuedo', array());

        return parent::getQuedo();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuedo($quedo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuedo', array($quedo));

        return parent::setQuedo($quedo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldo', array());

        return parent::getSaldo();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldo($saldo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldo', array($saldo));

        return parent::setSaldo($saldo);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentario', array());

        return parent::getComentario();
    }

    /**
     * {@inheritDoc}
     */
    public function setComentario($comentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentario', array($comentario));

        return parent::setComentario($comentario);
    }

}
