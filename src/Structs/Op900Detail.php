<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Op900Detail Structs
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the OP-900 form for hazardous materials packages.
 * @subpackage Structs
 */
class Op900Detail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * - minOccurs: 0
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - documentation: Identifies which reference type (from the package's customer references) is to be used as the source for the reference on this OP-900.
     * - minOccurs: 0
     * @var string
     */
    public $Reference;
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
     * The SignatureName
     * Meta informations extracted from the WSDL
     * - documentation: Data field to be used when a name is to be printed in the document instead of (or in addition to) a signature image.
     * - minOccurs: 0
     * @var string
     */
    public $SignatureName;
    /**
     * Constructor method for Op900Detail
     * @uses Op900Detail::setFormat()
     * @uses Op900Detail::setReference()
     * @uses Op900Detail::setCustomerImageUsages()
     * @uses Op900Detail::setSignatureName()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     * @param string $reference
     * @param \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages
     * @param string $signatureName
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null, $reference = null, \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages = null, $signatureName = null)
    {
        $this
            ->setFormat($format)
            ->setReference($reference)
            ->setCustomerImageUsages($customerImageUsages)
            ->setSignatureName($signatureName);
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
     * @return \Arkitecht\FedEx\Structs\Op900Detail
     */
    public function setFormat(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @uses \Arkitecht\FedEx\Enums\CustomerReferenceType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CustomerReferenceType::getValidValues()
     * @param string $reference
     * @return \Arkitecht\FedEx\Structs\Op900Detail
     */
    public function setReference($reference = null)
    {
        if (!\Arkitecht\FedEx\Enums\CustomerReferenceType::valueIsValid($reference)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reference, implode(', ', \Arkitecht\FedEx\Enums\CustomerReferenceType::getValidValues())), __LINE__);
        }
        $this->Reference = $reference;
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
     * @return \Arkitecht\FedEx\Structs\Op900Detail
     */
    public function setCustomerImageUsages(\Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages = null)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Get SignatureName value
     * @return string|null
     */
    public function getSignatureName()
    {
        return $this->SignatureName;
    }
    /**
     * Set SignatureName value
     * @param string $signatureName
     * @return \Arkitecht\FedEx\Structs\Op900Detail
     */
    public function setSignatureName($signatureName = null)
    {
        $this->SignatureName = $signatureName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Op900Detail
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
