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
     * The Recipients
     * Meta informations extracted from the WSDL
     * - documentation: Information describing the destination of the email, format of the email and events to be notified on
     * - maxOccurs: 6
     * - minOccurs: 1
     * - documentation: The descriptive data for a FedEx email notification recipient.
     * @var \Arkitecht\FedEx\Structs\EMailNotificationRecipient
     */
    public $Recipients;
    /**
     * The AggregationType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether/how email notifications are grouped.
     * - minOccurs: 0
     * @var string
     */
    public $AggregationType;
    /**
     * The PersonalMessage
     * Meta informations extracted from the WSDL
     * - documentation: A message that will be included in the email notifications
     * - minOccurs: 0
     * @var string
     */
    public $PersonalMessage;
    /**
     * Constructor method for EMailNotificationDetail
     * @uses EMailNotificationDetail::setRecipients()
     * @uses EMailNotificationDetail::setAggregationType()
     * @uses EMailNotificationDetail::setPersonalMessage()
     * @param \Arkitecht\FedEx\Structs\EMailNotificationRecipient $recipients
     * @param string $aggregationType
     * @param string $personalMessage
     */
    public function __construct(\Arkitecht\FedEx\Structs\EMailNotificationRecipient $recipients = null, $aggregationType = null, $personalMessage = null)
    {
        $this
            ->setRecipients($recipients)
            ->setAggregationType($aggregationType)
            ->setPersonalMessage($personalMessage);
    }
    /**
     * Get Recipients value
     * @return \Arkitecht\FedEx\Structs\EMailNotificationRecipient
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
     * Get AggregationType value
     * @return string|null
     */
    public function getAggregationType()
    {
        return $this->AggregationType;
    }
    /**
     * Set AggregationType value
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationAggregationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationAggregationType::getValidValues()
     * @param string $aggregationType
     * @return \Arkitecht\FedEx\Structs\EMailNotificationDetail
     */
    public function setAggregationType($aggregationType = null)
    {
        if (!\Arkitecht\FedEx\Enums\EMailNotificationAggregationType::valueIsValid($aggregationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aggregationType, implode(', ', \Arkitecht\FedEx\Enums\EMailNotificationAggregationType::getValidValues())), __LINE__);
        }
        $this->AggregationType = $aggregationType;
        return $this;
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
