<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackSpecialHandling Structs
 * @subpackage Structs
 */
class TrackSpecialHandling extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * Constructor method for TrackSpecialHandling
     * @uses TrackSpecialHandling::setType()
     * @uses TrackSpecialHandling::setDescription()
     * @uses TrackSpecialHandling::setPaymentType()
     * @param string $type
     * @param string $description
     * @param string $paymentType
     */
    public function __construct($type = null, $description = null, $paymentType = null)
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setPaymentType($paymentType);
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
     * @uses \Arkitecht\FedEx\Enums\TrackSpecialHandlingType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackSpecialHandlingType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\TrackSpecialHandling
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackSpecialHandlingType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\TrackSpecialHandlingType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Arkitecht\FedEx\Structs\TrackSpecialHandling
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \Arkitecht\FedEx\Enums\TrackPaymentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackPaymentType::getValidValues()
     * @param string $paymentType
     * @return \Arkitecht\FedEx\Structs\TrackSpecialHandling
     */
    public function setPaymentType($paymentType = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackPaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \Arkitecht\FedEx\Enums\TrackPaymentType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackSpecialHandling
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
