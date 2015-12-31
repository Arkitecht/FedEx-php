<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMailNotificationDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Information describing email notifications that will be sent in relation to events that occur during package movement
 * @subpackage Structs
 */
class EMailNotificationDetail extends AbstractStructBase
{
    /**
     * The PersonalMessage
     * Meta informations extracted from the WSDL
     * - documentation: A message that will be included in the email notifications
     * - minOccurs: 0
     * @var string
     */
    public $PersonalMessage;
    /**
     * The Recipients
     * Meta informations extracted from the WSDL
     * - documentation: Information describing the destination of the email, format of the email and events to be notified on
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\EMailNotificationRecipient
     */
    public $Recipients;
    /**
     * Constructor method for EMailNotificationDetail
     * @uses EMailNotificationDetail::setPersonalMessage()
     * @uses EMailNotificationDetail::setRecipients()
     * @param string $personalMessage
     * @param \Arkitecht\FedEx\Structs\EMailNotificationRecipient $recipients
     */
    public function __construct($personalMessage = null, \Arkitecht\FedEx\Structs\EMailNotificationRecipient $recipients = null)
    {
        $this
            ->setPersonalMessage($personalMessage)
            ->setRecipients($recipients);
    }
    /**
     * Get PersonalMessage value
     * @return string|null
     */
    public function getPersonalMessage()
    {
        return $this->PersonalMessage;
    }
    /**
     * Set PersonalMessage value
     * @param string $personalMessage
     * @return \Arkitecht\FedEx\Structs\EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage = null)
    {
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \Arkitecht\FedEx\Structs\EMailNotificationRecipient|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \Arkitecht\FedEx\Structs\EMailNotificationRecipient $recipients
     * @return \Arkitecht\FedEx\Structs\EMailNotificationDetail
     */
    public function setRecipients(\Arkitecht\FedEx\Structs\EMailNotificationRecipient $recipients = null)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\EMailNotificationDetail
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
