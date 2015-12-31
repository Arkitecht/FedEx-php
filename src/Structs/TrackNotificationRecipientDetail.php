<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackNotificationRecipientDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Options available for a tracking notification recipient.
 * @subpackage Structs
 */
class TrackNotificationRecipientDetail extends AbstractStructBase
{
    /**
     * The NotificationEventsAvailable
     * Meta informations extracted from the WSDL
     * - documentation: The types of email notifications available for this recipient.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $NotificationEventsAvailable;
    /**
     * Constructor method for TrackNotificationRecipientDetail
     * @uses TrackNotificationRecipientDetail::setNotificationEventsAvailable()
     * @param string $notificationEventsAvailable
     */
    public function __construct($notificationEventsAvailable = null)
    {
        $this
            ->setNotificationEventsAvailable($notificationEventsAvailable);
    }
    /**
     * Get NotificationEventsAvailable value
     * @return string|null
     */
    public function getNotificationEventsAvailable()
    {
        return $this->NotificationEventsAvailable;
    }
    /**
     * Set NotificationEventsAvailable value
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationEventType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationEventType::getValidValues()
     * @param string $notificationEventsAvailable
     * @return \Arkitecht\FedEx\Structs\TrackNotificationRecipientDetail
     */
    public function setNotificationEventsAvailable($notificationEventsAvailable = null)
    {
        if (!\Arkitecht\FedEx\Enums\EMailNotificationEventType::valueIsValid($notificationEventsAvailable)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationEventsAvailable, implode(', ', \Arkitecht\FedEx\Enums\EMailNotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackNotificationRecipientDetail
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
