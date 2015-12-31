<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRateDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data for a package's rates, as calculated per a specific rate type.
 * @subpackage Structs
 */
class PackageRateDetail extends AbstractStructBase
{
    /**
     * The RateType
     * Meta informations extracted from the WSDL
     * - documentation: Type used for this specific set of rate data.
     * - minOccurs: 0
     * - documentation: The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." values have become "...RETAIL..." values,
     * except for PAYOR_COUNTER and RATED_COUNTER, which have been removed.
     * @var string
     */
    public $RateType;
    /**
     * The RatedWeightMethod
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which weight was used.
     * - minOccurs: 0
     * @var string
     */
    public $RatedWeightMethod;
    /**
     * The MinimumChargeType
     * Meta informations extracted from the WSDL
     * - documentation: INTERNAL FEDEX USE ONLY.
     * - minOccurs: 0
     * @var string
     */
    public $MinimumChargeType;
    /**
     * The BillingWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $BillingWeight;
    /**
     * The DimWeight
     * Meta informations extracted from the WSDL
     * - documentation: The dimensional weight of this package (if greater than actual).
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $DimWeight;
    /**
     * The OversizeWeight
     * Meta informations extracted from the WSDL
     * - documentation: The oversize weight of this package (if the package is oversize).
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $OversizeWeight;
    /**
     * The BaseCharge
     * Meta informations extracted from the WSDL
     * - documentation: The transportation charge only (prior to any discounts applied) for this package.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $BaseCharge;
    /**
     * The TotalFreightDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all discounts on this package.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalFreightDiscounts;
    /**
     * The NetFreight
     * Meta informations extracted from the WSDL
     * - documentation: This package's baseCharge - totalFreightDiscounts.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $NetFreight;
    /**
     * The TotalSurcharges
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all surcharges on this package.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalSurcharges;
    /**
     * The NetFedExCharge
     * Meta informations extracted from the WSDL
     * - documentation: This package's netFreight + totalSurcharges (not including totalTaxes).
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $NetFedExCharge;
    /**
     * The TotalTaxes
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all taxes on this package.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalTaxes;
    /**
     * The NetCharge
     * Meta informations extracted from the WSDL
     * - documentation: This package's netFreight + totalSurcharges + totalTaxes.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $NetCharge;
    /**
     * The TotalRebates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalRebates;
    /**
     * The FreightDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: All rate discounts that apply to this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RateDiscount
     */
    public $FreightDiscounts;
    /**
     * The Rebates
     * Meta informations extracted from the WSDL
     * - documentation: All rebates that apply to this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Rebate
     */
    public $Rebates;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - documentation: All surcharges that apply to this package (either because of characteristics of the package itself, or because it is carrying per-shipment surcharges for the shipment of which it is a part).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Surcharge
     */
    public $Surcharges;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: All taxes applicable (or distributed to) this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Tax
     */
    public $Taxes;
    /**
     * The VariableHandlingCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\VariableHandlingCharges
     */
    public $VariableHandlingCharges;
    /**
     * Constructor method for PackageRateDetail
     * @uses PackageRateDetail::setRateType()
     * @uses PackageRateDetail::setRatedWeightMethod()
     * @uses PackageRateDetail::setMinimumChargeType()
     * @uses PackageRateDetail::setBillingWeight()
     * @uses PackageRateDetail::setDimWeight()
     * @uses PackageRateDetail::setOversizeWeight()
     * @uses PackageRateDetail::setBaseCharge()
     * @uses PackageRateDetail::setTotalFreightDiscounts()
     * @uses PackageRateDetail::setNetFreight()
     * @uses PackageRateDetail::setTotalSurcharges()
     * @uses PackageRateDetail::setNetFedExCharge()
     * @uses PackageRateDetail::setTotalTaxes()
     * @uses PackageRateDetail::setNetCharge()
     * @uses PackageRateDetail::setTotalRebates()
     * @uses PackageRateDetail::setFreightDiscounts()
     * @uses PackageRateDetail::setRebates()
     * @uses PackageRateDetail::setSurcharges()
     * @uses PackageRateDetail::setTaxes()
     * @uses PackageRateDetail::setVariableHandlingCharges()
     * @param string $rateType
     * @param string $ratedWeightMethod
     * @param string $minimumChargeType
     * @param \Arkitecht\FedEx\Structs\Weight $billingWeight
     * @param \Arkitecht\FedEx\Structs\Weight $dimWeight
     * @param \Arkitecht\FedEx\Structs\Weight $oversizeWeight
     * @param \Arkitecht\FedEx\Structs\Money $baseCharge
     * @param \Arkitecht\FedEx\Structs\Money $totalFreightDiscounts
     * @param \Arkitecht\FedEx\Structs\Money $netFreight
     * @param \Arkitecht\FedEx\Structs\Money $totalSurcharges
     * @param \Arkitecht\FedEx\Structs\Money $netFedExCharge
     * @param \Arkitecht\FedEx\Structs\Money $totalTaxes
     * @param \Arkitecht\FedEx\Structs\Money $netCharge
     * @param \Arkitecht\FedEx\Structs\Money $totalRebates
     * @param \Arkitecht\FedEx\Structs\RateDiscount $freightDiscounts
     * @param \Arkitecht\FedEx\Structs\Rebate $rebates
     * @param \Arkitecht\FedEx\Structs\Surcharge $surcharges
     * @param \Arkitecht\FedEx\Structs\Tax $taxes
     * @param \Arkitecht\FedEx\Structs\VariableHandlingCharges $variableHandlingCharges
     */
    public function __construct($rateType = null, $ratedWeightMethod = null, $minimumChargeType = null, \Arkitecht\FedEx\Structs\Weight $billingWeight = null, \Arkitecht\FedEx\Structs\Weight $dimWeight = null, \Arkitecht\FedEx\Structs\Weight $oversizeWeight = null, \Arkitecht\FedEx\Structs\Money $baseCharge = null, \Arkitecht\FedEx\Structs\Money $totalFreightDiscounts = null, \Arkitecht\FedEx\Structs\Money $netFreight = null, \Arkitecht\FedEx\Structs\Money $totalSurcharges = null, \Arkitecht\FedEx\Structs\Money $netFedExCharge = null, \Arkitecht\FedEx\Structs\Money $totalTaxes = null, \Arkitecht\FedEx\Structs\Money $netCharge = null, \Arkitecht\FedEx\Structs\Money $totalRebates = null, \Arkitecht\FedEx\Structs\RateDiscount $freightDiscounts = null, \Arkitecht\FedEx\Structs\Rebate $rebates = null, \Arkitecht\FedEx\Structs\Surcharge $surcharges = null, \Arkitecht\FedEx\Structs\Tax $taxes = null, \Arkitecht\FedEx\Structs\VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this
            ->setRateType($rateType)
            ->setRatedWeightMethod($ratedWeightMethod)
            ->setMinimumChargeType($minimumChargeType)
            ->setBillingWeight($billingWeight)
            ->setDimWeight($dimWeight)
            ->setOversizeWeight($oversizeWeight)
            ->setBaseCharge($baseCharge)
            ->setTotalFreightDiscounts($totalFreightDiscounts)
            ->setNetFreight($netFreight)
            ->setTotalSurcharges($totalSurcharges)
            ->setNetFedExCharge($netFedExCharge)
            ->setTotalTaxes($totalTaxes)
            ->setNetCharge($netCharge)
            ->setTotalRebates($totalRebates)
            ->setFreightDiscounts($freightDiscounts)
            ->setRebates($rebates)
            ->setSurcharges($surcharges)
            ->setTaxes($taxes)
            ->setVariableHandlingCharges($variableHandlingCharges);
    }
    /**
     * Get RateType value
     * @return string|null
     */
    public function getRateType()
    {
        return $this->RateType;
    }
    /**
     * Set RateType value
     * @uses \Arkitecht\FedEx\Enums\ReturnedRateType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ReturnedRateType::getValidValues()
     * @param string $rateType
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setRateType($rateType = null)
    {
        if (!\Arkitecht\FedEx\Enums\ReturnedRateType::valueIsValid($rateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateType, implode(', ', \Arkitecht\FedEx\Enums\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->RateType = $rateType;
        return $this;
    }
    /**
     * Get RatedWeightMethod value
     * @return string|null
     */
    public function getRatedWeightMethod()
    {
        return $this->RatedWeightMethod;
    }
    /**
     * Set RatedWeightMethod value
     * @uses \Arkitecht\FedEx\Enums\RatedWeightMethod::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RatedWeightMethod::getValidValues()
     * @param string $ratedWeightMethod
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setRatedWeightMethod($ratedWeightMethod = null)
    {
        if (!\Arkitecht\FedEx\Enums\RatedWeightMethod::valueIsValid($ratedWeightMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ratedWeightMethod, implode(', ', \Arkitecht\FedEx\Enums\RatedWeightMethod::getValidValues())), __LINE__);
        }
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    /**
     * Get MinimumChargeType value
     * @return string|null
     */
    public function getMinimumChargeType()
    {
        return $this->MinimumChargeType;
    }
    /**
     * Set MinimumChargeType value
     * @uses \Arkitecht\FedEx\Enums\MinimumChargeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\MinimumChargeType::getValidValues()
     * @param string $minimumChargeType
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setMinimumChargeType($minimumChargeType = null)
    {
        if (!\Arkitecht\FedEx\Enums\MinimumChargeType::valueIsValid($minimumChargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $minimumChargeType, implode(', ', \Arkitecht\FedEx\Enums\MinimumChargeType::getValidValues())), __LINE__);
        }
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    /**
     * Get BillingWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getBillingWeight()
    {
        return $this->BillingWeight;
    }
    /**
     * Set BillingWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $billingWeight
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setBillingWeight(\Arkitecht\FedEx\Structs\Weight $billingWeight = null)
    {
        $this->BillingWeight = $billingWeight;
        return $this;
    }
    /**
     * Get DimWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getDimWeight()
    {
        return $this->DimWeight;
    }
    /**
     * Set DimWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $dimWeight
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setDimWeight(\Arkitecht\FedEx\Structs\Weight $dimWeight = null)
    {
        $this->DimWeight = $dimWeight;
        return $this;
    }
    /**
     * Get OversizeWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getOversizeWeight()
    {
        return $this->OversizeWeight;
    }
    /**
     * Set OversizeWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $oversizeWeight
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setOversizeWeight(\Arkitecht\FedEx\Structs\Weight $oversizeWeight = null)
    {
        $this->OversizeWeight = $oversizeWeight;
        return $this;
    }
    /**
     * Get BaseCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getBaseCharge()
    {
        return $this->BaseCharge;
    }
    /**
     * Set BaseCharge value
     * @param \Arkitecht\FedEx\Structs\Money $baseCharge
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setBaseCharge(\Arkitecht\FedEx\Structs\Money $baseCharge = null)
    {
        $this->BaseCharge = $baseCharge;
        return $this;
    }
    /**
     * Get TotalFreightDiscounts value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalFreightDiscounts()
    {
        return $this->TotalFreightDiscounts;
    }
    /**
     * Set TotalFreightDiscounts value
     * @param \Arkitecht\FedEx\Structs\Money $totalFreightDiscounts
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setTotalFreightDiscounts(\Arkitecht\FedEx\Structs\Money $totalFreightDiscounts = null)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    /**
     * Get NetFreight value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getNetFreight()
    {
        return $this->NetFreight;
    }
    /**
     * Set NetFreight value
     * @param \Arkitecht\FedEx\Structs\Money $netFreight
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setNetFreight(\Arkitecht\FedEx\Structs\Money $netFreight = null)
    {
        $this->NetFreight = $netFreight;
        return $this;
    }
    /**
     * Get TotalSurcharges value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }
    /**
     * Set TotalSurcharges value
     * @param \Arkitecht\FedEx\Structs\Money $totalSurcharges
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setTotalSurcharges(\Arkitecht\FedEx\Structs\Money $totalSurcharges = null)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * Get NetFedExCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getNetFedExCharge()
    {
        return $this->NetFedExCharge;
    }
    /**
     * Set NetFedExCharge value
     * @param \Arkitecht\FedEx\Structs\Money $netFedExCharge
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setNetFedExCharge(\Arkitecht\FedEx\Structs\Money $netFedExCharge = null)
    {
        $this->NetFedExCharge = $netFedExCharge;
        return $this;
    }
    /**
     * Get TotalTaxes value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    /**
     * Set TotalTaxes value
     * @param \Arkitecht\FedEx\Structs\Money $totalTaxes
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setTotalTaxes(\Arkitecht\FedEx\Structs\Money $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Get NetCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getNetCharge()
    {
        return $this->NetCharge;
    }
    /**
     * Set NetCharge value
     * @param \Arkitecht\FedEx\Structs\Money $netCharge
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setNetCharge(\Arkitecht\FedEx\Structs\Money $netCharge = null)
    {
        $this->NetCharge = $netCharge;
        return $this;
    }
    /**
     * Get TotalRebates value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalRebates()
    {
        return $this->TotalRebates;
    }
    /**
     * Set TotalRebates value
     * @param \Arkitecht\FedEx\Structs\Money $totalRebates
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setTotalRebates(\Arkitecht\FedEx\Structs\Money $totalRebates = null)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    /**
     * Get FreightDiscounts value
     * @return \Arkitecht\FedEx\Structs\RateDiscount|null
     */
    public function getFreightDiscounts()
    {
        return $this->FreightDiscounts;
    }
    /**
     * Set FreightDiscounts value
     * @param \Arkitecht\FedEx\Structs\RateDiscount $freightDiscounts
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setFreightDiscounts(\Arkitecht\FedEx\Structs\RateDiscount $freightDiscounts = null)
    {
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    /**
     * Get Rebates value
     * @return \Arkitecht\FedEx\Structs\Rebate|null
     */
    public function getRebates()
    {
        return $this->Rebates;
    }
    /**
     * Set Rebates value
     * @param \Arkitecht\FedEx\Structs\Rebate $rebates
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setRebates(\Arkitecht\FedEx\Structs\Rebate $rebates = null)
    {
        $this->Rebates = $rebates;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \Arkitecht\FedEx\Structs\Surcharge|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @param \Arkitecht\FedEx\Structs\Surcharge $surcharges
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setSurcharges(\Arkitecht\FedEx\Structs\Surcharge $surcharges = null)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Arkitecht\FedEx\Structs\Tax|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Arkitecht\FedEx\Structs\Tax $taxes
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setTaxes(\Arkitecht\FedEx\Structs\Tax $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get VariableHandlingCharges value
     * @return \Arkitecht\FedEx\Structs\VariableHandlingCharges|null
     */
    public function getVariableHandlingCharges()
    {
        return $this->VariableHandlingCharges;
    }
    /**
     * Set VariableHandlingCharges value
     * @param \Arkitecht\FedEx\Structs\VariableHandlingCharges $variableHandlingCharges
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public function setVariableHandlingCharges(\Arkitecht\FedEx\Structs\VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail
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
