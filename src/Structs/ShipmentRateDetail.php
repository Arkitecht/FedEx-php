<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRateDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data for a shipment's total/summary rates, as calculated per a specific rate type. The "total..." fields may differ from the sum of corresponding package data for Multiweight or Express MPS.
 * @subpackage Structs
 */
class ShipmentRateDetail extends AbstractStructBase
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
     * The RateScale
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the rate scale used.
     * - minOccurs: 0
     * @var string
     */
    public $RateScale;
    /**
     * The RateZone
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the rate zone used (based on origin and destination).
     * - minOccurs: 0
     * @var string
     */
    public $RateZone;
    /**
     * The PricingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PricingCode;
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
     * The CurrencyExchangeRate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the currency exchange performed on financial amounts for this rate.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CurrencyExchangeRate
     */
    public $CurrencyExchangeRate;
    /**
     * The SpecialRatingApplied
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which special rating cases applied to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $SpecialRatingApplied;
    /**
     * The DimDivisor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $DimDivisor;
    /**
     * The DimDivisorType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of dim divisor that was applied.
     * - minOccurs: 0
     * - documentation: Indicates the reason that a dim divisor value was chose.
     * @var string
     */
    public $DimDivisorType;
    /**
     * The FuelSurchargePercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var decimal
     */
    public $FuelSurchargePercent;
    /**
     * The TotalBillingWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $TotalBillingWeight;
    /**
     * The TotalDimWeight
     * Meta informations extracted from the WSDL
     * - documentation: Sum of dimensional weights for all packages.
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $TotalDimWeight;
    /**
     * The TotalBaseCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalBaseCharge;
    /**
     * The TotalFreightDiscounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalFreightDiscounts;
    /**
     * The TotalNetFreight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalNetFreight;
    /**
     * The TotalSurcharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalSurcharges;
    /**
     * The TotalNetFedExCharge
     * Meta informations extracted from the WSDL
     * - documentation: This shipment's totalNetFreight + totalSurcharges (not including totalTaxes).
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalNetFedExCharge;
    /**
     * The TotalTaxes
     * Meta informations extracted from the WSDL
     * - documentation: Total of the transportation-based taxes.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalTaxes;
    /**
     * The TotalNetCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalNetCharge;
    /**
     * The TotalRebates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalRebates;
    /**
     * The TotalDutiesAndTaxes
     * Meta informations extracted from the WSDL
     * - documentation: Total of all values under this shipment's dutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalDutiesAndTaxes;
    /**
     * The TotalNetChargeWithDutiesAndTaxes
     * Meta informations extracted from the WSDL
     * - documentation: This shipment's totalNetCharge + totalDutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalNetChargeWithDutiesAndTaxes;
    /**
     * The ShipmentLegRateDetails
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the Rate Details per each leg in a Freight Shipment
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     * @var \Arkitecht\FedEx\Structs\ShipmentLegRateDetail
     */
    public $ShipmentLegRateDetails;
    /**
     * The FreightRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: Rate data specific to FedEx Freight and FedEx National Freight services.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\FreightRateDetail
     */
    public $FreightRateDetail;
    /**
     * The FreightDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: All rate discounts that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RateDiscount
     */
    public $FreightDiscounts;
    /**
     * The Rebates
     * Meta informations extracted from the WSDL
     * - documentation: All rebates that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Rebate
     */
    public $Rebates;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - documentation: All surcharges that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Surcharge
     */
    public $Surcharges;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: All transportation-based taxes applicable to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Tax
     */
    public $Taxes;
    /**
     * The DutiesAndTaxes
     * Meta informations extracted from the WSDL
     * - documentation: All commodity-based duties and taxes applicable to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\EdtCommodityTax
     */
    public $DutiesAndTaxes;
    /**
     * The VariableHandlingCharges
     * Meta informations extracted from the WSDL
     * - documentation: The "order level" variable handling charges.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\VariableHandlingCharges
     */
    public $VariableHandlingCharges;
    /**
     * The TotalVariableHandlingCharges
     * Meta informations extracted from the WSDL
     * - documentation: The total of all variable handling charges at both shipment (order) and package level.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\VariableHandlingCharges
     */
    public $TotalVariableHandlingCharges;
    /**
     * Constructor method for ShipmentRateDetail
     * @uses ShipmentRateDetail::setRateType()
     * @uses ShipmentRateDetail::setRateScale()
     * @uses ShipmentRateDetail::setRateZone()
     * @uses ShipmentRateDetail::setPricingCode()
     * @uses ShipmentRateDetail::setRatedWeightMethod()
     * @uses ShipmentRateDetail::setMinimumChargeType()
     * @uses ShipmentRateDetail::setCurrencyExchangeRate()
     * @uses ShipmentRateDetail::setSpecialRatingApplied()
     * @uses ShipmentRateDetail::setDimDivisor()
     * @uses ShipmentRateDetail::setDimDivisorType()
     * @uses ShipmentRateDetail::setFuelSurchargePercent()
     * @uses ShipmentRateDetail::setTotalBillingWeight()
     * @uses ShipmentRateDetail::setTotalDimWeight()
     * @uses ShipmentRateDetail::setTotalBaseCharge()
     * @uses ShipmentRateDetail::setTotalFreightDiscounts()
     * @uses ShipmentRateDetail::setTotalNetFreight()
     * @uses ShipmentRateDetail::setTotalSurcharges()
     * @uses ShipmentRateDetail::setTotalNetFedExCharge()
     * @uses ShipmentRateDetail::setTotalTaxes()
     * @uses ShipmentRateDetail::setTotalNetCharge()
     * @uses ShipmentRateDetail::setTotalRebates()
     * @uses ShipmentRateDetail::setTotalDutiesAndTaxes()
     * @uses ShipmentRateDetail::setTotalNetChargeWithDutiesAndTaxes()
     * @uses ShipmentRateDetail::setShipmentLegRateDetails()
     * @uses ShipmentRateDetail::setFreightRateDetail()
     * @uses ShipmentRateDetail::setFreightDiscounts()
     * @uses ShipmentRateDetail::setRebates()
     * @uses ShipmentRateDetail::setSurcharges()
     * @uses ShipmentRateDetail::setTaxes()
     * @uses ShipmentRateDetail::setDutiesAndTaxes()
     * @uses ShipmentRateDetail::setVariableHandlingCharges()
     * @uses ShipmentRateDetail::setTotalVariableHandlingCharges()
     * @param string $rateType
     * @param string $rateScale
     * @param string $rateZone
     * @param string $pricingCode
     * @param string $ratedWeightMethod
     * @param string $minimumChargeType
     * @param \Arkitecht\FedEx\Structs\CurrencyExchangeRate $currencyExchangeRate
     * @param string $specialRatingApplied
     * @param nonNegativeInteger $dimDivisor
     * @param string $dimDivisorType
     * @param decimal $fuelSurchargePercent
     * @param \Arkitecht\FedEx\Structs\Weight $totalBillingWeight
     * @param \Arkitecht\FedEx\Structs\Weight $totalDimWeight
     * @param \Arkitecht\FedEx\Structs\Money $totalBaseCharge
     * @param \Arkitecht\FedEx\Structs\Money $totalFreightDiscounts
     * @param \Arkitecht\FedEx\Structs\Money $totalNetFreight
     * @param \Arkitecht\FedEx\Structs\Money $totalSurcharges
     * @param \Arkitecht\FedEx\Structs\Money $totalNetFedExCharge
     * @param \Arkitecht\FedEx\Structs\Money $totalTaxes
     * @param \Arkitecht\FedEx\Structs\Money $totalNetCharge
     * @param \Arkitecht\FedEx\Structs\Money $totalRebates
     * @param \Arkitecht\FedEx\Structs\Money $totalDutiesAndTaxes
     * @param \Arkitecht\FedEx\Structs\Money $totalNetChargeWithDutiesAndTaxes
     * @param \Arkitecht\FedEx\Structs\ShipmentLegRateDetail $shipmentLegRateDetails
     * @param \Arkitecht\FedEx\Structs\FreightRateDetail $freightRateDetail
     * @param \Arkitecht\FedEx\Structs\RateDiscount $freightDiscounts
     * @param \Arkitecht\FedEx\Structs\Rebate $rebates
     * @param \Arkitecht\FedEx\Structs\Surcharge $surcharges
     * @param \Arkitecht\FedEx\Structs\Tax $taxes
     * @param \Arkitecht\FedEx\Structs\EdtCommodityTax $dutiesAndTaxes
     * @param \Arkitecht\FedEx\Structs\VariableHandlingCharges $variableHandlingCharges
     * @param \Arkitecht\FedEx\Structs\VariableHandlingCharges
     * $totalVariableHandlingCharges
     */
    public function __construct($rateType = null, $rateScale = null, $rateZone = null, $pricingCode = null, $ratedWeightMethod = null, $minimumChargeType = null, \Arkitecht\FedEx\Structs\CurrencyExchangeRate $currencyExchangeRate = null, $specialRatingApplied = null, $dimDivisor = null, $dimDivisorType = null, $fuelSurchargePercent = null, \Arkitecht\FedEx\Structs\Weight $totalBillingWeight = null, \Arkitecht\FedEx\Structs\Weight $totalDimWeight = null, \Arkitecht\FedEx\Structs\Money $totalBaseCharge = null, \Arkitecht\FedEx\Structs\Money $totalFreightDiscounts = null, \Arkitecht\FedEx\Structs\Money $totalNetFreight = null, \Arkitecht\FedEx\Structs\Money $totalSurcharges = null, \Arkitecht\FedEx\Structs\Money $totalNetFedExCharge = null, \Arkitecht\FedEx\Structs\Money $totalTaxes = null, \Arkitecht\FedEx\Structs\Money $totalNetCharge = null, \Arkitecht\FedEx\Structs\Money $totalRebates = null, \Arkitecht\FedEx\Structs\Money $totalDutiesAndTaxes = null, \Arkitecht\FedEx\Structs\Money $totalNetChargeWithDutiesAndTaxes = null, \Arkitecht\FedEx\Structs\ShipmentLegRateDetail $shipmentLegRateDetails = null, \Arkitecht\FedEx\Structs\FreightRateDetail $freightRateDetail = null, \Arkitecht\FedEx\Structs\RateDiscount $freightDiscounts = null, \Arkitecht\FedEx\Structs\Rebate $rebates = null, \Arkitecht\FedEx\Structs\Surcharge $surcharges = null, \Arkitecht\FedEx\Structs\Tax $taxes = null, \Arkitecht\FedEx\Structs\EdtCommodityTax $dutiesAndTaxes = null, \Arkitecht\FedEx\Structs\VariableHandlingCharges $variableHandlingCharges = null, \Arkitecht\FedEx\Structs\VariableHandlingCharges $totalVariableHandlingCharges = null)
    {
        $this
            ->setRateType($rateType)
            ->setRateScale($rateScale)
            ->setRateZone($rateZone)
            ->setPricingCode($pricingCode)
            ->setRatedWeightMethod($ratedWeightMethod)
            ->setMinimumChargeType($minimumChargeType)
            ->setCurrencyExchangeRate($currencyExchangeRate)
            ->setSpecialRatingApplied($specialRatingApplied)
            ->setDimDivisor($dimDivisor)
            ->setDimDivisorType($dimDivisorType)
            ->setFuelSurchargePercent($fuelSurchargePercent)
            ->setTotalBillingWeight($totalBillingWeight)
            ->setTotalDimWeight($totalDimWeight)
            ->setTotalBaseCharge($totalBaseCharge)
            ->setTotalFreightDiscounts($totalFreightDiscounts)
            ->setTotalNetFreight($totalNetFreight)
            ->setTotalSurcharges($totalSurcharges)
            ->setTotalNetFedExCharge($totalNetFedExCharge)
            ->setTotalTaxes($totalTaxes)
            ->setTotalNetCharge($totalNetCharge)
            ->setTotalRebates($totalRebates)
            ->setTotalDutiesAndTaxes($totalDutiesAndTaxes)
            ->setTotalNetChargeWithDutiesAndTaxes($totalNetChargeWithDutiesAndTaxes)
            ->setShipmentLegRateDetails($shipmentLegRateDetails)
            ->setFreightRateDetail($freightRateDetail)
            ->setFreightDiscounts($freightDiscounts)
            ->setRebates($rebates)
            ->setSurcharges($surcharges)
            ->setTaxes($taxes)
            ->setDutiesAndTaxes($dutiesAndTaxes)
            ->setVariableHandlingCharges($variableHandlingCharges)
            ->setTotalVariableHandlingCharges($totalVariableHandlingCharges);
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
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
     * Get RateScale value
     * @return string|null
     */
    public function getRateScale()
    {
        return $this->RateScale;
    }
    /**
     * Set RateScale value
     * @param string $rateScale
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setRateScale($rateScale = null)
    {
        $this->RateScale = $rateScale;
        return $this;
    }
    /**
     * Get RateZone value
     * @return string|null
     */
    public function getRateZone()
    {
        return $this->RateZone;
    }
    /**
     * Set RateZone value
     * @param string $rateZone
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setRateZone($rateZone = null)
    {
        $this->RateZone = $rateZone;
        return $this;
    }
    /**
     * Get PricingCode value
     * @return string|null
     */
    public function getPricingCode()
    {
        return $this->PricingCode;
    }
    /**
     * Set PricingCode value
     * @uses \Arkitecht\FedEx\Enums\PricingCodeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PricingCodeType::getValidValues()
     * @param string $pricingCode
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setPricingCode($pricingCode = null)
    {
        if (!\Arkitecht\FedEx\Enums\PricingCodeType::valueIsValid($pricingCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pricingCode, implode(', ', \Arkitecht\FedEx\Enums\PricingCodeType::getValidValues())), __LINE__);
        }
        $this->PricingCode = $pricingCode;
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
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
     * Get CurrencyExchangeRate value
     * @return \Arkitecht\FedEx\Structs\CurrencyExchangeRate|null
     */
    public function getCurrencyExchangeRate()
    {
        return $this->CurrencyExchangeRate;
    }
    /**
     * Set CurrencyExchangeRate value
     * @param \Arkitecht\FedEx\Structs\CurrencyExchangeRate $currencyExchangeRate
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setCurrencyExchangeRate(\Arkitecht\FedEx\Structs\CurrencyExchangeRate $currencyExchangeRate = null)
    {
        $this->CurrencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    /**
     * Get SpecialRatingApplied value
     * @return string|null
     */
    public function getSpecialRatingApplied()
    {
        return $this->SpecialRatingApplied;
    }
    /**
     * Set SpecialRatingApplied value
     * @uses \Arkitecht\FedEx\Enums\SpecialRatingAppliedType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SpecialRatingAppliedType::getValidValues()
     * @param string $specialRatingApplied
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setSpecialRatingApplied($specialRatingApplied = null)
    {
        if (!\Arkitecht\FedEx\Enums\SpecialRatingAppliedType::valueIsValid($specialRatingApplied)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $specialRatingApplied, implode(', ', \Arkitecht\FedEx\Enums\SpecialRatingAppliedType::getValidValues())), __LINE__);
        }
        $this->SpecialRatingApplied = $specialRatingApplied;
        return $this;
    }
    /**
     * Get DimDivisor value
     * @return nonNegativeInteger|null
     */
    public function getDimDivisor()
    {
        return $this->DimDivisor;
    }
    /**
     * Set DimDivisor value
     * @param nonNegativeInteger $dimDivisor
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setDimDivisor($dimDivisor = null)
    {
        $this->DimDivisor = $dimDivisor;
        return $this;
    }
    /**
     * Get DimDivisorType value
     * @return string|null
     */
    public function getDimDivisorType()
    {
        return $this->DimDivisorType;
    }
    /**
     * Set DimDivisorType value
     * @uses \Arkitecht\FedEx\Enums\RateDimensionalDivisorType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RateDimensionalDivisorType::getValidValues()
     * @param string $dimDivisorType
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setDimDivisorType($dimDivisorType = null)
    {
        if (!\Arkitecht\FedEx\Enums\RateDimensionalDivisorType::valueIsValid($dimDivisorType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dimDivisorType, implode(', ', \Arkitecht\FedEx\Enums\RateDimensionalDivisorType::getValidValues())), __LINE__);
        }
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    /**
     * Get FuelSurchargePercent value
     * @return decimal|null
     */
    public function getFuelSurchargePercent()
    {
        return $this->FuelSurchargePercent;
    }
    /**
     * Set FuelSurchargePercent value
     * @param decimal $fuelSurchargePercent
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent = null)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    /**
     * Get TotalBillingWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getTotalBillingWeight()
    {
        return $this->TotalBillingWeight;
    }
    /**
     * Set TotalBillingWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $totalBillingWeight
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalBillingWeight(\Arkitecht\FedEx\Structs\Weight $totalBillingWeight = null)
    {
        $this->TotalBillingWeight = $totalBillingWeight;
        return $this;
    }
    /**
     * Get TotalDimWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getTotalDimWeight()
    {
        return $this->TotalDimWeight;
    }
    /**
     * Set TotalDimWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $totalDimWeight
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalDimWeight(\Arkitecht\FedEx\Structs\Weight $totalDimWeight = null)
    {
        $this->TotalDimWeight = $totalDimWeight;
        return $this;
    }
    /**
     * Get TotalBaseCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalBaseCharge()
    {
        return $this->TotalBaseCharge;
    }
    /**
     * Set TotalBaseCharge value
     * @param \Arkitecht\FedEx\Structs\Money $totalBaseCharge
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalBaseCharge(\Arkitecht\FedEx\Structs\Money $totalBaseCharge = null)
    {
        $this->TotalBaseCharge = $totalBaseCharge;
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalFreightDiscounts(\Arkitecht\FedEx\Structs\Money $totalFreightDiscounts = null)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    /**
     * Get TotalNetFreight value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalNetFreight()
    {
        return $this->TotalNetFreight;
    }
    /**
     * Set TotalNetFreight value
     * @param \Arkitecht\FedEx\Structs\Money $totalNetFreight
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalNetFreight(\Arkitecht\FedEx\Structs\Money $totalNetFreight = null)
    {
        $this->TotalNetFreight = $totalNetFreight;
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalSurcharges(\Arkitecht\FedEx\Structs\Money $totalSurcharges = null)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * Get TotalNetFedExCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalNetFedExCharge()
    {
        return $this->TotalNetFedExCharge;
    }
    /**
     * Set TotalNetFedExCharge value
     * @param \Arkitecht\FedEx\Structs\Money $totalNetFedExCharge
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalNetFedExCharge(\Arkitecht\FedEx\Structs\Money $totalNetFedExCharge = null)
    {
        $this->TotalNetFedExCharge = $totalNetFedExCharge;
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalTaxes(\Arkitecht\FedEx\Structs\Money $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Get TotalNetCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalNetCharge()
    {
        return $this->TotalNetCharge;
    }
    /**
     * Set TotalNetCharge value
     * @param \Arkitecht\FedEx\Structs\Money $totalNetCharge
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalNetCharge(\Arkitecht\FedEx\Structs\Money $totalNetCharge = null)
    {
        $this->TotalNetCharge = $totalNetCharge;
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalRebates(\Arkitecht\FedEx\Structs\Money $totalRebates = null)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    /**
     * Get TotalDutiesAndTaxes value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalDutiesAndTaxes()
    {
        return $this->TotalDutiesAndTaxes;
    }
    /**
     * Set TotalDutiesAndTaxes value
     * @param \Arkitecht\FedEx\Structs\Money $totalDutiesAndTaxes
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalDutiesAndTaxes(\Arkitecht\FedEx\Structs\Money $totalDutiesAndTaxes = null)
    {
        $this->TotalDutiesAndTaxes = $totalDutiesAndTaxes;
        return $this;
    }
    /**
     * Get TotalNetChargeWithDutiesAndTaxes value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalNetChargeWithDutiesAndTaxes()
    {
        return $this->TotalNetChargeWithDutiesAndTaxes;
    }
    /**
     * Set TotalNetChargeWithDutiesAndTaxes value
     * @param \Arkitecht\FedEx\Structs\Money $totalNetChargeWithDutiesAndTaxes
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes(\Arkitecht\FedEx\Structs\Money $totalNetChargeWithDutiesAndTaxes = null)
    {
        $this->TotalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    /**
     * Get ShipmentLegRateDetails value
     * @return \Arkitecht\FedEx\Structs\ShipmentLegRateDetail|null
     */
    public function getShipmentLegRateDetails()
    {
        return $this->ShipmentLegRateDetails;
    }
    /**
     * Set ShipmentLegRateDetails value
     * @param \Arkitecht\FedEx\Structs\ShipmentLegRateDetail $shipmentLegRateDetails
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setShipmentLegRateDetails(\Arkitecht\FedEx\Structs\ShipmentLegRateDetail $shipmentLegRateDetails = null)
    {
        $this->ShipmentLegRateDetails = $shipmentLegRateDetails;
        return $this;
    }
    /**
     * Get FreightRateDetail value
     * @return \Arkitecht\FedEx\Structs\FreightRateDetail|null
     */
    public function getFreightRateDetail()
    {
        return $this->FreightRateDetail;
    }
    /**
     * Set FreightRateDetail value
     * @param \Arkitecht\FedEx\Structs\FreightRateDetail $freightRateDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setFreightRateDetail(\Arkitecht\FedEx\Structs\FreightRateDetail $freightRateDetail = null)
    {
        $this->FreightRateDetail = $freightRateDetail;
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTaxes(\Arkitecht\FedEx\Structs\Tax $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get DutiesAndTaxes value
     * @return \Arkitecht\FedEx\Structs\EdtCommodityTax|null
     */
    public function getDutiesAndTaxes()
    {
        return $this->DutiesAndTaxes;
    }
    /**
     * Set DutiesAndTaxes value
     * @param \Arkitecht\FedEx\Structs\EdtCommodityTax $dutiesAndTaxes
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setDutiesAndTaxes(\Arkitecht\FedEx\Structs\EdtCommodityTax $dutiesAndTaxes = null)
    {
        $this->DutiesAndTaxes = $dutiesAndTaxes;
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
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setVariableHandlingCharges(\Arkitecht\FedEx\Structs\VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    /**
     * Get TotalVariableHandlingCharges value
     * @return \Arkitecht\FedEx\Structs\VariableHandlingCharges|null
     */
    public function getTotalVariableHandlingCharges()
    {
        return $this->TotalVariableHandlingCharges;
    }
    /**
     * Set TotalVariableHandlingCharges value
     * @param \Arkitecht\FedEx\Structs\VariableHandlingCharges
     * $totalVariableHandlingCharges
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public function setTotalVariableHandlingCharges(\Arkitecht\FedEx\Structs\VariableHandlingCharges $totalVariableHandlingCharges = null)
    {
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail
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
