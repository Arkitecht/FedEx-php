<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EdtCommodityTax Structs
 * @subpackage Structs
 */
class EdtCommodityTax extends AbstractStructBase
{
    /**
     * The HarmonizedCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HarmonizedCode;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\EdtTaxDetail
     */
    public $Taxes;
    /**
     * Constructor method for EdtCommodityTax
     * @uses EdtCommodityTax::setHarmonizedCode()
     * @uses EdtCommodityTax::setTaxes()
     * @param string $harmonizedCode
     * @param \Arkitecht\FedEx\Structs\EdtTaxDetail $taxes
     */
    public function __construct($harmonizedCode = null, \Arkitecht\FedEx\Structs\EdtTaxDetail $taxes = null)
    {
        $this
            ->setHarmonizedCode($harmonizedCode)
            ->setTaxes($taxes);
    }
    /**
     * Get HarmonizedCode value
     * @return string|null
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }
    /**
     * Set HarmonizedCode value
     * @param string $harmonizedCode
     * @return \Arkitecht\FedEx\Structs\EdtCommodityTax
     */
    public function setHarmonizedCode($harmonizedCode = null)
    {
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Arkitecht\FedEx\Structs\EdtTaxDetail $taxes
     * @return \Arkitecht\FedEx\Structs\EdtCommodityTax
     */
    public function setTaxes(\Arkitecht\FedEx\Structs\EdtTaxDetail $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\EdtCommodityTax
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
