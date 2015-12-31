<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryOptionEligibilityDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Details about the eligibility for a delivery option.
 * @subpackage Structs
 */
class DeliveryOptionEligibilityDetail extends AbstractStructBase
{
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - documentation: Type of delivery option.
     * - minOccurs: 0
     * - documentation: Specifies the different option types for delivery.
     * @var string
     */
    public $Option;
    /**
     * The Eligibility
     * Meta informations extracted from the WSDL
     * - documentation: Eligibility of the customer for the specific delivery option.
     * - minOccurs: 0
     * - documentation: Specifies different values of eligibility status
     * @var string
     */
    public $Eligibility;
    /**
     * Constructor method for DeliveryOptionEligibilityDetail
     * @uses DeliveryOptionEligibilityDetail::setOption()
     * @uses DeliveryOptionEligibilityDetail::setEligibility()
     * @param string $option
     * @param string $eligibility
     */
    public function __construct($option = null, $eligibility = null)
    {
        $this
            ->setOption($option)
            ->setEligibility($eligibility);
    }
    /**
     * Get Option value
     * @return string|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @uses \Arkitecht\FedEx\Enums\DeliveryOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DeliveryOptionType::getValidValues()
     * @param string $option
     * @return \Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail
     */
    public function setOption($option = null)
    {
        if (!\Arkitecht\FedEx\Enums\DeliveryOptionType::valueIsValid($option)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $option, implode(', ', \Arkitecht\FedEx\Enums\DeliveryOptionType::getValidValues())), __LINE__);
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Get Eligibility value
     * @return string|null
     */
    public function getEligibility()
    {
        return $this->Eligibility;
    }
    /**
     * Set Eligibility value
     * @uses \Arkitecht\FedEx\Enums\EligibilityType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EligibilityType::getValidValues()
     * @param string $eligibility
     * @return \Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail
     */
    public function setEligibility($eligibility = null)
    {
        if (!\Arkitecht\FedEx\Enums\EligibilityType::valueIsValid($eligibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eligibility, implode(', ', \Arkitecht\FedEx\Enums\EligibilityType::getValidValues())), __LINE__);
        }
        $this->Eligibility = $eligibility;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail
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
