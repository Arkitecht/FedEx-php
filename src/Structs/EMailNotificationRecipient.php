<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMailNotificationRecipient Structs
 * @subpackage Structs
 */
class EMailNotificationRecipient extends AbstractStructBase
{
    /**
     * The EMailNotificationRecipientType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the relationship this email recipient has to the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $EMailNotificationRecipientType;
    /**
     * The EMailAddress
     * Meta informations extracted from the WSDL
     * - documentation: The email address to send the notification to
     * - minOccurs: 0
     * @var string
     */
    public $EMailAddress;
    /**
     * The NotificationEventsRequested
     * Meta informations extracted from the WSDL
     * - documentation: The types of email notifications being requested for this recipient.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $NotificationEventsRequested;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: The format of the email notification.
     * - minOccurs: 0
     * - documentation: The format of the email
     * @var string
     */
    public $Format;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: The language/locale to be used in this email notification.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for EMailNotificationRecipient
     * @uses EMailNotificationRecipient::setEMailNotificationRecipientType()
     * @uses EMailNotificationRecipient::setEMailAddress()
     * @uses EMailNotificationRecipient::setNotificationEventsRequested()
     * @uses EMailNotificationRecipient::setFormat()
     * @uses EMailNotificationRecipient::setLocalization()
     * @param string $eMailNotificationRecipientType
     * @param string $eMailAddress
     * @param string $notificationEventsRequested
     * @param string $format
     * @param \Arkitecht\FedEx\Structs\Localization $localization
     */
    public function __construct($eMailNotificationRecipientType = null, $eMailAddress = null, $notificationEventsRequested = null, $format = null, \Arkitecht\FedEx\Structs\Localization $localization = null)
    {
        $this
            ->setEMailNotificationRecipientType($eMailNotificationRecipientType)
            ->setEMailAddress($eMailAddress)
            ->setNotificationEventsRequested($notificationEventsRequested)
            ->setFormat($format)
            ->setLocalization($localization);
    }
    /**
     * Get EMailNotificationRecipientType value
     * @return string|null
     */
    public function getEMailNotificationRecipientType()
    {
        return $this->EMailNotificationRecipientType;
    }
    /**
     * Set EMailNotificationRecipientType value
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationRecipientType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationRecipientType::getValidValues()
     * @param string $eMailNotificationRecipientType
     * @return \Arkitecht\FedEx\Structs\EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType($eMailNotificationRecipientType = null)
    {
        if (!\Arkitecht\FedEx\Enums\EMailNotificationRecipientType::valueIsValid($eMailNotificationRecipientType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eMailNotificationRecipientType, implode(', ', \Arkitecht\FedEx\Enums\EMailNotificationRecipientType::getValidValues())), __LINE__);
        }
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    /**
     * Get EMailAddress value
     * @return string|null
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }
    /**
     * Set EMailAddress value
     * @param string $eMailAddress
     * @return \Arkitecht\FedEx\Structs\EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress = null)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * Get NotificationEventsRequested value
     * @return string|null
     */
    public function getNotificationEventsRequested()
    {
        return $this->NotificationEventsRequested;
    }
    /**
     * Set NotificationEventsRequested value
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationEventType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationEventType::getValidValues()
     * @param string $notificationEventsRequested
     * @return \Arkitecht\FedEx\Structs\EMailNotificationRecipient
     */
    public function setNotificationEventsRequested($notificationEventsRequested = null)
    {
        if (!\Arkitecht\FedEx\Enums\EMailNotificationEventType::valueIsValid($notificationEventsRequested)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationEventsRequested, implode(', ', \Arkitecht\FedEx\Enums\EMailNotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsRequested = $notificationEventsRequested;
        return $this;
    }
    /**
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationFormatType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationFormatType::getValidValues()
     * @param string $format
     * @return \Arkitecht\FedEx\Structs\EMailNotificationRecipient
     */
    public function setFormat($format = null)
    {
        if (!\Arkitecht\FedEx\Enums\EMailNotificationFormatType::valueIsValid($format)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $format, implode(', ', \Arkitecht\FedEx\Enums\EMailNotificationFormatType::getValidValues())), __LINE__);
        }
        $this->Format = $format;
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
     * @return \Arkitecht\FedEx\Structs\EMailNotificationRecipient
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
     * @return \Arkitecht\FedEx\Structs\EMailNotificationRecipient
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
