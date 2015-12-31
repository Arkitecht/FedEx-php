<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentEMailDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to e-mail shipping documents.
 * @subpackage Structs
 */
class ShippingDocumentEMailDetail extends AbstractStructBase
{
    /**
     * The EMailRecipients
     * Meta informations extracted from the WSDL
     * - documentation: Provides the roles and email addresses for e-mail recipients.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Specifies an individual recipient of e-mailed shipping document(s).
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient
     */
    public $EMailRecipients;
    /**
     * The Grouping
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the convention by which documents are to be grouped as e-mail attachments.
     * - minOccurs: 0
     * @var string
     */
    public $Grouping;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the language in which the email containing the document is requested to be composed.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for ShippingDocumentEMailDetail
     * @uses ShippingDocumentEMailDetail::setEMailRecipients()
     * @uses ShippingDocumentEMailDetail::setGrouping()
     * @uses ShippingDocumentEMailDetail::setLocalization()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient $eMailRecipients
     * @param string $grouping
     * @param \Arkitecht\FedEx\Structs\Localization $localization
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient $eMailRecipients = null, $grouping = null, \Arkitecht\FedEx\Structs\Localization $localization = null)
    {
        $this
            ->setEMailRecipients($eMailRecipients)
            ->setGrouping($grouping)
            ->setLocalization($localization);
    }
    /**
     * Get EMailRecipients value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient|null
     */
    public function getEMailRecipients()
    {
        return $this->EMailRecipients;
    }
    /**
     * Set EMailRecipients value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient $eMailRecipients
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(\Arkitecht\FedEx\Structs\ShippingDocumentEMailRecipient $eMailRecipients = null)
    {
        $this->EMailRecipients = $eMailRecipients;
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
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentEMailGroupingType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShippingDocumentEMailGroupingType::getValidValues()
     * @param string $grouping
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail
     */
    public function setGrouping($grouping = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShippingDocumentEMailGroupingType::valueIsValid($grouping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $grouping, implode(', ', \Arkitecht\FedEx\Enums\ShippingDocumentEMailGroupingType::getValidValues())), __LINE__);
        }
        $this->Grouping = $grouping;
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
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail
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
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentEMailDetail
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
