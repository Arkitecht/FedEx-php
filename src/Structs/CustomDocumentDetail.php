<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomDocumentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a custom-specified document, either at shipment or package level.
 * @subpackage Structs
 */
class CustomDocumentDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Common information controlling document production.
     * - minOccurs: 0
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The LabelPrintingOrientation
     * Meta informations extracted from the WSDL
     * - documentation: Applicable only to documents produced on thermal printers with roll stock.
     * - minOccurs: 0
     * @var string
     */
    public $LabelPrintingOrientation;
    /**
     * The LabelRotation
     * Meta informations extracted from the WSDL
     * - documentation: Applicable only to documents produced on thermal printers with roll stock.
     * - minOccurs: 0
     * - documentation: Relative to normal orientation for the printer.
     * @var string
     */
    public $LabelRotation;
    /**
     * The SpecificationId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the formatting specification used to construct this custom document.
     * - minOccurs: 0
     * @var string
     */
    public $SpecificationId;
    /**
     * The CustomContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomLabelDetail
     */
    public $CustomContent;
    /**
     * Constructor method for CustomDocumentDetail
     * @uses CustomDocumentDetail::setFormat()
     * @uses CustomDocumentDetail::setLabelPrintingOrientation()
     * @uses CustomDocumentDetail::setLabelRotation()
     * @uses CustomDocumentDetail::setSpecificationId()
     * @uses CustomDocumentDetail::setCustomContent()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     * @param string $labelPrintingOrientation
     * @param string $labelRotation
     * @param string $specificationId
     * @param \Arkitecht\FedEx\Structs\CustomLabelDetail $customContent
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null, $labelPrintingOrientation = null, $labelRotation = null, $specificationId = null, \Arkitecht\FedEx\Structs\CustomLabelDetail $customContent = null)
    {
        $this
            ->setFormat($format)
            ->setLabelPrintingOrientation($labelPrintingOrientation)
            ->setLabelRotation($labelRotation)
            ->setSpecificationId($specificationId)
            ->setCustomContent($customContent);
    }
    /**
     * Get Format value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     * @return \Arkitecht\FedEx\Structs\CustomDocumentDetail
     */
    public function setFormat(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
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
     * @return \Arkitecht\FedEx\Structs\CustomDocumentDetail
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
     * @return \Arkitecht\FedEx\Structs\CustomDocumentDetail
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
     * Get SpecificationId value
     * @return string|null
     */
    public function getSpecificationId()
    {
        return $this->SpecificationId;
    }
    /**
     * Set SpecificationId value
     * @param string $specificationId
     * @return \Arkitecht\FedEx\Structs\CustomDocumentDetail
     */
    public function setSpecificationId($specificationId = null)
    {
        $this->SpecificationId = $specificationId;
        return $this;
    }
    /**
     * Get CustomContent value
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail|null
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }
    /**
     * Set CustomContent value
     * @param \Arkitecht\FedEx\Structs\CustomLabelDetail $customContent
     * @return \Arkitecht\FedEx\Structs\CustomDocumentDetail
     */
    public function setCustomContent(\Arkitecht\FedEx\Structs\CustomLabelDetail $customContent = null)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomDocumentDetail
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
