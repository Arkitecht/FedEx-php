<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsDetail Structs
 * @subpackage Structs
 */
class DangerousGoodsDetail extends AbstractStructBase
{
    /**
     * The Regulation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifies the source of regulation for hazardous commodity data.
     * @var string
     */
    public $Regulation;
    /**
     * The Accessibility
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Accessibility;
    /**
     * The CargoAircraftOnly
     * Meta informations extracted from the WSDL
     * - documentation: Shipment is packaged/documented for movement ONLY on cargo aircraft.
     * - minOccurs: 0
     * @var boolean
     */
    public $CargoAircraftOnly;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which kinds of hazardous content are in the current package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Indicates which kind of hazardous content is being reported.
     * @var string
     */
    public $Options;
    /**
     * The PackingOption
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether there is additional customer provided packaging enclosing the approved dangerous goods containers.
     * - minOccurs: 0
     * @var string
     */
    public $PackingOption;
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the configuration of this dangerous goods package. The common configuration is represented at the shipment level.
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceId;
    /**
     * The Containers
     * Meta informations extracted from the WSDL
     * - documentation: Indicates one or more containers used to pack dangerous goods commodities.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Describes an approved container used to package dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
     * @var \Arkitecht\FedEx\Structs\DangerousGoodsContainer
     */
    public $Containers;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     * - minOccurs: 0
     * - documentation: Identifies number and type of packaging units for hazardous commodities.
     * @var \Arkitecht\FedEx\Structs\HazardousCommodityPackagingDetail
     */
    public $Packaging;
    /**
     * The Signatory
     * Meta informations extracted from the WSDL
     * - documentation: Name, title and place of the signatory for this shipment.
     * - minOccurs: 0
     * - documentation: Specifies that name, title and place of the signatory responsible for the dangerous goods shipment.
     * @var \Arkitecht\FedEx\Structs\DangerousGoodsSignatory
     */
    public $Signatory;
    /**
     * The EmergencyContactNumber
     * Meta informations extracted from the WSDL
     * - documentation: Telephone number to use for contact in the event of an emergency.
     * - minOccurs: 0
     * @var string
     */
    public $EmergencyContactNumber;
    /**
     * The Offeror
     * Meta informations extracted from the WSDL
     * - documentation: Offeror's name or contract number, per DOT regulation.
     * - minOccurs: 0
     * @var string
     */
    public $Offeror;
    /**
     * The InfectiousSubstanceResponsibleContact
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the contact of the party responsible for handling the infectious substances, if any, in the dangerous goods shipment.
     * - minOccurs: 0
     * - documentation: The descriptive data for a point-of-contact person.
     * @var \Arkitecht\FedEx\Structs\Contact
     */
    public $InfectiousSubstanceResponsibleContact;
    /**
     * The AdditionalHandling
     * Meta informations extracted from the WSDL
     * - documentation: Specifies additional handling information for the current package.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalHandling;
    /**
     * The RadioactivityDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the radioactivity detail for the current package, if the package contains radioactive materials.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RadioactivityDetail
     */
    public $RadioactivityDetail;
    /**
     * Constructor method for DangerousGoodsDetail
     * @uses DangerousGoodsDetail::setRegulation()
     * @uses DangerousGoodsDetail::setAccessibility()
     * @uses DangerousGoodsDetail::setCargoAircraftOnly()
     * @uses DangerousGoodsDetail::setOptions()
     * @uses DangerousGoodsDetail::setPackingOption()
     * @uses DangerousGoodsDetail::setReferenceId()
     * @uses DangerousGoodsDetail::setContainers()
     * @uses DangerousGoodsDetail::setPackaging()
     * @uses DangerousGoodsDetail::setSignatory()
     * @uses DangerousGoodsDetail::setEmergencyContactNumber()
     * @uses DangerousGoodsDetail::setOfferor()
     * @uses DangerousGoodsDetail::setInfectiousSubstanceResponsibleContact()
     * @uses DangerousGoodsDetail::setAdditionalHandling()
     * @uses DangerousGoodsDetail::setRadioactivityDetail()
     * @param string $regulation
     * @param string $accessibility
     * @param boolean $cargoAircraftOnly
     * @param string $options
     * @param string $packingOption
     * @param string $referenceId
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsContainer $containers
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityPackagingDetail $packaging
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsSignatory $signatory
     * @param string $emergencyContactNumber
     * @param string $offeror
     * @param \Arkitecht\FedEx\Structs\Contact $infectiousSubstanceResponsibleContact
     * @param string $additionalHandling
     * @param \Arkitecht\FedEx\Structs\RadioactivityDetail $radioactivityDetail
     */
    public function __construct($regulation = null, $accessibility = null, $cargoAircraftOnly = null, $options = null, $packingOption = null, $referenceId = null, \Arkitecht\FedEx\Structs\DangerousGoodsContainer $containers = null, \Arkitecht\FedEx\Structs\HazardousCommodityPackagingDetail $packaging = null, \Arkitecht\FedEx\Structs\DangerousGoodsSignatory $signatory = null, $emergencyContactNumber = null, $offeror = null, \Arkitecht\FedEx\Structs\Contact $infectiousSubstanceResponsibleContact = null, $additionalHandling = null, \Arkitecht\FedEx\Structs\RadioactivityDetail $radioactivityDetail = null)
    {
        $this
            ->setRegulation($regulation)
            ->setAccessibility($accessibility)
            ->setCargoAircraftOnly($cargoAircraftOnly)
            ->setOptions($options)
            ->setPackingOption($packingOption)
            ->setReferenceId($referenceId)
            ->setContainers($containers)
            ->setPackaging($packaging)
            ->setSignatory($signatory)
            ->setEmergencyContactNumber($emergencyContactNumber)
            ->setOfferor($offeror)
            ->setInfectiousSubstanceResponsibleContact($infectiousSubstanceResponsibleContact)
            ->setAdditionalHandling($additionalHandling)
            ->setRadioactivityDetail($radioactivityDetail);
    }
    /**
     * Get Regulation value
     * @return string|null
     */
    public function getRegulation()
    {
        return $this->Regulation;
    }
    /**
     * Set Regulation value
     * @uses \Arkitecht\FedEx\Enums\HazardousCommodityRegulationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\HazardousCommodityRegulationType::getValidValues()
     * @param string $regulation
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setRegulation($regulation = null)
    {
        if (!\Arkitecht\FedEx\Enums\HazardousCommodityRegulationType::valueIsValid($regulation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $regulation, implode(', ', \Arkitecht\FedEx\Enums\HazardousCommodityRegulationType::getValidValues())), __LINE__);
        }
        $this->Regulation = $regulation;
        return $this;
    }
    /**
     * Get Accessibility value
     * @return string|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    /**
     * Set Accessibility value
     * @uses \Arkitecht\FedEx\Enums\DangerousGoodsAccessibilityType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DangerousGoodsAccessibilityType::getValidValues()
     * @param string $accessibility
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setAccessibility($accessibility = null)
    {
        if (!\Arkitecht\FedEx\Enums\DangerousGoodsAccessibilityType::valueIsValid($accessibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accessibility, implode(', ', \Arkitecht\FedEx\Enums\DangerousGoodsAccessibilityType::getValidValues())), __LINE__);
        }
        $this->Accessibility = $accessibility;
        return $this;
    }
    /**
     * Get CargoAircraftOnly value
     * @return boolean|null
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }
    /**
     * Set CargoAircraftOnly value
     * @param boolean $cargoAircraftOnly
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly = null)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    /**
     * Get Options value
     * @return string|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses \Arkitecht\FedEx\Enums\HazardousCommodityOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\HazardousCommodityOptionType::getValidValues()
     * @param string $options
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setOptions($options = null)
    {
        if (!\Arkitecht\FedEx\Enums\HazardousCommodityOptionType::valueIsValid($options)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $options, implode(', ', \Arkitecht\FedEx\Enums\HazardousCommodityOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Get PackingOption value
     * @return string|null
     */
    public function getPackingOption()
    {
        return $this->PackingOption;
    }
    /**
     * Set PackingOption value
     * @uses \Arkitecht\FedEx\Enums\DangerousGoodsPackingOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DangerousGoodsPackingOptionType::getValidValues()
     * @param string $packingOption
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setPackingOption($packingOption = null)
    {
        if (!\Arkitecht\FedEx\Enums\DangerousGoodsPackingOptionType::valueIsValid($packingOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingOption, implode(', ', \Arkitecht\FedEx\Enums\DangerousGoodsPackingOptionType::getValidValues())), __LINE__);
        }
        $this->PackingOption = $packingOption;
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param string $referenceId
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setReferenceId($referenceId = null)
    {
        $this->ReferenceId = $referenceId;
        return $this;
    }
    /**
     * Get Containers value
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsContainer|null
     */
    public function getContainers()
    {
        return $this->Containers;
    }
    /**
     * Set Containers value
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsContainer $containers
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setContainers(\Arkitecht\FedEx\Structs\DangerousGoodsContainer $containers = null)
    {
        $this->Containers = $containers;
        return $this;
    }
    /**
     * Get Packaging value
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityPackagingDetail|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityPackagingDetail $packaging
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setPackaging(\Arkitecht\FedEx\Structs\HazardousCommodityPackagingDetail $packaging = null)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    /**
     * Get Signatory value
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsSignatory|null
     */
    public function getSignatory()
    {
        return $this->Signatory;
    }
    /**
     * Set Signatory value
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsSignatory $signatory
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setSignatory(\Arkitecht\FedEx\Structs\DangerousGoodsSignatory $signatory = null)
    {
        $this->Signatory = $signatory;
        return $this;
    }
    /**
     * Get EmergencyContactNumber value
     * @return string|null
     */
    public function getEmergencyContactNumber()
    {
        return $this->EmergencyContactNumber;
    }
    /**
     * Set EmergencyContactNumber value
     * @param string $emergencyContactNumber
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber = null)
    {
        $this->EmergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    /**
     * Get Offeror value
     * @return string|null
     */
    public function getOfferor()
    {
        return $this->Offeror;
    }
    /**
     * Set Offeror value
     * @param string $offeror
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setOfferor($offeror = null)
    {
        $this->Offeror = $offeror;
        return $this;
    }
    /**
     * Get InfectiousSubstanceResponsibleContact value
     * @return \Arkitecht\FedEx\Structs\Contact|null
     */
    public function getInfectiousSubstanceResponsibleContact()
    {
        return $this->InfectiousSubstanceResponsibleContact;
    }
    /**
     * Set InfectiousSubstanceResponsibleContact value
     * @param \Arkitecht\FedEx\Structs\Contact $infectiousSubstanceResponsibleContact
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setInfectiousSubstanceResponsibleContact(\Arkitecht\FedEx\Structs\Contact $infectiousSubstanceResponsibleContact = null)
    {
        $this->InfectiousSubstanceResponsibleContact = $infectiousSubstanceResponsibleContact;
        return $this;
    }
    /**
     * Get AdditionalHandling value
     * @return string|null
     */
    public function getAdditionalHandling()
    {
        return $this->AdditionalHandling;
    }
    /**
     * Set AdditionalHandling value
     * @param string $additionalHandling
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setAdditionalHandling($additionalHandling = null)
    {
        $this->AdditionalHandling = $additionalHandling;
        return $this;
    }
    /**
     * Get RadioactivityDetail value
     * @return \Arkitecht\FedEx\Structs\RadioactivityDetail|null
     */
    public function getRadioactivityDetail()
    {
        return $this->RadioactivityDetail;
    }
    /**
     * Set RadioactivityDetail value
     * @param \Arkitecht\FedEx\Structs\RadioactivityDetail $radioactivityDetail
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public function setRadioactivityDetail(\Arkitecht\FedEx\Structs\RadioactivityDetail $radioactivityDetail = null)
    {
        $this->RadioactivityDetail = $radioactivityDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail
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
