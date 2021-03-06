<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackChargeDetail Structs
 * @subpackage Structs
 */
class TrackChargeDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ChargeAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $ChargeAmount;
    /**
     * Constructor method for TrackChargeDetail
     * @uses TrackChargeDetail::setType()
     * @uses TrackChargeDetail::setChargeAmount()
     * @param string $type
     * @param \Arkitecht\FedEx\Structs\Money $chargeAmount
     */
    public function __construct($type = null, \Arkitecht\FedEx\Structs\Money $chargeAmount = null)
    {
        $this
            ->setType($type)
            ->setChargeAmount($chargeAmount);
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
     * @uses \Arkitecht\FedEx\Enums\TrackChargeDetailType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackChargeDetailType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\TrackChargeDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackChargeDetailType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\TrackChargeDetailType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ChargeAmount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getChargeAmount()
    {
        return $this->ChargeAmount;
    }
    /**
     * Set ChargeAmount value
     * @param \Arkitecht\FedEx\Structs\Money $chargeAmount
     * @return \Arkitecht\FedEx\Structs\TrackChargeDetail
     */
    public function setChargeAmount(\Arkitecht\FedEx\Structs\Money $chargeAmount = null)
    {
        $this->ChargeAmount = $chargeAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackChargeDetail
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
