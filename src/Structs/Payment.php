<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment Structs
 * @subpackage Structs
 */
class Payment extends AbstractStructBase
{
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The Payor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Payor
     */
    public $Payor;
    /**
     * Constructor method for Payment
     * @uses Payment::setPaymentType()
     * @uses Payment::setPayor()
     * @param string $paymentType
     * @param \Arkitecht\FedEx\Structs\Payor $payor
     */
    public function __construct($paymentType = null, \Arkitecht\FedEx\Structs\Payor $payor = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setPayor($payor);
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
     * @uses \Arkitecht\FedEx\Enums\PaymentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PaymentType::getValidValues()
     * @param string $paymentType
     * @return \Arkitecht\FedEx\Structs\Payment
     */
    public function setPaymentType($paymentType = null)
    {
        if (!\Arkitecht\FedEx\Enums\PaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \Arkitecht\FedEx\Enums\PaymentType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get Payor value
     * @return \Arkitecht\FedEx\Structs\Payor|null
     */
    public function getPayor()
    {
        return $this->Payor;
    }
    /**
     * Set Payor value
     * @param \Arkitecht\FedEx\Structs\Payor $payor
     * @return \Arkitecht\FedEx\Structs\Payment
     */
    public function setPayor(\Arkitecht\FedEx\Structs\Payor $payor = null)
    {
        $this->Payor = $payor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Payment
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
