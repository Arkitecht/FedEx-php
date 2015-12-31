<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentEMailRecipient Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies an individual recipient of e-mailed shipping document(s).
 * @subpackage Structs
 */
class ShippingDocumentEMailRecipient extends AbstractStructBase
{
    /**
     * The RecipientType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the relationship of this recipient in the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $RecipientType;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Address to which the document is to be sent.
     * - minOccurs: 0
     * @var string
     */
    public $Address;
    /**
     * Constructor method for ShippingDocumentEMailRecipient
     * @uses ShippingDocumentEMailRecipient::setRecipientType()
     * @uses ShippingDocumentEMailRecipient::setAddress()
     * @param string $recipientType
     * @param string $address
     */
    public function __construct($recipientType = null, $address = null)
    {
        $this
            ->setRecipientType($recipientType)
            ->setAddress($address);
    }
    /**
     * Get RecipientType value
     * @return string|null
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    /**
     * Set RecipientType value
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationRecipientType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationRecipientType::getValidValues()
     * @param string $recipientType
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient
     */
    public function setRecipientType($recipientType = null)
    {
        if (!\Arkitecht\FedEx\Enums\EMailNotificationRecipientType::valueIsValid($recipientType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $recipientType, implode(', ', \Arkitecht\FedEx\Enums\EMailNotificationRecipientType::getValidValues())), __LINE__);
        }
        $this->RecipientType = $recipientType;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient
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
