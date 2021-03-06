<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityOptionDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Customer-provided specifications for handling individual commodities.
 * @subpackage Structs
 */
class HazardousCommodityOptionDetail extends AbstractStructBase
{
    /**
     * The LabelTextOption
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the customer wishes the label text to be handled for this commodity in this package.
     * - minOccurs: 0
     * - documentation: Specifies how the commodity is to be labeled.
     * @var string
     */
    public $LabelTextOption;
    /**
     * The CustomerSuppliedLabelText
     * Meta informations extracted from the WSDL
     * - documentation: Text used in labeling the commodity under control of the labelTextOption field.
     * - minOccurs: 0
     * @var string
     */
    public $CustomerSuppliedLabelText;
    /**
     * Constructor method for HazardousCommodityOptionDetail
     * @uses HazardousCommodityOptionDetail::setLabelTextOption()
     * @uses HazardousCommodityOptionDetail::setCustomerSuppliedLabelText()
     * @param string $labelTextOption
     * @param string $customerSuppliedLabelText
     */
    public function __construct($labelTextOption = null, $customerSuppliedLabelText = null)
    {
        $this
            ->setLabelTextOption($labelTextOption)
            ->setCustomerSuppliedLabelText($customerSuppliedLabelText);
    }
    /**
     * Get LabelTextOption value
     * @return string|null
     */
    public function getLabelTextOption()
    {
        return $this->LabelTextOption;
    }
    /**
     * Set LabelTextOption value
     * @uses
     * \Arkitecht\FedEx\Enums\HazardousCommodityLabelTextOptionType::valueIsValid()
     * @uses
     * \Arkitecht\FedEx\Enums\HazardousCommodityLabelTextOptionType::getValidValues()
     * @param string $labelTextOption
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail
     */
    public function setLabelTextOption($labelTextOption = null)
    {
        if (!\Arkitecht\FedEx\Enums\HazardousCommodityLabelTextOptionType::valueIsValid($labelTextOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelTextOption, implode(', ', \Arkitecht\FedEx\Enums\HazardousCommodityLabelTextOptionType::getValidValues())), __LINE__);
        }
        $this->LabelTextOption = $labelTextOption;
        return $this;
    }
    /**
     * Get CustomerSuppliedLabelText value
     * @return string|null
     */
    public function getCustomerSuppliedLabelText()
    {
        return $this->CustomerSuppliedLabelText;
    }
    /**
     * Set CustomerSuppliedLabelText value
     * @param string $customerSuppliedLabelText
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText = null)
    {
        $this->CustomerSuppliedLabelText = $customerSuppliedLabelText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail
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
