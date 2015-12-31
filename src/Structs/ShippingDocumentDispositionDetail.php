<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentDispositionDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 * @subpackage Structs
 */
class ShippingDocumentDispositionDetail extends AbstractStructBase
{
    /**
     * The DispositionType
     * Meta informations extracted from the WSDL
     * - documentation: Values in this field specify how to create and return the document.
     * - minOccurs: 0
     * - documentation: Specifies how to return a shipping document to the caller.
     * @var string
     */
    public $DispositionType;
    /**
     * The Grouping
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to organize all documents of this type.
     * - minOccurs: 0
     * - documentation: Specifies how to organize all shipping documents of the same type.
     * @var string
     */
    public $Grouping;
    /**
     * The EMailDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to e-mail document images.
     * - minOccurs: 0
     * - documentation: Specifies how to e-mail shipping documents.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail
     */
    public $EMailDetail;
    /**
     * The PrintDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how a queued document is to be printed.
     * - minOccurs: 0
     * - documentation: Specifies printing options for a shipping document.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentPrintDetail
     */
    public $PrintDetail;
    /**
     * Constructor method for ShippingDocumentDispositionDetail
     * @uses ShippingDocumentDispositionDetail::setDispositionType()
     * @uses ShippingDocumentDispositionDetail::setGrouping()
     * @uses ShippingDocumentDispositionDetail::setEMailDetail()
     * @uses ShippingDocumentDispositionDetail::setPrintDetail()
     * @param string $dispositionType
     * @param string $grouping
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail $eMailDetail
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentPrintDetail $printDetail
     */
    public function __construct($dispositionType = null, $grouping = null, \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail $eMailDetail = null, \Arkitecht\FedEx\Structs\ShippingDocumentPrintDetail $printDetail = null)
    {
        $this
            ->setDispositionType($dispositionType)
            ->setGrouping($grouping)
            ->setEMailDetail($eMailDetail)
            ->setPrintDetail($printDetail);
    }
    /**
     * Get DispositionType value
     * @return string|null
     */
    public function getDispositionType()
    {
        return $this->DispositionType;
    }
    /**
     * Set DispositionType value
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentDispositionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentDispositionType::getValidValues()
     * @param string $dispositionType
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail
     */
    public function setDispositionType($dispositionType = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShippingDocumentDispositionType::valueIsValid($dispositionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dispositionType, implode(', ', \Arkitecht\FedEx\Enums\ShippingDocumentDispositionType::getValidValues())), __LINE__);
        }
        $this->DispositionType = $dispositionType;
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
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail
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
     * Get EMailDetail value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail|null
     */
    public function getEMailDetail()
    {
        return $this->EMailDetail;
    }
    /**
     * Set EMailDetail value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail $eMailDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail
     */
    public function setEMailDetail(\Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail $eMailDetail = null)
    {
        $this->EMailDetail = $eMailDetail;
        return $this;
    }
    /**
     * Get PrintDetail value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentPrintDetail|null
     */
    public function getPrintDetail()
    {
        return $this->PrintDetail;
    }
    /**
     * Set PrintDetail value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentPrintDetail $printDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail
     */
    public function setPrintDetail(\Arkitecht\FedEx\Structs\ShippingDocumentPrintDetail $printDetail = null)
    {
        $this->PrintDetail = $printDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentDispositionDetail
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
