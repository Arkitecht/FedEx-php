<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneralAgencyAgreementDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed.
 * @subpackage Structs
 */
class GeneralAgencyAgreementDetail extends AbstractStructBase
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
     * Constructor method for GeneralAgencyAgreementDetail
     * @uses GeneralAgencyAgreementDetail::setFormat()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null)
    {
        $this
            ->setFormat($format);
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
     * @return \Arkitecht\FedEx\Structs\GeneralAgencyAgreementDetail
     */
    public function setFormat(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\GeneralAgencyAgreementDetail
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
