<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NaftaProducer Structs
 * @subpackage Structs
 */
class NaftaProducer extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Producer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $Producer;
    /**
     * Constructor method for NaftaProducer
     * @uses NaftaProducer::setId()
     * @uses NaftaProducer::setProducer()
     * @param string $id
     * @param \Arkitecht\FedEx\Structs\Party $producer
     */
    public function __construct($id = null, \Arkitecht\FedEx\Structs\Party $producer = null)
    {
        $this
            ->setId($id)
            ->setProducer($producer);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Arkitecht\FedEx\Structs\NaftaProducer
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Producer value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getProducer()
    {
        return $this->Producer;
    }
    /**
     * Set Producer value
     * @param \Arkitecht\FedEx\Structs\Party $producer
     * @return \Arkitecht\FedEx\Structs\NaftaProducer
     */
    public function setProducer(\Arkitecht\FedEx\Structs\Party $producer = null)
    {
        $this->Producer = $producer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\NaftaProducer
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
