<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocument Structs
 * Meta informations extracted from the WSDL
 * - documentation: All package-level shipping documents (other than labels and barcodes).
 * @subpackage Structs
 */
class ShippingDocument extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Shipping Document Type
     * - minOccurs: 0
     * - documentation: Shipping document type.
     * @var string
     */
    public $Type;
    /**
     * The Localizations
     * Meta informations extracted from the WSDL
     * - documentation: The localizations are populated if multiple language versions of a shipping document are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Identifies the representation of human-readable text.
     * @var \Arkitecht\FedEx\Structs\Localization
     */
    public $Localizations;
    /**
     * The Grouping
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how this document image/file is organized.
     * - minOccurs: 0
     * - documentation: Specifies how to organize all shipping documents of the same type.
     * @var string
     */
    public $Grouping;
    /**
     * The ShippingDocumentDisposition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies how to return a shipping document to the caller.
     * @var string
     */
    public $ShippingDocumentDisposition;
    /**
     * The AccessReference
     * Meta informations extracted from the WSDL
     * - documentation: The name under which a STORED, DEFERRED or EMAILED document is written.
     * - minOccurs: 0
     * @var string
     */
    public $AccessReference;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the image type of this shipping document.
     * - minOccurs: 0
     * - documentation: Specifies the image format used for a shipping document.
     * @var string
     */
    public $ImageType;
    /**
     * The Resolution
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the image resolution in DPI (dots per inch).
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $Resolution;
    /**
     * The CopiesToPrint
     * Meta informations extracted from the WSDL
     * - documentation: Can be zero for documents whose disposition implies that no content is included.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $CopiesToPrint;
    /**
     * The Parts
     * Meta informations extracted from the WSDL
     * - documentation: One or more document parts which make up a single logical document, such as multiple pages of a single form.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: A single part of a shipping document, such as one page of a multiple-page document whose format requires a separate image per page.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentPart
     */
    public $Parts;
    /**
     * Constructor method for ShippingDocument
     * @uses ShippingDocument::setType()
     * @uses ShippingDocument::setLocalizations()
     * @uses ShippingDocument::setGrouping()
     * @uses ShippingDocument::setShippingDocumentDisposition()
     * @uses ShippingDocument::setAccessReference()
     * @uses ShippingDocument::setImageType()
     * @uses ShippingDocument::setResolution()
     * @uses ShippingDocument::setCopiesToPrint()
     * @uses ShippingDocument::setParts()
     * @param string $type
     * @param \Arkitecht\FedEx\Structs\Localization $localizations
     * @param string $grouping
     * @param string $shippingDocumentDisposition
     * @param string $accessReference
     * @param string $imageType
     * @param nonNegativeInteger $resolution
     * @param nonNegativeInteger $copiesToPrint
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentPart $parts
     */
    public function __construct($type = null, \Arkitecht\FedEx\Structs\Localization $localizations = null, $grouping = null, $shippingDocumentDisposition = null, $accessReference = null, $imageType = null, $resolution = null, $copiesToPrint = null, \Arkitecht\FedEx\Structs\ShippingDocumentPart $parts = null)
    {
        $this
            ->setType($type)
            ->setLocalizations($localizations)
            ->setGrouping($grouping)
            ->setShippingDocumentDisposition($shippingDocumentDisposition)
            ->setAccessReference($accessReference)
            ->setImageType($imageType)
            ->setResolution($resolution)
            ->setCopiesToPrint($copiesToPrint)
            ->setParts($parts);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Arkitecht\FedEx\Enums\ReturnedShippingDocumentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ReturnedShippingDocumentType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\ReturnedShippingDocumentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\ReturnedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Localizations value
     * @return \Arkitecht\FedEx\Structs\Localization|null
     */
    public function getLocalizations()
    {
        return $this->Localizations;
    }
    /**
     * Set Localizations value
     * @param \Arkitecht\FedEx\Structs\Localization $localizations
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public function setLocalizations(\Arkitecht\FedEx\Structs\Localization $localizations = null)
    {
        $this->Localizations = $localizations;
        return $this;
    }
    /**
     * Get Grouping value
     * @return string|null
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    /**
     * Set Grouping value
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentGroupingType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentGroupingType::getValidValues()
     * @param string $grouping
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public function setGrouping($grouping = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShippingDocumentGroupingType::valueIsValid($grouping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $grouping, implode(', ', \Arkitecht\FedEx\Enums\ShippingDocumentGroupingType::getValidValues())), __LINE__);
        }
        $this->Grouping = $grouping;
        return $this;
    }
    /**
     * Get ShippingDocumentDisposition value
     * @return string|null
     */
    public function getShippingDocumentDisposition()
    {
        return $this->ShippingDocumentDisposition;
    }
    /**
     * Set ShippingDocumentDisposition value
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentDispositionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentDispositionType::getValidValues()
     * @param string $shippingDocumentDisposition
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public function setShippingDocumentDisposition($shippingDocumentDisposition = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShippingDocumentDispositionType::valueIsValid($shippingDocumentDisposition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingDocumentDisposition, implode(', ', \Arkitecht\FedEx\Enums\ShippingDocumentDispositionType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    /**
     * Get AccessReference value
     * @return string|null
     */
    public function getAccessReference()
    {
        return $this->AccessReference;
    }
    /**
     * Set AccessReference value
     * @param string $accessReference
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public function setAccessReference($accessReference = null)
    {
        $this->AccessReference = $accessReference;
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
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
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
     * Get Resolution value
     * @return nonNegativeInteger|null
     */
    public function getResolution()
    {
        return $this->Resolution;
    }
    /**
     * Set Resolution value
     * @param nonNegativeInteger $resolution
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public function setResolution($resolution = null)
    {
        $this->Resolution = $resolution;
        return $this;
    }
    /**
     * Get CopiesToPrint value
     * @return nonNegativeInteger|null
     */
    public function getCopiesToPrint()
    {
        return $this->CopiesToPrint;
    }
    /**
     * Set CopiesToPrint value
     * @param nonNegativeInteger $copiesToPrint
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public function setCopiesToPrint($copiesToPrint = null)
    {
        $this->CopiesToPrint = $copiesToPrint;
        return $this;
    }
    /**
     * Get Parts value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentPart|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentPart $parts
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public function setParts(\Arkitecht\FedEx\Structs\ShippingDocumentPart $parts = null)
    {
        $this->Parts = $parts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShippingDocument
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
