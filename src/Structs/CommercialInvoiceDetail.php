<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommercialInvoiceDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class CommercialInvoiceDetail extends AbstractStructBase
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
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the usage and identification of a customer supplied image to be used on this document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomerImageUsage
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for CommercialInvoiceDetail
     * @uses CommercialInvoiceDetail::setFormat()
     * @uses CommercialInvoiceDetail::setCustomerImageUsages()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     * @param \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null, \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages = null)
    {
        $this
            ->setFormat($format)
            ->setCustomerImageUsages($customerImageUsages);
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
     * @return \Arkitecht\FedEx\Structs\CommercialInvoiceDetail
     */
    public function setFormat(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get CustomerImageUsages value
     * @return \Arkitecht\FedEx\Structs\CustomerImageUsage|null
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    /**
     * Set CustomerImageUsages value
     * @param \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages
     * @return \Arkitecht\FedEx\Structs\CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(\Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages = null)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CommercialInvoiceDetail
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
