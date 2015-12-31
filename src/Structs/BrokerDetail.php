<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrokerDetail Structs
 * @subpackage Structs
 */
class BrokerDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Broker
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $Broker;
    /**
     * Constructor method for BrokerDetail
     * @uses BrokerDetail::setType()
     * @uses BrokerDetail::setBroker()
     * @param string $type
     * @param \Arkitecht\FedEx\Structs\Party $broker
     */
    public function __construct($type = null, \Arkitecht\FedEx\Structs\Party $broker = null)
    {
        $this
            ->setType($type)
            ->setBroker($broker);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Arkitecht\FedEx\Enums\BrokerType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\BrokerType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\BrokerDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\BrokerType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\BrokerType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Broker value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getBroker()
    {
        return $this->Broker;
    }
    /**
     * Set Broker value
     * @param \Arkitecht\FedEx\Structs\Party $broker
     * @return \Arkitecht\FedEx\Structs\BrokerDetail
     */
    public function setBroker(\Arkitecht\FedEx\Structs\Party $broker = null)
    {
        $this->Broker = $broker;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\BrokerDetail
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
