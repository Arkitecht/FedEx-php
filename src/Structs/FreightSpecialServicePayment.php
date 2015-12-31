<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightSpecialServicePayment Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 * @subpackage Structs
 */
class FreightSpecialServicePayment extends AbstractStructBase
{
    /**
     * The SpecialService
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the special service.
     * - minOccurs: 0
     * @var string
     */
    public $SpecialService;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates who will pay for the special service.
     * - minOccurs: 0
     * - documentation: Indicates the role of the party submitting the transaction.
     * @var string
     */
    public $PaymentType;
    /**
     * Constructor method for FreightSpecialServicePayment
     * @uses FreightSpecialServicePayment::setSpecialService()
     * @uses FreightSpecialServicePayment::setPaymentType()
     * @param string $specialService
     * @param string $paymentType
     */
    public function __construct($specialService = null, $paymentType = null)
    {
        $this
            ->setSpecialService($specialService)
            ->setPaymentType($paymentType);
    }
    /**
     * Get SpecialService value
     * @return string|null
     */
    public function getSpecialService()
    {
        return $this->SpecialService;
    }
    /**
     * Set SpecialService value
     * @uses \Arkitecht\FedEx\Enums\ShipmentSpecialServiceType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShipmentSpecialServiceType::getValidValues()
     * @param string $specialService
     * @return \Arkitecht\FedEx\Structs\FreightSpecialServicePayment
     */
    public function setSpecialService($specialService = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShipmentSpecialServiceType::valueIsValid($specialService)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $specialService, implode(', ', \Arkitecht\FedEx\Enums\ShipmentSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialService = $specialService;
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
     * @uses \Arkitecht\FedEx\Enums\FreightShipmentRoleType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightShipmentRoleType::getValidValues()
     * @param string $paymentType
     * @return \Arkitecht\FedEx\Structs\FreightSpecialServicePayment
     */
    public function setPaymentType($paymentType = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightShipmentRoleType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \Arkitecht\FedEx\Enums\FreightShipmentRoleType::getValidValues())), __LINE__);
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
     * @return \Arkitecht\FedEx\Structs\FreightSpecialServicePayment
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
