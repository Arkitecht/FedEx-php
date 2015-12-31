<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedCodDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the results of processing for the COD special service.
 * @subpackage Structs
 */
class CompletedCodDetail extends AbstractStructBase
{
    /**
     * The CollectionAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for the medium of exchange for FedEx services.
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $CollectionAmount;
    /**
     * The AdjustmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies the type of adjustment was performed to the COD collection amount during rating.
     * @var string
     */
    public $AdjustmentType;
    /**
     * Constructor method for CompletedCodDetail
     * @uses CompletedCodDetail::setCollectionAmount()
     * @uses CompletedCodDetail::setAdjustmentType()
     * @param \Arkitecht\FedEx\Structs\Money $collectionAmount
     * @param string $adjustmentType
     */
    public function __construct(\Arkitecht\FedEx\Structs\Money $collectionAmount = null, $adjustmentType = null)
    {
        $this
            ->setCollectionAmount($collectionAmount)
            ->setAdjustmentType($adjustmentType);
    }
    /**
     * Get CollectionAmount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getCollectionAmount()
    {
        return $this->CollectionAmount;
    }
    /**
     * Set CollectionAmount value
     * @param \Arkitecht\FedEx\Structs\Money $collectionAmount
     * @return \Arkitecht\FedEx\Structs\CompletedCodDetail
     */
    public function setCollectionAmount(\Arkitecht\FedEx\Structs\Money $collectionAmount = null)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    /**
     * Get AdjustmentType value
     * @return string|null
     */
    public function getAdjustmentType()
    {
        return $this->AdjustmentType;
    }
    /**
     * Set AdjustmentType value
     * @uses \Arkitecht\FedEx\Enums\CodAdjustmentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CodAdjustmentType::getValidValues()
     * @param string $adjustmentType
     * @return \Arkitecht\FedEx\Structs\CompletedCodDetail
     */
    public function setAdjustmentType($adjustmentType = null)
    {
        if (!\Arkitecht\FedEx\Enums\CodAdjustmentType::valueIsValid($adjustmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $adjustmentType, implode(', ', \Arkitecht\FedEx\Enums\CodAdjustmentType::getValidValues())), __LINE__);
        }
        $this->AdjustmentType = $adjustmentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CompletedCodDetail
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
