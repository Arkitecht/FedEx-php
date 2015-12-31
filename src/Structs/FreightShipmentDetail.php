<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
 * @subpackage Structs
 */
class FreightShipmentDetail extends AbstractStructBase
{
    /**
     * The FedExFreightAccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: Account number used with FEDEX_FREIGHT service.
     * - minOccurs: 0
     * @var string
     */
    public $FedExFreightAccountNumber;
    /**
     * The FedExFreightBillingContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Used for validating FedEx Freight account number and (optionally) identifying third party payment on the bill of lading.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $FedExFreightBillingContactAndAddress;
    /**
     * The AlternateBilling
     * Meta informations extracted from the WSDL
     * - documentation: Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     * - minOccurs: 0
     * - documentation: The descriptive data for a person or company entitiy doing business with FedEx.
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $AlternateBilling;
    /**
     * The PrintedReferences
     * Meta informations extracted from the WSDL
     * - documentation: Identification values to be printed during creation of a Freight bill of lading.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Represents a reference identifier printed on Freight bills of lading
     * @var \Arkitecht\FedEx\Structs\PrintedReference
     */
    public $PrintedReferences;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the role of the party submitting the transaction.
     * - minOccurs: 0
     * - documentation: Indicates the role of the party submitting the transaction.
     * @var string
     */
    public $Role;
    /**
     * The CollectTermsType
     * Meta informations extracted from the WSDL
     * - documentation: Designates the terms of the "collect" payment for a Freight Shipment.
     * - minOccurs: 0
     * @var string
     */
    public $CollectTermsType;
    /**
     * The DeclaredValuePerUnit
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the declared value for the shipment
     * - minOccurs: 0
     * - documentation: The descriptive data for the medium of exchange for FedEx services.
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $DeclaredValuePerUnit;
    /**
     * The DeclaredValueUnits
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the declared value units corresponding to the above defined declared value
     * - minOccurs: 0
     * @var string
     */
    public $DeclaredValueUnits;
    /**
     * The LiabilityCoverageDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\LiabilityCoverageDetail
     */
    public $LiabilityCoverageDetail;
    /**
     * The Coupons
     * Meta informations extracted from the WSDL
     * - documentation: Identifiers for promotional discounts offered to customers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $Coupons;
    /**
     * The TotalHandlingUnits
     * Meta informations extracted from the WSDL
     * - documentation: Total number of individual handling units in the entire shipment (for unit pricing).
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $TotalHandlingUnits;
    /**
     * The ClientDiscountPercent
     * Meta informations extracted from the WSDL
     * - documentation: Estimated discount rate provided by client for unsecured rate quote.
     * - minOccurs: 0
     * @var decimal
     */
    public $ClientDiscountPercent;
    /**
     * The PalletWeight
     * Meta informations extracted from the WSDL
     * - documentation: Total weight of pallets used in shipment.
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $PalletWeight;
    /**
     * The ShipmentDimensions
     * Meta informations extracted from the WSDL
     * - documentation: Overall shipment dimensions.
     * - minOccurs: 0
     * - documentation: The dimensions of this package and the unit type used for the measurements.
     * @var \Arkitecht\FedEx\Structs\Dimensions
     */
    public $ShipmentDimensions;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Description for the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The SpecialServicePayments
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which party will pay surcharges for any special services which support split billing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
     * @var \Arkitecht\FedEx\Structs\FreightSpecialServicePayment
     */
    public $SpecialServicePayments;
    /**
     * The HazardousMaterialsEmergencyContactNumber
     * Meta informations extracted from the WSDL
     * - documentation: Must be populated if any line items contain hazardous materials.
     * - minOccurs: 0
     * @var string
     */
    public $HazardousMaterialsEmergencyContactNumber;
    /**
     * The HazardousMaterialsOfferor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HazardousMaterialsOfferor;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - documentation: Details of the commodities in the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Description of an individual commodity or class of content in a shipment.
     * @var \Arkitecht\FedEx\Structs\FreightShipmentLineItem
     */
    public $LineItems;
    /**
     * Constructor method for FreightShipmentDetail
     * @uses FreightShipmentDetail::setFedExFreightAccountNumber()
     * @uses FreightShipmentDetail::setFedExFreightBillingContactAndAddress()
     * @uses FreightShipmentDetail::setAlternateBilling()
     * @uses FreightShipmentDetail::setPrintedReferences()
     * @uses FreightShipmentDetail::setRole()
     * @uses FreightShipmentDetail::setCollectTermsType()
     * @uses FreightShipmentDetail::setDeclaredValuePerUnit()
     * @uses FreightShipmentDetail::setDeclaredValueUnits()
     * @uses FreightShipmentDetail::setLiabilityCoverageDetail()
     * @uses FreightShipmentDetail::setCoupons()
     * @uses FreightShipmentDetail::setTotalHandlingUnits()
     * @uses FreightShipmentDetail::setClientDiscountPercent()
     * @uses FreightShipmentDetail::setPalletWeight()
     * @uses FreightShipmentDetail::setShipmentDimensions()
     * @uses FreightShipmentDetail::setComment()
     * @uses FreightShipmentDetail::setSpecialServicePayments()
     * @uses FreightShipmentDetail::setHazardousMaterialsEmergencyContactNumber()
     * @uses FreightShipmentDetail::setHazardousMaterialsOfferor()
     * @uses FreightShipmentDetail::setLineItems()
     * @param string $fedExFreightAccountNumber
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress
     * $fedExFreightBillingContactAndAddress
     * @param \Arkitecht\FedEx\Structs\Party $alternateBilling
     * @param \Arkitecht\FedEx\Structs\PrintedReference $printedReferences
     * @param string $role
     * @param string $collectTermsType
     * @param \Arkitecht\FedEx\Structs\Money $declaredValuePerUnit
     * @param string $declaredValueUnits
     * @param \Arkitecht\FedEx\Structs\LiabilityCoverageDetail $liabilityCoverageDetail
     * @param string $coupons
     * @param nonNegativeInteger $totalHandlingUnits
     * @param decimal $clientDiscountPercent
     * @param \Arkitecht\FedEx\Structs\Weight $palletWeight
     * @param \Arkitecht\FedEx\Structs\Dimensions $shipmentDimensions
     * @param string $comment
     * @param \Arkitecht\FedEx\Structs\FreightSpecialServicePayment
     * $specialServicePayments
     * @param string $hazardousMaterialsEmergencyContactNumber
     * @param string $hazardousMaterialsOfferor
     * @param \Arkitecht\FedEx\Structs\FreightShipmentLineItem $lineItems
     */
    public function __construct($fedExFreightAccountNumber = null, \Arkitecht\FedEx\Structs\ContactAndAddress $fedExFreightBillingContactAndAddress = null, \Arkitecht\FedEx\Structs\Party $alternateBilling = null, \Arkitecht\FedEx\Structs\PrintedReference $printedReferences = null, $role = null, $collectTermsType = null, \Arkitecht\FedEx\Structs\Money $declaredValuePerUnit = null, $declaredValueUnits = null, \Arkitecht\FedEx\Structs\LiabilityCoverageDetail $liabilityCoverageDetail = null, $coupons = null, $totalHandlingUnits = null, $clientDiscountPercent = null, \Arkitecht\FedEx\Structs\Weight $palletWeight = null, \Arkitecht\FedEx\Structs\Dimensions $shipmentDimensions = null, $comment = null, \Arkitecht\FedEx\Structs\FreightSpecialServicePayment $specialServicePayments = null, $hazardousMaterialsEmergencyContactNumber = null, $hazardousMaterialsOfferor = null, \Arkitecht\FedEx\Structs\FreightShipmentLineItem $lineItems = null)
    {
        $this
            ->setFedExFreightAccountNumber($fedExFreightAccountNumber)
            ->setFedExFreightBillingContactAndAddress($fedExFreightBillingContactAndAddress)
            ->setAlternateBilling($alternateBilling)
            ->setPrintedReferences($printedReferences)
            ->setRole($role)
            ->setCollectTermsType($collectTermsType)
            ->setDeclaredValuePerUnit($declaredValuePerUnit)
            ->setDeclaredValueUnits($declaredValueUnits)
            ->setLiabilityCoverageDetail($liabilityCoverageDetail)
            ->setCoupons($coupons)
            ->setTotalHandlingUnits($totalHandlingUnits)
            ->setClientDiscountPercent($clientDiscountPercent)
            ->setPalletWeight($palletWeight)
            ->setShipmentDimensions($shipmentDimensions)
            ->setComment($comment)
            ->setSpecialServicePayments($specialServicePayments)
            ->setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber)
            ->setHazardousMaterialsOfferor($hazardousMaterialsOfferor)
            ->setLineItems($lineItems);
    }
    /**
     * Get FedExFreightAccountNumber value
     * @return string|null
     */
    public function getFedExFreightAccountNumber()
    {
        return $this->FedExFreightAccountNumber;
    }
    /**
     * Set FedExFreightAccountNumber value
     * @param string $fedExFreightAccountNumber
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber = null)
    {
        $this->FedExFreightAccountNumber = $fedExFreightAccountNumber;
        return $this;
    }
    /**
     * Get FedExFreightBillingContactAndAddress value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getFedExFreightBillingContactAndAddress()
    {
        return $this->FedExFreightBillingContactAndAddress;
    }
    /**
     * Set FedExFreightBillingContactAndAddress value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress
     * $fedExFreightBillingContactAndAddress
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress(\Arkitecht\FedEx\Structs\ContactAndAddress $fedExFreightBillingContactAndAddress = null)
    {
        $this->FedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
        return $this;
    }
    /**
     * Get AlternateBilling value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getAlternateBilling()
    {
        return $this->AlternateBilling;
    }
    /**
     * Set AlternateBilling value
     * @param \Arkitecht\FedEx\Structs\Party $alternateBilling
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setAlternateBilling(\Arkitecht\FedEx\Structs\Party $alternateBilling = null)
    {
        $this->AlternateBilling = $alternateBilling;
        return $this;
    }
    /**
     * Get PrintedReferences value
     * @return \Arkitecht\FedEx\Structs\PrintedReference|null
     */
    public function getPrintedReferences()
    {
        return $this->PrintedReferences;
    }
    /**
     * Set PrintedReferences value
     * @param \Arkitecht\FedEx\Structs\PrintedReference $printedReferences
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setPrintedReferences(\Arkitecht\FedEx\Structs\PrintedReference $printedReferences = null)
    {
        $this->PrintedReferences = $printedReferences;
        return $this;
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \Arkitecht\FedEx\Enums\FreightShipmentRoleType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightShipmentRoleType::getValidValues()
     * @param string $role
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setRole($role = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightShipmentRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \Arkitecht\FedEx\Enums\FreightShipmentRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get CollectTermsType value
     * @return string|null
     */
    public function getCollectTermsType()
    {
        return $this->CollectTermsType;
    }
    /**
     * Set CollectTermsType value
     * @uses \Arkitecht\FedEx\Enums\FreightCollectTermsType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightCollectTermsType::getValidValues()
     * @param string $collectTermsType
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setCollectTermsType($collectTermsType = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightCollectTermsType::valueIsValid($collectTermsType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $collectTermsType, implode(', ', \Arkitecht\FedEx\Enums\FreightCollectTermsType::getValidValues())), __LINE__);
        }
        $this->CollectTermsType = $collectTermsType;
        return $this;
    }
    /**
     * Get DeclaredValuePerUnit value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getDeclaredValuePerUnit()
    {
        return $this->DeclaredValuePerUnit;
    }
    /**
     * Set DeclaredValuePerUnit value
     * @param \Arkitecht\FedEx\Structs\Money $declaredValuePerUnit
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setDeclaredValuePerUnit(\Arkitecht\FedEx\Structs\Money $declaredValuePerUnit = null)
    {
        $this->DeclaredValuePerUnit = $declaredValuePerUnit;
        return $this;
    }
    /**
     * Get DeclaredValueUnits value
     * @return string|null
     */
    public function getDeclaredValueUnits()
    {
        return $this->DeclaredValueUnits;
    }
    /**
     * Set DeclaredValueUnits value
     * @param string $declaredValueUnits
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setDeclaredValueUnits($declaredValueUnits = null)
    {
        $this->DeclaredValueUnits = $declaredValueUnits;
        return $this;
    }
    /**
     * Get LiabilityCoverageDetail value
     * @return \Arkitecht\FedEx\Structs\LiabilityCoverageDetail|null
     */
    public function getLiabilityCoverageDetail()
    {
        return $this->LiabilityCoverageDetail;
    }
    /**
     * Set LiabilityCoverageDetail value
     * @param \Arkitecht\FedEx\Structs\LiabilityCoverageDetail $liabilityCoverageDetail
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setLiabilityCoverageDetail(\Arkitecht\FedEx\Structs\LiabilityCoverageDetail $liabilityCoverageDetail = null)
    {
        $this->LiabilityCoverageDetail = $liabilityCoverageDetail;
        return $this;
    }
    /**
     * Get Coupons value
     * @return string|null
     */
    public function getCoupons()
    {
        return $this->Coupons;
    }
    /**
     * Set Coupons value
     * @param string $coupons
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setCoupons($coupons = null)
    {
        $this->Coupons = $coupons;
        return $this;
    }
    /**
     * Get TotalHandlingUnits value
     * @return nonNegativeInteger|null
     */
    public function getTotalHandlingUnits()
    {
        return $this->TotalHandlingUnits;
    }
    /**
     * Set TotalHandlingUnits value
     * @param nonNegativeInteger $totalHandlingUnits
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits = null)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    /**
     * Get ClientDiscountPercent value
     * @return decimal|null
     */
    public function getClientDiscountPercent()
    {
        return $this->ClientDiscountPercent;
    }
    /**
     * Set ClientDiscountPercent value
     * @param decimal $clientDiscountPercent
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setClientDiscountPercent($clientDiscountPercent = null)
    {
        $this->ClientDiscountPercent = $clientDiscountPercent;
        return $this;
    }
    /**
     * Get PalletWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getPalletWeight()
    {
        return $this->PalletWeight;
    }
    /**
     * Set PalletWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $palletWeight
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setPalletWeight(\Arkitecht\FedEx\Structs\Weight $palletWeight = null)
    {
        $this->PalletWeight = $palletWeight;
        return $this;
    }
    /**
     * Get ShipmentDimensions value
     * @return \Arkitecht\FedEx\Structs\Dimensions|null
     */
    public function getShipmentDimensions()
    {
        return $this->ShipmentDimensions;
    }
    /**
     * Set ShipmentDimensions value
     * @param \Arkitecht\FedEx\Structs\Dimensions $shipmentDimensions
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setShipmentDimensions(\Arkitecht\FedEx\Structs\Dimensions $shipmentDimensions = null)
    {
        $this->ShipmentDimensions = $shipmentDimensions;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setComment($comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get SpecialServicePayments value
     * @return \Arkitecht\FedEx\Structs\FreightSpecialServicePayment|null
     */
    public function getSpecialServicePayments()
    {
        return $this->SpecialServicePayments;
    }
    /**
     * Set SpecialServicePayments value
     * @param \Arkitecht\FedEx\Structs\FreightSpecialServicePayment
     * $specialServicePayments
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setSpecialServicePayments(\Arkitecht\FedEx\Structs\FreightSpecialServicePayment $specialServicePayments = null)
    {
        $this->SpecialServicePayments = $specialServicePayments;
        return $this;
    }
    /**
     * Get HazardousMaterialsEmergencyContactNumber value
     * @return string|null
     */
    public function getHazardousMaterialsEmergencyContactNumber()
    {
        return $this->HazardousMaterialsEmergencyContactNumber;
    }
    /**
     * Set HazardousMaterialsEmergencyContactNumber value
     * @param string $hazardousMaterialsEmergencyContactNumber
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber = null)
    {
        $this->HazardousMaterialsEmergencyContactNumber = $hazardousMaterialsEmergencyContactNumber;
        return $this;
    }
    /**
     * Get HazardousMaterialsOfferor value
     * @return string|null
     */
    public function getHazardousMaterialsOfferor()
    {
        return $this->HazardousMaterialsOfferor;
    }
    /**
     * Set HazardousMaterialsOfferor value
     * @param string $hazardousMaterialsOfferor
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setHazardousMaterialsOfferor($hazardousMaterialsOfferor = null)
    {
        $this->HazardousMaterialsOfferor = $hazardousMaterialsOfferor;
        return $this;
    }
    /**
     * Get LineItems value
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem|null
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    /**
     * Set LineItems value
     * @param \Arkitecht\FedEx\Structs\FreightShipmentLineItem $lineItems
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public function setLineItems(\Arkitecht\FedEx\Structs\FreightShipmentLineItem $lineItems = null)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail
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
