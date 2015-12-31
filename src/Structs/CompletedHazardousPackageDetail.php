<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedHazardousPackageDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Completed package-level hazardous commodity information for a single package.
 * @subpackage Structs
 */
class CompletedHazardousPackageDetail extends AbstractStructBase
{
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
     * - documentation: A unique reference id that matches the package to a package configuration. This is populated if the client provided a package configuration for several packages that have the exact same dangerous goods content.
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceId;
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
     * - documentation: When true indicates that the package can be transported only on a cargo aircraft.
     * - minOccurs: 0
     * @var boolean
     */
    public $CargoAircraftOnly;
    /**
     * The Regulation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifies the source of regulation for hazardous commodity data.
     * @var string
     */
    public $Regulation;
    /**
     * The RadioactiveTransportIndex
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the maximum radiation level from the package (measured in microSieverts per hour at a distance of one meter from the external surface of the package, divided by 10).
     * - minOccurs: 0
     * @var decimal
     */
    public $RadioactiveTransportIndex;
    /**
     * The LabelType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the label that is to be put on a package containing radioactive material. The label type is determined in accordance with the Transportation of Dangerous Goods Act and indicates the type of radioactive material being
     * handled as well as the relative risk.
     * - minOccurs: 0
     * @var string
     */
    public $LabelType;
    /**
     * The Containers
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Specifies the concept of a container used to package dangerous goods commodities.
     * @var \Arkitecht\FedEx\Structs\ValidatedHazardousContainer
     */
    public $Containers;
    /**
     * Constructor method for CompletedHazardousPackageDetail
     * @uses CompletedHazardousPackageDetail::setReferenceId()
     * @uses CompletedHazardousPackageDetail::setAccessibility()
     * @uses CompletedHazardousPackageDetail::setCargoAircraftOnly()
     * @uses CompletedHazardousPackageDetail::setRegulation()
     * @uses CompletedHazardousPackageDetail::setRadioactiveTransportIndex()
     * @uses CompletedHazardousPackageDetail::setLabelType()
     * @uses CompletedHazardousPackageDetail::setContainers()
     * @param string $referenceId
     * @param string $accessibility
     * @param boolean $cargoAircraftOnly
     * @param string $regulation
     * @param decimal $radioactiveTransportIndex
     * @param string $labelType
     * @param \Arkitecht\FedEx\Structs\ValidatedHazardousContainer $containers
     */
    public function __construct($referenceId = null, $accessibility = null, $cargoAircraftOnly = null, $regulation = null, $radioactiveTransportIndex = null, $labelType = null, \Arkitecht\FedEx\Structs\ValidatedHazardousContainer $containers = null)
    {
        $this
            ->setReferenceId($referenceId)
            ->setAccessibility($accessibility)
            ->setCargoAircraftOnly($cargoAircraftOnly)
            ->setRegulation($regulation)
            ->setRadioactiveTransportIndex($radioactiveTransportIndex)
            ->setLabelType($labelType)
            ->setContainers($containers);
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
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
     */
    public function setReferenceId($referenceId = null)
    {
        $this->ReferenceId = $referenceId;
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
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
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
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly = null)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
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
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
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
     * Get RadioactiveTransportIndex value
     * @return decimal|null
     */
    public function getRadioactiveTransportIndex()
    {
        return $this->RadioactiveTransportIndex;
    }
    /**
     * Set RadioactiveTransportIndex value
     * @param decimal $radioactiveTransportIndex
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
     */
    public function setRadioactiveTransportIndex($radioactiveTransportIndex = null)
    {
        $this->RadioactiveTransportIndex = $radioactiveTransportIndex;
        return $this;
    }
    /**
     * Get LabelType value
     * @return string|null
     */
    public function getLabelType()
    {
        return $this->LabelType;
    }
    /**
     * Set LabelType value
     * @uses \Arkitecht\FedEx\Enums\RadioactiveLabelType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RadioactiveLabelType::getValidValues()
     * @param string $labelType
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
     */
    public function setLabelType($labelType = null)
    {
        if (!\Arkitecht\FedEx\Enums\RadioactiveLabelType::valueIsValid($labelType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelType, implode(', ', \Arkitecht\FedEx\Enums\RadioactiveLabelType::getValidValues())), __LINE__);
        }
        $this->LabelType = $labelType;
        return $this;
    }
    /**
     * Get Containers value
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousContainer|null
     */
    public function getContainers()
    {
        return $this->Containers;
    }
    /**
     * Set Containers value
     * @param \Arkitecht\FedEx\Structs\ValidatedHazardousContainer $containers
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
     */
    public function setContainers(\Arkitecht\FedEx\Structs\ValidatedHazardousContainer $containers = null)
    {
        $this->Containers = $containers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
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
