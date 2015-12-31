<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Money Structs
 * @subpackage Structs
 */
class Money extends AbstractStructBase
{
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var decimal
     */
    public $Amount;
    /**
     * Constructor method for Money
     * @uses Money::setCurrency()
     * @uses Money::setAmount()
     * @param string $currency
     * @param decimal $amount
     */
    public function __construct($currency = null, $amount = null)
    {
        $this
            ->setCurrency($currency)
            ->setAmount($amount);
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Arkitecht\FedEx\Structs\Money
     */
    public function setCurrency($currency = null)
    {
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get Amount value
     * @return decimal|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param decimal $amount
     * @return \Arkitecht\FedEx\Structs\Money
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Money
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
