<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityDescription Structs
 * Meta informations extracted from the WSDL
 * - documentation: Identifies and describes an individual hazardous commodity.
 * @subpackage Structs
 */
class HazardousCommodityDescription extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Regulatory identifier for a commodity (e.g. "UN ID" value).
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $SequenceNumber;
    /**
     * The PackingGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifies DOT packing group for a hazardous commodity.
     * @var string
     */
    public $PackingGroup;
    /**
     * The PackingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies documentation and limits for validation of an individual packing group/category.
     * @var \Arkitecht\FedEx\Structs\HazardousCommodityPackingDetail
     */
    public $PackingDetails;
    /**
     * The ReportableQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $ReportableQuantity;
    /**
     * The ProperShippingName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProperShippingName;
    /**
     * The TechnicalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TechnicalName;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var decimal
     */
    public $Percentage;
    /**
     * The HazardClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HazardClass;
    /**
     * The SubsidiaryClasses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $SubsidiaryClasses;
    /**
     * The LabelText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelText;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - documentation: Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Specifies any special processing to be applied to the dangerous goods commodity description validation.
     * @var string
     */
    public $ProcessingOptions;
    /**
     * The Authorization
     * Meta informations extracted from the WSDL
     * - documentation: Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     * - minOccurs: 0
     * @var string
     */
    public $Authorization;
    /**
     * Constructor method for HazardousCommodityDescription
     * @uses HazardousCommodityDescription::setId()
     * @uses HazardousCommodityDescription::setSequenceNumber()
     * @uses HazardousCommodityDescription::setPackingGroup()
     * @uses HazardousCommodityDescription::setPackingDetails()
     * @uses HazardousCommodityDescription::setReportableQuantity()
     * @uses HazardousCommodityDescription::setProperShippingName()
     * @uses HazardousCommodityDescription::setTechnicalName()
     * @uses HazardousCommodityDescription::setPercentage()
     * @uses HazardousCommodityDescription::setHazardClass()
     * @uses HazardousCommodityDescription::setSubsidiaryClasses()
     * @uses HazardousCommodityDescription::setLabelText()
     * @uses HazardousCommodityDescription::setProcessingOptions()
     * @uses HazardousCommodityDescription::setAuthorization()
     * @param string $id
     * @param nonNegativeInteger $sequenceNumber
     * @param string $packingGroup
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityPackingDetail $packingDetails
     * @param boolean $reportableQuantity
     * @param string $properShippingName
     * @param string $technicalName
     * @param decimal $percentage
     * @param string $hazardClass
     * @param string $subsidiaryClasses
     * @param string $labelText
     * @param string $processingOptions
     * @param string $authorization
     */
    public function __construct($id = null, $sequenceNumber = null, $packingGroup = null, \Arkitecht\FedEx\Structs\HazardousCommodityPackingDetail $packingDetails = null, $reportableQuantity = null, $properShippingName = null, $technicalName = null, $percentage = null, $hazardClass = null, $subsidiaryClasses = null, $labelText = null, $processingOptions = null, $authorization = null)
    {
        $this
            ->setId($id)
            ->setSequenceNumber($sequenceNumber)
            ->setPackingGroup($packingGroup)
            ->setPackingDetails($packingDetails)
            ->setReportableQuantity($reportableQuantity)
            ->setProperShippingName($properShippingName)
            ->setTechnicalName($technicalName)
            ->setPercentage($percentage)
            ->setHazardClass($hazardClass)
            ->setSubsidiaryClasses($subsidiaryClasses)
            ->setLabelText($labelText)
            ->setProcessingOptions($processingOptions)
            ->setAuthorization($authorization);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get SequenceNumber value
     * @return nonNegativeInteger|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param nonNegativeInteger $sequenceNumber
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get PackingGroup value
     * @return string|null
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }
    /**
     * Set PackingGroup value
     * @uses \Arkitecht\FedEx\Enums\HazardousCommodityPackingGroupType::valueIsValid()
     * @uses
     * \Arkitecht\FedEx\Enums\HazardousCommodityPackingGroupType::getValidValues()
     * @param string $packingGroup
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup = null)
    {
        if (!\Arkitecht\FedEx\Enums\HazardousCommodityPackingGroupType::valueIsValid($packingGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingGroup, implode(', ', \Arkitecht\FedEx\Enums\HazardousCommodityPackingGroupType::getValidValues())), __LINE__);
        }
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    /**
     * Get PackingDetails value
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityPackingDetail|null
     */
    public function getPackingDetails()
    {
        return $this->PackingDetails;
    }
    /**
     * Set PackingDetails value
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityPackingDetail $packingDetails
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setPackingDetails(\Arkitecht\FedEx\Structs\HazardousCommodityPackingDetail $packingDetails = null)
    {
        $this->PackingDetails = $packingDetails;
        return $this;
    }
    /**
     * Get ReportableQuantity value
     * @return boolean|null
     */
    public function getReportableQuantity()
    {
        return $this->ReportableQuantity;
    }
    /**
     * Set ReportableQuantity value
     * @param boolean $reportableQuantity
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setReportableQuantity($reportableQuantity = null)
    {
        $this->ReportableQuantity = $reportableQuantity;
        return $this;
    }
    /**
     * Get ProperShippingName value
     * @return string|null
     */
    public function getProperShippingName()
    {
        return $this->ProperShippingName;
    }
    /**
     * Set ProperShippingName value
     * @param string $properShippingName
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName = null)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    /**
     * Get TechnicalName value
     * @return string|null
     */
    public function getTechnicalName()
    {
        return $this->TechnicalName;
    }
    /**
     * Set TechnicalName value
     * @param string $technicalName
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setTechnicalName($technicalName = null)
    {
        $this->TechnicalName = $technicalName;
        return $this;
    }
    /**
     * Get Percentage value
     * @return decimal|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param decimal $percentage
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setPercentage($percentage = null)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get HazardClass value
     * @return string|null
     */
    public function getHazardClass()
    {
        return $this->HazardClass;
    }
    /**
     * Set HazardClass value
     * @param string $hazardClass
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setHazardClass($hazardClass = null)
    {
        $this->HazardClass = $hazardClass;
        return $this;
    }
    /**
     * Get SubsidiaryClasses value
     * @return string|null
     */
    public function getSubsidiaryClasses()
    {
        return $this->SubsidiaryClasses;
    }
    /**
     * Set SubsidiaryClasses value
     * @param string $subsidiaryClasses
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setSubsidiaryClasses($subsidiaryClasses = null)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    /**
     * Get LabelText value
     * @return string|null
     */
    public function getLabelText()
    {
        return $this->LabelText;
    }
    /**
     * Set LabelText value
     * @param string $labelText
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setLabelText($labelText = null)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return string|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @uses
     * \Arkitecht\FedEx\Enums\HazardousCommodityDescriptionProcessingOptionType::valueI
     * sValid()
     * @uses
     * \Arkitecht\FedEx\Enums\HazardousCommodityDescriptionProcessingOptionType::getVal
     * idValues()
     * @param string $processingOptions
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setProcessingOptions($processingOptions = null)
    {
        if (!\Arkitecht\FedEx\Enums\HazardousCommodityDescriptionProcessingOptionType::valueIsValid($processingOptions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $processingOptions, implode(', ', \Arkitecht\FedEx\Enums\HazardousCommodityDescriptionProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Get Authorization value
     * @return string|null
     */
    public function getAuthorization()
    {
        return $this->Authorization;
    }
    /**
     * Set Authorization value
     * @param string $authorization
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
     */
    public function setAuthorization($authorization = null)
    {
        $this->Authorization = $authorization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription
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
