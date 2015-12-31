<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentFormat Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class ShippingDocumentFormat extends AbstractStructBase
{
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
     * The TopOfPageOffset
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     * - minOccurs: 0
     * - documentation: Represents a one-dimensional measurement in small units (e.g. suitable for measuring a package or document), contrasted with Distance, which represents a large one-dimensional measurement (e.g. distance between cities).
     * @var \Arkitecht\FedEx\Structs\LinearMeasure
     */
    public $TopOfPageOffset;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies the image format used for a shipping document.
     * @var string
     */
    public $ImageType;
    /**
     * The StockType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies the type of paper (stock) on which a document will be printed.
     * @var string
     */
    public $StockType;
    /**
     * The ProvideInstructions
     * Meta informations extracted from the WSDL
     * - documentation: For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     * - minOccurs: 0
     * @var boolean
     */
    public $ProvideInstructions;
    /**
     * The OptionsRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DocumentFormatOptionsRequested
     */
    public $OptionsRequested;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for ShippingDocumentFormat
     * @uses ShippingDocumentFormat::setDispositions()
     * @uses ShippingDocumentFormat::setTopOfPageOffset()
     * @uses ShippingDocumentFormat::setImageType()
     * @uses ShippingDocumentFormat::setStockType()
     * @uses ShippingDocumentFormat::setProvideInstructions()
     * @uses ShippingDocumentFormat::setOptionsRequested()
     * @uses ShippingDocumentFormat::setLocalization()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail $dispositions
     * @param \Arkitecht\FedEx\Structs\LinearMeasure $topOfPageOffset
     * @param string $imageType
     * @param string $stockType
     * @param boolean $provideInstructions
     * @param \Arkitecht\FedEx\Structs\DocumentFormatOptionsRequested $optionsRequested
     * @param \Arkitecht\FedEx\Structs\Localization $localization
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail $dispositions = null, \Arkitecht\FedEx\Structs\LinearMeasure $topOfPageOffset = null, $imageType = null, $stockType = null, $provideInstructions = null, \Arkitecht\FedEx\Structs\DocumentFormatOptionsRequested $optionsRequested = null, \Arkitecht\FedEx\Structs\Localization $localization = null)
    {
        $this
            ->setDispositions($dispositions)
            ->setTopOfPageOffset($topOfPageOffset)
            ->setImageType($imageType)
            ->setStockType($stockType)
            ->setProvideInstructions($provideInstructions)
            ->setOptionsRequested($optionsRequested)
            ->setLocalization($localization);
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
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public function setDispositions(\Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail $dispositions = null)
    {
        $this->Dispositions = $dispositions;
        return $this;
    }
    /**
     * Get TopOfPageOffset value
     * @return \Arkitecht\FedEx\Structs\LinearMeasure|null
     */
    public function getTopOfPageOffset()
    {
        return $this->TopOfPageOffset;
    }
    /**
     * Set TopOfPageOffset value
     * @param \Arkitecht\FedEx\Structs\LinearMeasure $topOfPageOffset
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public function setTopOfPageOffset(\Arkitecht\FedEx\Structs\LinearMeasure $topOfPageOffset = null)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
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
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat
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
     * Get StockType value
     * @return string|null
     */
    public function getStockType()
    {
        return $this->StockType;
    }
    /**
     * Set StockType value
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentStockType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentStockType::getValidValues()
     * @param string $stockType
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public function setStockType($stockType = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShippingDocumentStockType::valueIsValid($stockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $stockType, implode(', ', \Arkitecht\FedEx\Enums\ShippingDocumentStockType::getValidValues())), __LINE__);
        }
        $this->StockType = $stockType;
        return $this;
    }
    /**
     * Get ProvideInstructions value
     * @return boolean|null
     */
    public function getProvideInstructions()
    {
        return $this->ProvideInstructions;
    }
    /**
     * Set ProvideInstructions value
     * @param boolean $provideInstructions
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions = null)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    /**
     * Get OptionsRequested value
     * @return \Arkitecht\FedEx\Structs\DocumentFormatOptionsRequested|null
     */
    public function getOptionsRequested()
    {
        return $this->OptionsRequested;
    }
    /**
     * Set OptionsRequested value
     * @param \Arkitecht\FedEx\Structs\DocumentFormatOptionsRequested $optionsRequested
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public function setOptionsRequested(\Arkitecht\FedEx\Structs\DocumentFormatOptionsRequested $optionsRequested = null)
    {
        $this->OptionsRequested = $optionsRequested;
        return $this;
    }
    /**
     * Get Localization value
     * @return \Arkitecht\FedEx\Structs\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \Arkitecht\FedEx\Structs\Localization $localization
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public function setLocalization(\Arkitecht\FedEx\Structs\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat
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
