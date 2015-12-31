<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodReturnPackageDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the information associated with a package that has COD special service in a ground shipment.
 * @subpackage Structs
 */
class CodReturnPackageDetail extends AbstractStructBase
{
    /**
     * The CollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
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
     * The Electronic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $Electronic;
    /**
     * The Barcodes
     * Meta informations extracted from the WSDL
     * - documentation: Contains the data which form the Astra and 2DCommon barcodes that print on the COD return label.
     * - minOccurs: 0
     * - documentation: Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     * @var \Arkitecht\FedEx\Structs\PackageBarcodes
     */
    public $Barcodes;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - documentation: The label image or printer commands to print the label.
     * - minOccurs: 0
     * - documentation: All package-level shipping documents (other than labels and barcodes).
     * @var \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public $Label;
    /**
     * Constructor method for CodReturnPackageDetail
     * @uses CodReturnPackageDetail::setCollectionAmount()
     * @uses CodReturnPackageDetail::setAdjustmentType()
     * @uses CodReturnPackageDetail::setElectronic()
     * @uses CodReturnPackageDetail::setBarcodes()
     * @uses CodReturnPackageDetail::setLabel()
     * @param \Arkitecht\FedEx\Structs\Money $collectionAmount
     * @param string $adjustmentType
     * @param boolean $electronic
     * @param \Arkitecht\FedEx\Structs\PackageBarcodes $barcodes
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $label
     */
    public function __construct(\Arkitecht\FedEx\Structs\Money $collectionAmount = null, $adjustmentType = null, $electronic = null, \Arkitecht\FedEx\Structs\PackageBarcodes $barcodes = null, \Arkitecht\FedEx\Structs\ShippingDocument $label = null)
    {
        $this
            ->setCollectionAmount($collectionAmount)
            ->setAdjustmentType($adjustmentType)
            ->setElectronic($electronic)
            ->setBarcodes($barcodes)
            ->setLabel($label);
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
     * @return \Arkitecht\FedEx\Structs\CodReturnPackageDetail
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
     * @return \Arkitecht\FedEx\Structs\CodReturnPackageDetail
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
     * Get Electronic value
     * @return boolean|null
     */
    public function getElectronic()
    {
        return $this->Electronic;
    }
    /**
     * Set Electronic value
     * @param boolean $electronic
     * @return \Arkitecht\FedEx\Structs\CodReturnPackageDetail
     */
    public function setElectronic($electronic = null)
    {
        $this->Electronic = $electronic;
        return $this;
    }
    /**
     * Get Barcodes value
     * @return \Arkitecht\FedEx\Structs\PackageBarcodes|null
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    /**
     * Set Barcodes value
     * @param \Arkitecht\FedEx\Structs\PackageBarcodes $barcodes
     * @return \Arkitecht\FedEx\Structs\CodReturnPackageDetail
     */
    public function setBarcodes(\Arkitecht\FedEx\Structs\PackageBarcodes $barcodes = null)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    /**
     * Get Label value
     * @return \Arkitecht\FedEx\Structs\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $label
     * @return \Arkitecht\FedEx\Structs\CodReturnPackageDetail
     */
    public function setLabel(\Arkitecht\FedEx\Structs\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CodReturnPackageDetail
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
