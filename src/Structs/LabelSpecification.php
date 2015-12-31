<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelSpecification Structs
 * Meta informations extracted from the WSDL
 * - documentation: Description of shipping label to be returned in the reply
 * @subpackage Structs
 */
class LabelSpecification extends AbstractStructBase
{
    /**
     * The LabelFormatType
     * Meta informations extracted from the WSDL
     * - documentation: Specify type of label to be returned
     * - minOccurs: 1
     * @var string
     */
    public $LabelFormatType;
    /**
     * The Dispositions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to create, organize, and return the document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail
     */
    public $Dispositions;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the image format used for a shipping document.
     * - minOccurs: 0
     * - documentation: Specifies the image format used for a shipping document.
     * @var string
     */
    public $ImageType;
    /**
     * The LabelStockType
     * Meta informations extracted from the WSDL
     * - documentation: For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     * - minOccurs: 0
     * @var string
     */
    public $LabelStockType;
    /**
     * The LabelPrintingOrientation
     * Meta informations extracted from the WSDL
     * - documentation: This indicates if the top or bottom of the label comes out of the printer first.
     * - minOccurs: 0
     * - documentation: This indicates if the top or bottom of the label comes out of the printer first.
     * @var string
     */
    public $LabelPrintingOrientation;
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
     * - documentation: If present, this contact and address information will replace the return address information on the label.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $PrintedLabelOrigin;
    /**
     * The CustomerSpecifiedDetail
     * Meta informations extracted from the WSDL
     * - documentation: Allows customer-specified control of label content.
     * - minOccurs: 0
     * - documentation: Allows customer-specified control of label content.
     * @var \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public $CustomerSpecifiedDetail;
    /**
     * Constructor method for LabelSpecification
     * @uses LabelSpecification::setLabelFormatType()
     * @uses LabelSpecification::setDispositions()
     * @uses LabelSpecification::setImageType()
     * @uses LabelSpecification::setLabelStockType()
     * @uses LabelSpecification::setLabelPrintingOrientation()
     * @uses LabelSpecification::setLabelOrder()
     * @uses LabelSpecification::setPrintedLabelOrigin()
     * @uses LabelSpecification::setCustomerSpecifiedDetail()
     * @param string $labelFormatType
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail $dispositions
     * @param string $imageType
     * @param string $labelStockType
     * @param string $labelPrintingOrientation
     * @param string $labelOrder
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $printedLabelOrigin
     * @param \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     * $customerSpecifiedDetail
     */
    public function __construct($labelFormatType = null, \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail $dispositions = null, $imageType = null, $labelStockType = null, $labelPrintingOrientation = null, $labelOrder = null, \Arkitecht\FedEx\Structs\ContactAndAddress $printedLabelOrigin = null, \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null)
    {
        $this
            ->setLabelFormatType($labelFormatType)
            ->setDispositions($dispositions)
            ->setImageType($imageType)
            ->setLabelStockType($labelStockType)
            ->setLabelPrintingOrientation($labelPrintingOrientation)
            ->setLabelOrder($labelOrder)
            ->setPrintedLabelOrigin($printedLabelOrigin)
            ->setCustomerSpecifiedDetail($customerSpecifiedDetail);
    }
    /**
     * Get LabelFormatType value
     * @return string
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
     * Get Dispositions value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail|null
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }
    /**
     * Set Dispositions value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail $dispositions
     * @return \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public function setDispositions(\Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail $dispositions = null)
    {
        $this->Dispositions = $dispositions;
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
