<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportDeclarationDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the Export Declaration.
 * @subpackage Structs
 */
class ExportDeclarationDetail extends AbstractStructBase
{
    /**
     * The DocumentFormat
     * Meta informations extracted from the WSDL
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * - minOccurs: 0
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public $DocumentFormat;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the usage and identification of customer supplied images to be used on this document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomerImageUsage
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for ExportDeclarationDetail
     * @uses ExportDeclarationDetail::setDocumentFormat()
     * @uses ExportDeclarationDetail::setCustomerImageUsages()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $documentFormat
     * @param \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $documentFormat = null, \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages = null)
    {
        $this
            ->setDocumentFormat($documentFormat)
            ->setCustomerImageUsages($customerImageUsages);
    }
    /**
     * Get DocumentFormat value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat|null
     */
    public function getDocumentFormat()
    {
        return $this->DocumentFormat;
    }
    /**
     * Set DocumentFormat value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $documentFormat
     * @return \Arkitecht\FedEx\Structs\ExportDeclarationDetail
     */
    public function setDocumentFormat(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $documentFormat = null)
    {
        $this->DocumentFormat = $documentFormat;
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
     * @return \Arkitecht\FedEx\Structs\ExportDeclarationDetail
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
     * @return \Arkitecht\FedEx\Structs\ExportDeclarationDetail
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
