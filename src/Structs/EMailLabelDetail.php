<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMailLabelDetail Structs
 * @subpackage Structs
 */
class EMailLabelDetail extends AbstractStructBase
{
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Content of the email message.
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The Recipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Information describing the address of of the email recipient, role of the email recipient and languages that are requested to be supported.
     * @var \Arkitecht\FedEx\Structs\EMailRecipient
     */
    public $Recipients;
    /**
     * Constructor method for EMailLabelDetail
     * @uses EMailLabelDetail::setMessage()
     * @uses EMailLabelDetail::setRecipients()
     * @param string $message
     * @param \Arkitecht\FedEx\Structs\EMailRecipient $recipients
     */
    public function __construct($message = null, \Arkitecht\FedEx\Structs\EMailRecipient $recipients = null)
    {
        $this
            ->setMessage($message)
            ->setRecipients($recipients);
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
     * @return \Arkitecht\FedEx\Structs\EMailLabelDetail
     */
    public function setMessage($message = null)
    {
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \Arkitecht\FedEx\Structs\EMailRecipient|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \Arkitecht\FedEx\Structs\EMailRecipient $recipients
     * @return \Arkitecht\FedEx\Structs\EMailLabelDetail
     */
    public function setRecipients(\Arkitecht\FedEx\Structs\EMailRecipient $recipients = null)
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
     * @return \Arkitecht\FedEx\Structs\EMailLabelDetail
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
