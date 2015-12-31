<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedPackageLineItem Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces.
 * @subpackage Structs
 */
class RequestedPackageLineItem extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     * - minOccurs: 0
     * @var positiveInteger
     */
    public $SequenceNumber;
    /**
     * The GroupNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $GroupNumber;
    /**
     * The GroupPackageCount
     * Meta informations extracted from the WSDL
     * - documentation: Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $GroupPackageCount;
    /**
     * The VariableHandlingChargeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;
    /**
     * The InsuredValue
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the declared value for carriage of the package. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery,
     * nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the package. This field is only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalInsuredValue
     * and packageCount on the shipment will be used to determine this value.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $InsuredValue;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case total weight and packageCount on the shipment will be used to determine this value.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $Weight;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Dimensions
     */
    public $Dimensions;
    /**
     * The PhysicalPackaging
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     * - minOccurs: 0
     * - documentation: This enumeration rationalizes the former FedEx Express international "admissibility package" types (based on ANSI X.12) and the FedEx Freight packaging types. The values represented are those common to both carriers.
     * @var string
     */
    public $PhysicalPackaging;
    /**
     * The ItemDescription
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text describing the package.
     * - minOccurs: 0
     * @var string
     */
    public $ItemDescription;
    /**
     * The ItemDescriptionForClearance
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text describing the contents of the package to be used for clearance purposes.
     * - minOccurs: 0
     * @var string
     */
    public $ItemDescriptionForClearance;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomerReference
     */
    public $CustomerReferences;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the
     * specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
     * @var \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The ContentRecords
     * Meta informations extracted from the WSDL
     * - documentation: Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContentRecord
     */
    public $ContentRecords;
    /**
     * Constructor method for RequestedPackageLineItem
     * @uses RequestedPackageLineItem::setSequenceNumber()
     * @uses RequestedPackageLineItem::setGroupNumber()
     * @uses RequestedPackageLineItem::setGroupPackageCount()
     * @uses RequestedPackageLineItem::setVariableHandlingChargeDetail()
     * @uses RequestedPackageLineItem::setInsuredValue()
     * @uses RequestedPackageLineItem::setWeight()
     * @uses RequestedPackageLineItem::setDimensions()
     * @uses RequestedPackageLineItem::setPhysicalPackaging()
     * @uses RequestedPackageLineItem::setItemDescription()
     * @uses RequestedPackageLineItem::setItemDescriptionForClearance()
     * @uses RequestedPackageLineItem::setCustomerReferences()
     * @uses RequestedPackageLineItem::setSpecialServicesRequested()
     * @uses RequestedPackageLineItem::setContentRecords()
     * @param positiveInteger $sequenceNumber
     * @param nonNegativeInteger $groupNumber
     * @param nonNegativeInteger $groupPackageCount
     * @param \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail
     * $variableHandlingChargeDetail
     * @param \Arkitecht\FedEx\Structs\Money $insuredValue
     * @param \Arkitecht\FedEx\Structs\Weight $weight
     * @param \Arkitecht\FedEx\Structs\Dimensions $dimensions
     * @param string $physicalPackaging
     * @param string $itemDescription
     * @param string $itemDescriptionForClearance
     * @param \Arkitecht\FedEx\Structs\CustomerReference $customerReferences
     * @param \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     * $specialServicesRequested
     * @param \Arkitecht\FedEx\Structs\ContentRecord $contentRecords
     */
    public function __construct($sequenceNumber = null, $groupNumber = null, $groupPackageCount = null, \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null, \Arkitecht\FedEx\Structs\Money $insuredValue = null, \Arkitecht\FedEx\Structs\Weight $weight = null, \Arkitecht\FedEx\Structs\Dimensions $dimensions = null, $physicalPackaging = null, $itemDescription = null, $itemDescriptionForClearance = null, \Arkitecht\FedEx\Structs\CustomerReference $customerReferences = null, \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested $specialServicesRequested = null, \Arkitecht\FedEx\Structs\ContentRecord $contentRecords = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setGroupNumber($groupNumber)
            ->setGroupPackageCount($groupPackageCount)
            ->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            ->setInsuredValue($insuredValue)
            ->setWeight($weight)
            ->setDimensions($dimensions)
            ->setPhysicalPackaging($physicalPackaging)
            ->setItemDescription($itemDescription)
            ->setItemDescriptionForClearance($itemDescriptionForClearance)
            ->setCustomerReferences($customerReferences)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setContentRecords($contentRecords);
    }
    /**
     * Get SequenceNumber value
     * @return positiveInteger|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param positiveInteger $sequenceNumber
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get GroupNumber value
     * @return nonNegativeInteger|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    /**
     * Set GroupNumber value
     * @param nonNegativeInteger $groupNumber
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setGroupNumber($groupNumber = null)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    /**
     * Get GroupPackageCount value
     * @return nonNegativeInteger|null
     */
    public function getGroupPackageCount()
    {
        return $this->GroupPackageCount;
    }
    /**
     * Set GroupPackageCount value
     * @param nonNegativeInteger $groupPackageCount
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount = null)
    {
        $this->GroupPackageCount = $groupPackageCount;
        return $this;
    }
    /**
     * Get VariableHandlingChargeDetail value
     * @return \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    /**
     * Set VariableHandlingChargeDetail value
     * @param \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail
     * $variableHandlingChargeDetail
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail(\Arkitecht\FedEx\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Get InsuredValue value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }
    /**
     * Set InsuredValue value
     * @param \Arkitecht\FedEx\Structs\Money $insuredValue
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setInsuredValue(\Arkitecht\FedEx\Structs\Money $insuredValue = null)
    {
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    /**
     * Get Weight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Arkitecht\FedEx\Structs\Weight $weight
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setWeight(\Arkitecht\FedEx\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Arkitecht\FedEx\Structs\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Arkitecht\FedEx\Structs\Dimensions $dimensions
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setDimensions(\Arkitecht\FedEx\Structs\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get PhysicalPackaging value
     * @return string|null
     */
    public function getPhysicalPackaging()
    {
        return $this->PhysicalPackaging;
    }
    /**
     * Set PhysicalPackaging value
     * @uses \Arkitecht\FedEx\Enums\PhysicalPackagingType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PhysicalPackagingType::getValidValues()
     * @param string $physicalPackaging
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setPhysicalPackaging($physicalPackaging = null)
    {
        if (!\Arkitecht\FedEx\Enums\PhysicalPackagingType::valueIsValid($physicalPackaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $physicalPackaging, implode(', ', \Arkitecht\FedEx\Enums\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->PhysicalPackaging = $physicalPackaging;
        return $this;
    }
    /**
     * Get ItemDescription value
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }
    /**
     * Set ItemDescription value
     * @param string $itemDescription
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription = null)
    {
        $this->ItemDescription = $itemDescription;
        return $this;
    }
    /**
     * Get ItemDescriptionForClearance value
     * @return string|null
     */
    public function getItemDescriptionForClearance()
    {
        return $this->ItemDescriptionForClearance;
    }
    /**
     * Set ItemDescriptionForClearance value
     * @param string $itemDescriptionForClearance
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setItemDescriptionForClearance($itemDescriptionForClearance = null)
    {
        $this->ItemDescriptionForClearance = $itemDescriptionForClearance;
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return \Arkitecht\FedEx\Structs\CustomerReference|null
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @param \Arkitecht\FedEx\Structs\CustomerReference $customerReferences
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setCustomerReferences(\Arkitecht\FedEx\Structs\CustomerReference $customerReferences = null)
    {
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     * $specialServicesRequested
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setSpecialServicesRequested(\Arkitecht\FedEx\Structs\PackageSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get ContentRecords value
     * @return \Arkitecht\FedEx\Structs\ContentRecord|null
     */
    public function getContentRecords()
    {
        return $this->ContentRecords;
    }
    /**
     * Set ContentRecords value
     * @param \Arkitecht\FedEx\Structs\ContentRecord $contentRecords
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public function setContentRecords(\Arkitecht\FedEx\Structs\ContentRecord $contentRecords = null)
    {
        $this->ContentRecords = $contentRecords;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem
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
