<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousCommodityDescription Structs
 * Meta informations extracted from the WSDL
 * - documentation: Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 * @subpackage Structs
 */
class ValidatedHazardousCommodityDescription extends AbstractStructBase
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
     * The PackingInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackingInstructions;
    /**
     * The ProperShippingName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProperShippingName;
    /**
     * The ProperShippingNameAndDescription
     * Meta informations extracted from the WSDL
     * - documentation: Fully-expanded descriptive text for a hazardous commodity.
     * - minOccurs: 0
     * @var string
     */
    public $ProperShippingNameAndDescription;
    /**
     * The TechnicalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TechnicalName;
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
     * The Symbols
     * Meta informations extracted from the WSDL
     * - documentation: Coded indications for special requirements or constraints.
     * - minOccurs: 0
     * @var string
     */
    public $Symbols;
    /**
     * The TunnelRestrictionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TunnelRestrictionCode;
    /**
     * The SpecialProvisions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpecialProvisions;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $Attributes;
    /**
     * The Authorization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Authorization;
    /**
     * The LabelText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelText;
    /**
     * Constructor method for ValidatedHazardousCommodityDescription
     * @uses ValidatedHazardousCommodityDescription::setId()
     * @uses ValidatedHazardousCommodityDescription::setSequenceNumber()
     * @uses ValidatedHazardousCommodityDescription::setPackingGroup()
     * @uses ValidatedHazardousCommodityDescription::setPackingInstructions()
     * @uses ValidatedHazardousCommodityDescription::setProperShippingName()
     * @uses
     * ValidatedHazardousCommodityDescription::setProperShippingNameAndDescription()
     * @uses ValidatedHazardousCommodityDescription::setTechnicalName()
     * @uses ValidatedHazardousCommodityDescription::setHazardClass()
     * @uses ValidatedHazardousCommodityDescription::setSubsidiaryClasses()
     * @uses ValidatedHazardousCommodityDescription::setSymbols()
     * @uses ValidatedHazardousCommodityDescription::setTunnelRestrictionCode()
     * @uses ValidatedHazardousCommodityDescription::setSpecialProvisions()
     * @uses ValidatedHazardousCommodityDescription::setAttributes()
     * @uses ValidatedHazardousCommodityDescription::setAuthorization()
     * @uses ValidatedHazardousCommodityDescription::setLabelText()
     * @param string $id
     * @param nonNegativeInteger $sequenceNumber
     * @param string $packingGroup
     * @param string $packingInstructions
     * @param string $properShippingName
     * @param string $properShippingNameAndDescription
     * @param string $technicalName
     * @param string $hazardClass
     * @param string $subsidiaryClasses
     * @param string $symbols
     * @param string $tunnelRestrictionCode
     * @param string $specialProvisions
     * @param string $attributes
     * @param string $authorization
     * @param string $labelText
     */
    public function __construct($id = null, $sequenceNumber = null, $packingGroup = null, $packingInstructions = null, $properShippingName = null, $properShippingNameAndDescription = null, $technicalName = null, $hazardClass = null, $subsidiaryClasses = null, $symbols = null, $tunnelRestrictionCode = null, $specialProvisions = null, $attributes = null, $authorization = null, $labelText = null)
    {
        $this
            ->setId($id)
            ->setSequenceNumber($sequenceNumber)
            ->setPackingGroup($packingGroup)
            ->setPackingInstructions($packingInstructions)
            ->setProperShippingName($properShippingName)
            ->setProperShippingNameAndDescription($properShippingNameAndDescription)
            ->setTechnicalName($technicalName)
            ->setHazardClass($hazardClass)
            ->setSubsidiaryClasses($subsidiaryClasses)
            ->setSymbols($symbols)
            ->setTunnelRestrictionCode($tunnelRestrictionCode)
            ->setSpecialProvisions($specialProvisions)
            ->setAttributes($attributes)
            ->setAuthorization($authorization)
            ->setLabelText($labelText);
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
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
     * Get PackingInstructions value
     * @return string|null
     */
    public function getPackingInstructions()
    {
        return $this->PackingInstructions;
    }
    /**
     * Set PackingInstructions value
     * @param string $packingInstructions
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setPackingInstructions($packingInstructions = null)
    {
        $this->PackingInstructions = $packingInstructions;
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName = null)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    /**
     * Get ProperShippingNameAndDescription value
     * @return string|null
     */
    public function getProperShippingNameAndDescription()
    {
        return $this->ProperShippingNameAndDescription;
    }
    /**
     * Set ProperShippingNameAndDescription value
     * @param string $properShippingNameAndDescription
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setProperShippingNameAndDescription($properShippingNameAndDescription = null)
    {
        $this->ProperShippingNameAndDescription = $properShippingNameAndDescription;
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setTechnicalName($technicalName = null)
    {
        $this->TechnicalName = $technicalName;
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setSubsidiaryClasses($subsidiaryClasses = null)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    /**
     * Get Symbols value
     * @return string|null
     */
    public function getSymbols()
    {
        return $this->Symbols;
    }
    /**
     * Set Symbols value
     * @param string $symbols
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setSymbols($symbols = null)
    {
        $this->Symbols = $symbols;
        return $this;
    }
    /**
     * Get TunnelRestrictionCode value
     * @return string|null
     */
    public function getTunnelRestrictionCode()
    {
        return $this->TunnelRestrictionCode;
    }
    /**
     * Set TunnelRestrictionCode value
     * @param string $tunnelRestrictionCode
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setTunnelRestrictionCode($tunnelRestrictionCode = null)
    {
        $this->TunnelRestrictionCode = $tunnelRestrictionCode;
        return $this;
    }
    /**
     * Get SpecialProvisions value
     * @return string|null
     */
    public function getSpecialProvisions()
    {
        return $this->SpecialProvisions;
    }
    /**
     * Set SpecialProvisions value
     * @param string $specialProvisions
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setSpecialProvisions($specialProvisions = null)
    {
        $this->SpecialProvisions = $specialProvisions;
        return $this;
    }
    /**
     * Get Attributes value
     * @return string|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \Arkitecht\FedEx\Enums\HazardousCommodityAttributeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\HazardousCommodityAttributeType::getValidValues()
     * @param string $attributes
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setAttributes($attributes = null)
    {
        if (!\Arkitecht\FedEx\Enums\HazardousCommodityAttributeType::valueIsValid($attributes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $attributes, implode(', ', \Arkitecht\FedEx\Enums\HazardousCommodityAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setAuthorization($authorization = null)
    {
        $this->Authorization = $authorization;
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
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public function setLabelText($labelText = null)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
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
