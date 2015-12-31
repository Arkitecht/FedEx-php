<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LiabilityCoverageDetail Structs
 * @subpackage Structs
 */
class LiabilityCoverageDetail extends AbstractStructBase
{
    /**
     * The CoverageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoverageType;
    /**
     * The CoverageAmount
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the Liability Coverage Amount. For Jan 2010 this value represents coverage amount per pound
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $CoverageAmount;
    /**
     * Constructor method for LiabilityCoverageDetail
     * @uses LiabilityCoverageDetail::setCoverageType()
     * @uses LiabilityCoverageDetail::setCoverageAmount()
     * @param string $coverageType
     * @param \Arkitecht\FedEx\Structs\Money $coverageAmount
     */
    public function __construct($coverageType = null, \Arkitecht\FedEx\Structs\Money $coverageAmount = null)
    {
        $this
            ->setCoverageType($coverageType)
            ->setCoverageAmount($coverageAmount);
    }
    /**
     * Get CoverageType value
     * @return string|null
     */
    public function getCoverageType()
    {
        return $this->CoverageType;
    }
    /**
     * Set CoverageType value
     * @uses \Arkitecht\FedEx\Enums\LiabilityCoverageType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\LiabilityCoverageType::getValidValues()
     * @param string $coverageType
     * @return \Arkitecht\FedEx\Structs\LiabilityCoverageDetail
     */
    public function setCoverageType($coverageType = null)
    {
        if (!\Arkitecht\FedEx\Enums\LiabilityCoverageType::valueIsValid($coverageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coverageType, implode(', ', \Arkitecht\FedEx\Enums\LiabilityCoverageType::getValidValues())), __LINE__);
        }
        $this->CoverageType = $coverageType;
        return $this;
    }
    /**
     * Get CoverageAmount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getCoverageAmount()
    {
        return $this->CoverageAmount;
    }
    /**
     * Set CoverageAmount value
     * @param \Arkitecht\FedEx\Structs\Money $coverageAmount
     * @return \Arkitecht\FedEx\Structs\LiabilityCoverageDetail
     */
    public function setCoverageAmount(\Arkitecht\FedEx\Structs\Money $coverageAmount = null)
    {
        $this->CoverageAmount = $coverageAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\LiabilityCoverageDetail
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
