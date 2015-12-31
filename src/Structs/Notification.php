<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notification Structs
 * Meta informations extracted from the WSDL
 * - documentation: The descriptive data regarding the result of the submitted transaction.
 * @subpackage Structs
 */
class Notification extends AbstractStructBase
{
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - documentation: The severity of this notification. This can indicate success or failure or some other information about the request. The values that can be returned are SUCCESS - Your transaction succeeded with no other applicable information. NOTE
     * - Additional information that may be of interest to you about your transaction. WARNING - Additional information that you need to know about your transaction that you may need to take action on. ERROR - Information about an error that occurred while
     * processing your transaction. FAILURE - FedEx was unable to process your transaction at this time due to a system failure. Please try again later
     * - minOccurs: 0
     * @var string
     */
    public $Severity;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the source of this notification. Combined with the Code it uniquely identifies this notification
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: A code that represents this notification. Combined with the Source it uniquely identifies this notification.
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text that explains this notification.
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The LocalizedMessage
     * Meta informations extracted from the WSDL
     * - documentation: The translated message. The language and locale specified in the ClientDetail. Localization are used to determine the representation. Currently only supported in a TrackReply.
     * - minOccurs: 0
     * @var string
     */
    public $LocalizedMessage;
    /**
     * The MessageParameters
     * Meta informations extracted from the WSDL
     * - documentation: A collection of name/value pairs that provide specific data to help the client determine the nature of an error (or warning, etc.) witout having to parse the message string.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\NotificationParameter
     */
    public $MessageParameters;
    /**
     * Constructor method for Notification
     * @uses Notification::setSeverity()
     * @uses Notification::setSource()
     * @uses Notification::setCode()
     * @uses Notification::setMessage()
     * @uses Notification::setLocalizedMessage()
     * @uses Notification::setMessageParameters()
     * @param string $severity
     * @param string $source
     * @param string $code
     * @param string $message
     * @param string $localizedMessage
     * @param \Arkitecht\FedEx\Structs\NotificationParameter $messageParameters
     */
    public function __construct($severity = null, $source = null, $code = null, $message = null, $localizedMessage = null, \Arkitecht\FedEx\Structs\NotificationParameter $messageParameters = null)
    {
        $this
            ->setSeverity($severity)
            ->setSource($source)
            ->setCode($code)
            ->setMessage($message)
            ->setLocalizedMessage($localizedMessage)
            ->setMessageParameters($messageParameters);
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses \Arkitecht\FedEx\Enums\NotificationSeverityType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\NotificationSeverityType::getValidValues()
     * @param string $severity
     * @return \Arkitecht\FedEx\Structs\Notification
     */
    public function setSeverity($severity = null)
    {
        if (!\Arkitecht\FedEx\Enums\NotificationSeverityType::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severity, implode(', ', \Arkitecht\FedEx\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->Severity = $severity;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Arkitecht\FedEx\Structs\Notification
     */
    public function setSource($source = null)
    {
        $this->Source = $source;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Arkitecht\FedEx\Structs\Notification
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Arkitecht\FedEx\Structs\Notification
     */
    public function setMessage($message = null)
    {
        $this->Message = $message;
        return $this;
    }
    /**
     * Get LocalizedMessage value
     * @return string|null
     */
    public function getLocalizedMessage()
    {
        return $this->LocalizedMessage;
    }
    /**
     * Set LocalizedMessage value
     * @param string $localizedMessage
     * @return \Arkitecht\FedEx\Structs\Notification
     */
    public function setLocalizedMessage($localizedMessage = null)
    {
        $this->LocalizedMessage = $localizedMessage;
        return $this;
    }
    /**
     * Get MessageParameters value
     * @return \Arkitecht\FedEx\Structs\NotificationParameter|null
     */
    public function getMessageParameters()
    {
        return $this->MessageParameters;
    }
    /**
     * Set MessageParameters value
     * @param \Arkitecht\FedEx\Structs\NotificationParameter $messageParameters
     * @return \Arkitecht\FedEx\Structs\Notification
     */
    public function setMessageParameters(\Arkitecht\FedEx\Structs\NotificationParameter $messageParameters = null)
    {
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Notification
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
