<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmartPostShipmentProcessingOptionsRequested Structs
 * @subpackage Structs
 */
class SmartPostShipmentProcessingOptionsRequested extends AbstractStructBase
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $Options;
    /**
     * Constructor method for SmartPostShipmentProcessingOptionsRequested
     * @uses SmartPostShipmentProcessingOptionsRequested::setOptions()
     * @param string $options
     */
    public function __construct($options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return string|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses
     * \Arkitecht\FedEx\Enums\SmartPostShipmentProcessingOptionType::valueIsValid()
     * @uses
     * \Arkitecht\FedEx\Enums\SmartPostShipmentProcessingOptionType::getValidValues()
     * @param string $options
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentProcessingOptionsRequested
     */
    public function setOptions($options = null)
    {
        if (!\Arkitecht\FedEx\Enums\SmartPostShipmentProcessingOptionType::valueIsValid($options)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $options, implode(', ', \Arkitecht\FedEx\Enums\SmartPostShipmentProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentProcessingOptionsRequested
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
