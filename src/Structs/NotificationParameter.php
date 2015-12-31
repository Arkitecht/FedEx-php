<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationParameter Structs
 * @subpackage Structs
 */
class NotificationParameter extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of data contained in Value (e.g. SERVICE_TYPE, PACKAGE_SEQUENCE, etc..).
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: The value of the parameter (e.g. PRIORITY_OVERNIGHT, 2, etc..).
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for NotificationParameter
     * @uses NotificationParameter::setId()
     * @uses NotificationParameter::setValue()
     * @param string $id
     * @param string $value
     */
    public function __construct($id = null, $value = null)
    {
        $this
            ->setId($id)
            ->setValue($value);
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
     * @return \Arkitecht\FedEx\Structs\NotificationParameter
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Arkitecht\FedEx\Structs\NotificationParameter
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\NotificationParameter
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
