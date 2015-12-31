<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyExchangeRate Structs
 * @subpackage Structs
 */
class CurrencyExchangeRate extends AbstractStructBase
{
    /**
     * The FromCurrency
     * Meta informations extracted from the WSDL
     * - documentation: The currency code for the original (converted FROM) currency.
     * - minOccurs: 0
     * @var string
     */
    public $FromCurrency;
    /**
     * The IntoCurrency
     * Meta informations extracted from the WSDL
     * - documentation: The currency code for the final (converted INTO) currency.
     * - minOccurs: 0
     * @var string
     */
    public $IntoCurrency;
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - documentation: Multiplier used to convert fromCurrency units to intoCurrency units.
     * - minOccurs: 0
     * @var decimal
     */
    public $Rate;
    /**
     * Constructor method for CurrencyExchangeRate
     * @uses CurrencyExchangeRate::setFromCurrency()
     * @uses CurrencyExchangeRate::setIntoCurrency()
     * @uses CurrencyExchangeRate::setRate()
     * @param string $fromCurrency
     * @param string $intoCurrency
     * @param decimal $rate
     */
    public function __construct($fromCurrency = null, $intoCurrency = null, $rate = null)
    {
        $this
            ->setFromCurrency($fromCurrency)
            ->setIntoCurrency($intoCurrency)
            ->setRate($rate);
    }
    /**
     * Get FromCurrency value
     * @return string|null
     */
    public function getFromCurrency()
    {
        return $this->FromCurrency;
    }
    /**
     * Set FromCurrency value
     * @param string $fromCurrency
     * @return \Arkitecht\FedEx\Structs\CurrencyExchangeRate
     */
    public function setFromCurrency($fromCurrency = null)
    {
        $this->FromCurrency = $fromCurrency;
        return $this;
    }
    /**
     * Get IntoCurrency value
     * @return string|null
     */
    public function getIntoCurrency()
    {
        return $this->IntoCurrency;
    }
    /**
     * Set IntoCurrency value
     * @param string $intoCurrency
     * @return \Arkitecht\FedEx\Structs\CurrencyExchangeRate
     */
    public function setIntoCurrency($intoCurrency = null)
    {
        $this->IntoCurrency = $intoCurrency;
        return $this;
    }
    /**
     * Get Rate value
     * @return decimal|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param decimal $rate
     * @return \Arkitecht\FedEx\Structs\CurrencyExchangeRate
     */
    public function setRate($rate = null)
    {
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CurrencyExchangeRate
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
