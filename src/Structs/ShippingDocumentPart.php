<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentPart Structs
 * Meta informations extracted from the WSDL
 * - documentation: A single part of a shipping document, such as one page of a multiple-page document whose format requires a separate image per page.
 * @subpackage Structs
 */
class ShippingDocumentPart extends AbstractStructBase
{
    /**
     * The DocumentPartSequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The one-origin position of this part within a document.
     * - minOccurs: 0
     * @var positiveInteger
     */
    public $DocumentPartSequenceNumber;
    /**
     * The Image
     * Meta informations extracted from the WSDL
     * - documentation: Graphic or printer commands for this image within a document.
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Image;
    /**
     * Constructor method for ShippingDocumentPart
     * @uses ShippingDocumentPart::setDocumentPartSequenceNumber()
     * @uses ShippingDocumentPart::setImage()
     * @param positiveInteger $documentPartSequenceNumber
     * @param base64Binary $image
     */
    public function __construct($documentPartSequenceNumber = null, base64Binary $image = null)
    {
        $this
            ->setDocumentPartSequenceNumber($documentPartSequenceNumber)
            ->setImage($image);
    }
    /**
     * Get DocumentPartSequenceNumber value
     * @return positiveInteger|null
     */
    public function getDocumentPartSequenceNumber()
    {
        return $this->DocumentPartSequenceNumber;
    }
    /**
     * Set DocumentPartSequenceNumber value
     * @param positiveInteger $documentPartSequenceNumber
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentPart
     */
    public function setDocumentPartSequenceNumber($documentPartSequenceNumber = null)
    {
        $this->DocumentPartSequenceNumber = $documentPartSequenceNumber;
        return $this;
    }
    /**
     * Get Image value
     * @return base64Binary|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param base64Binary $image
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentPart
     */
    public function setImage(base64Binary $image = null)
    {
        $this->Image = $image;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentPart
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
