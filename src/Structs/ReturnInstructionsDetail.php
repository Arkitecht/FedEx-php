<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnInstructionsDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the return instructions( e.g. image type) Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class ReturnInstructionsDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The CustomText
     * Meta informations extracted from the WSDL
     * - documentation: Specifies additional customer provided text to be inserted into the return document.
     * - minOccurs: 0
     * @var string
     */
    public $CustomText;
    /**
     * Constructor method for ReturnInstructionsDetail
     * @uses ReturnInstructionsDetail::setFormat()
     * @uses ReturnInstructionsDetail::setCustomText()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     * @param string $customText
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null, $customText = null)
    {
        $this
            ->setFormat($format)
            ->setCustomText($customText);
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
     * @return \Arkitecht\FedEx\Structs\ReturnInstructionsDetail
     */
    public function setFormat(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get CustomText value
     * @return string|null
     */
    public function getCustomText()
    {
        return $this->CustomText;
    }
    /**
     * Set CustomText value
     * @param string $customText
     * @return \Arkitecht\FedEx\Structs\ReturnInstructionsDetail
     */
    public function setCustomText($customText = null)
    {
        $this->CustomText = $customText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ReturnInstructionsDetail
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
