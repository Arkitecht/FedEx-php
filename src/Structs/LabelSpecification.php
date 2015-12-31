<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelSpecification Structs
 * @subpackage Structs
 */
class LabelSpecification extends AbstractStructBase
{
    /**
     * The LabelFormatType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelFormatType;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies the image format used for a shipping document.
     * @var string
     */
    public $ImageType;
    /**
     * The LabelStockType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelStockType;
    /**
     * The LabelPrintingOrientation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelPrintingOrientation;
    /**
     * The LabelRotation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Relative to normal orientation for the printer.
     * @var string
     */
    public $LabelRotation;
    /**
     * The LabelOrder
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the order in which the labels are requested to be returned
     * - minOccurs: 0
     * - documentation: Specifies the order in which the labels will be returned
     * @var string
     */
    public $LabelOrder;
    /**
     * The PrintedLabelOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $PrintedLabelOrigin;
    /**
     * The CustomerSpecifiedDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Allows customer-specified control of label content.
     * @var \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public $CustomerSpecifiedDetail;
    /**
     * Constructor method for LabelSpecification
     * @uses LabelSpecification::setLabelFormatType()
     * @uses LabelSpecification::setImageType()
     * @uses LabelSpecification::setLabelStockType()
     * @uses LabelSpecification::setLabelPrintingOrientation()
     * @uses LabelSpecification::setLabelRotation()
     * @uses LabelSpecification::setLabelOrder()
     * @uses LabelSpecification::setPrintedLabelOrigin()
     * @uses LabelSpecification::setCustomerSpecifiedDetail()
     * @param string $labelFormatType
     * @param string $imageType
     * @param string $labelStockType
     * @param string $labelPrintingOrientation
     * @param string $labelRotation
     * @param string $labelOrder
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $printedLabelOrigin
     * @param \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     * $customerSpecifiedDetail
     */
    public function __construct($labelFormatType = null, $imageType = null, $labelStockType = null, $labelPrintingOrientation = null, $labelRotation = null, $labelOrder = null, \Arkitecht\FedEx\Structs\ContactAndAddress $printedLabelOrigin = null, \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null)
    {
        $this
            ->setLabelFormatType($labelFormatType)
            ->setImageType($imageType)
            ->setLabelStockType($labelStockType)
            ->setLabelPrintingOrientation($labelPrintingOrientation)
            ->setLabelRotation($labelRotation)
            ->setLabelOrder($labelOrder)
            ->setPrintedLabelOrigin($printedLabelOrigin)
            ->setCustomerSpecifiedDetail($customerSpecifiedDetail);
    }
    /**
     * Get LabelFormatType value
     * @return string|null
     */
    public function getLabelFormatType()
    {
        return $this->LabelFormatType;
    }
    /**
     * Set LabelFormatType value
     * @uses \Arkitecht\FedEx\Enums\LabelFormatType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\LabelFormatType::getValidValues()
     * @param string $labelFormatType
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setLabelFormatType($labelFormatType = null)
    {
        if (!\Arkitecht\FedEx\Enums\LabelFormatType::valueIsValid($labelFormatType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelFormatType, implode(', ', \Arkitecht\FedEx\Enums\LabelFormatType::getValidValues())), __LINE__);
        }
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    /**
     * Get ImageType value
     * @return string|null
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    /**
     * Set ImageType value
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentImageType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentImageType::getValidValues()
     * @param string $imageType
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setImageType($imageType = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShippingDocumentImageType::valueIsValid($imageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imageType, implode(', ', \Arkitecht\FedEx\Enums\ShippingDocumentImageType::getValidValues())), __LINE__);
        }
        $this->ImageType = $imageType;
        return $this;
    }
    /**
     * Get LabelStockType value
     * @return string|null
     */
    public function getLabelStockType()
    {
        return $this->LabelStockType;
    }
    /**
     * Set LabelStockType value
     * @uses \Arkitecht\FedEx\Enums\LabelStockType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\LabelStockType::getValidValues()
     * @param string $labelStockType
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setLabelStockType($labelStockType = null)
    {
        if (!\Arkitecht\FedEx\Enums\LabelStockType::valueIsValid($labelStockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelStockType, implode(', ', \Arkitecht\FedEx\Enums\LabelStockType::getValidValues())), __LINE__);
        }
        $this->LabelStockType = $labelStockType;
        return $this;
    }
    /**
     * Get LabelPrintingOrientation value
     * @return string|null
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }
    /**
     * Set LabelPrintingOrientation value
     * @uses \Arkitecht\FedEx\Enums\LabelPrintingOrientationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\LabelPrintingOrientationType::getValidValues()
     * @param string $labelPrintingOrientation
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation = null)
    {
        if (!\Arkitecht\FedEx\Enums\LabelPrintingOrientationType::valueIsValid($labelPrintingOrientation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelPrintingOrientation, implode(', ', \Arkitecht\FedEx\Enums\LabelPrintingOrientationType::getValidValues())), __LINE__);
        }
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    /**
     * Get LabelRotation value
     * @return string|null
     */
    public function getLabelRotation()
    {
        return $this->LabelRotation;
    }
    /**
     * Set LabelRotation value
     * @uses \Arkitecht\FedEx\Enums\LabelRotationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\LabelRotationType::getValidValues()
     * @param string $labelRotation
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setLabelRotation($labelRotation = null)
    {
        if (!\Arkitecht\FedEx\Enums\LabelRotationType::valueIsValid($labelRotation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelRotation, implode(', ', \Arkitecht\FedEx\Enums\LabelRotationType::getValidValues())), __LINE__);
        }
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    /**
     * Get LabelOrder value
     * @return string|null
     */
    public function getLabelOrder()
    {
        return $this->LabelOrder;
    }
    /**
     * Set LabelOrder value
     * @uses \Arkitecht\FedEx\Enums\LabelOrderType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\LabelOrderType::getValidValues()
     * @param string $labelOrder
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setLabelOrder($labelOrder = null)
    {
        if (!\Arkitecht\FedEx\Enums\LabelOrderType::valueIsValid($labelOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelOrder, implode(', ', \Arkitecht\FedEx\Enums\LabelOrderType::getValidValues())), __LINE__);
        }
        $this->LabelOrder = $labelOrder;
        return $this;
    }
    /**
     * Get PrintedLabelOrigin value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getPrintedLabelOrigin()
    {
        return $this->PrintedLabelOrigin;
    }
    /**
     * Set PrintedLabelOrigin value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $printedLabelOrigin
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setPrintedLabelOrigin(\Arkitecht\FedEx\Structs\ContactAndAddress $printedLabelOrigin = null)
    {
        $this->PrintedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    /**
     * Get CustomerSpecifiedDetail value
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail|null
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->CustomerSpecifiedDetail;
    }
    /**
     * Set CustomerSpecifiedDetail value
     * @param \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     * $customerSpecifiedDetail
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setCustomerSpecifiedDetail(\Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
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
