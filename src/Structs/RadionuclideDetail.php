<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RadionuclideDetail Structs
 * @subpackage Structs
 */
class RadionuclideDetail extends AbstractStructBase
{
    /**
     * The Radionuclide
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Radionuclide;
    /**
     * The Activity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RadionuclideActivity
     */
    public $Activity;
    /**
     * The ExceptedPackagingIsReportableQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether packaging type "EXCEPTED" or "EXCEPTED_PACKAGE" is for radioactive material in reportable quantity.
     * - minOccurs: 0
     * @var boolean
     */
    public $ExceptedPackagingIsReportableQuantity;
    /**
     * The PhysicalForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhysicalForm;
    /**
     * The ChemicalForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ChemicalForm;
    /**
     * Constructor method for RadionuclideDetail
     * @uses RadionuclideDetail::setRadionuclide()
     * @uses RadionuclideDetail::setActivity()
     * @uses RadionuclideDetail::setExceptedPackagingIsReportableQuantity()
     * @uses RadionuclideDetail::setPhysicalForm()
     * @uses RadionuclideDetail::setChemicalForm()
     * @param string $radionuclide
     * @param \Arkitecht\FedEx\Structs\RadionuclideActivity $activity
     * @param boolean $exceptedPackagingIsReportableQuantity
     * @param string $physicalForm
     * @param string $chemicalForm
     */
    public function __construct($radionuclide = null, \Arkitecht\FedEx\Structs\RadionuclideActivity $activity = null, $exceptedPackagingIsReportableQuantity = null, $physicalForm = null, $chemicalForm = null)
    {
        $this
            ->setRadionuclide($radionuclide)
            ->setActivity($activity)
            ->setExceptedPackagingIsReportableQuantity($exceptedPackagingIsReportableQuantity)
            ->setPhysicalForm($physicalForm)
            ->setChemicalForm($chemicalForm);
    }
    /**
     * Get Radionuclide value
     * @return string|null
     */
    public function getRadionuclide()
    {
        return $this->Radionuclide;
    }
    /**
     * Set Radionuclide value
     * @param string $radionuclide
     * @return \Arkitecht\FedEx\Structs\RadionuclideDetail
     */
    public function setRadionuclide($radionuclide = null)
    {
        $this->Radionuclide = $radionuclide;
        return $this;
    }
    /**
     * Get Activity value
     * @return \Arkitecht\FedEx\Structs\RadionuclideActivity|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \Arkitecht\FedEx\Structs\RadionuclideActivity $activity
     * @return \Arkitecht\FedEx\Structs\RadionuclideDetail
     */
    public function setActivity(\Arkitecht\FedEx\Structs\RadionuclideActivity $activity = null)
    {
        $this->Activity = $activity;
        return $this;
    }
    /**
     * Get ExceptedPackagingIsReportableQuantity value
     * @return boolean|null
     */
    public function getExceptedPackagingIsReportableQuantity()
    {
        return $this->ExceptedPackagingIsReportableQuantity;
    }
    /**
     * Set ExceptedPackagingIsReportableQuantity value
     * @param boolean $exceptedPackagingIsReportableQuantity
     * @return \Arkitecht\FedEx\Structs\RadionuclideDetail
     */
    public function setExceptedPackagingIsReportableQuantity($exceptedPackagingIsReportableQuantity = null)
    {
        $this->ExceptedPackagingIsReportableQuantity = $exceptedPackagingIsReportableQuantity;
        return $this;
    }
    /**
     * Get PhysicalForm value
     * @return string|null
     */
    public function getPhysicalForm()
    {
        return $this->PhysicalForm;
    }
    /**
     * Set PhysicalForm value
     * @uses \Arkitecht\FedEx\Enums\PhysicalFormType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PhysicalFormType::getValidValues()
     * @param string $physicalForm
     * @return \Arkitecht\FedEx\Structs\RadionuclideDetail
     */
    public function setPhysicalForm($physicalForm = null)
    {
        if (!\Arkitecht\FedEx\Enums\PhysicalFormType::valueIsValid($physicalForm)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $physicalForm, implode(', ', \Arkitecht\FedEx\Enums\PhysicalFormType::getValidValues())), __LINE__);
        }
        $this->PhysicalForm = $physicalForm;
        return $this;
    }
    /**
     * Get ChemicalForm value
     * @return string|null
     */
    public function getChemicalForm()
    {
        return $this->ChemicalForm;
    }
    /**
     * Set ChemicalForm value
     * @param string $chemicalForm
     * @return \Arkitecht\FedEx\Structs\RadionuclideDetail
     */
    public function setChemicalForm($chemicalForm = null)
    {
        $this->ChemicalForm = $chemicalForm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RadionuclideDetail
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
