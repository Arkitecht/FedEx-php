<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryOnInvoiceAcceptanceDetail Structs
 * @subpackage Structs
 */
class DeliveryOnInvoiceAcceptanceDetail extends AbstractStructBase
{
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $Recipient;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id for the return, if preassigned.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackingId
     */
    public $TrackingId;
    /**
     * Constructor method for DeliveryOnInvoiceAcceptanceDetail
     * @uses DeliveryOnInvoiceAcceptanceDetail::setRecipient()
     * @uses DeliveryOnInvoiceAcceptanceDetail::setTrackingId()
     * @param \Arkitecht\FedEx\Structs\Party $recipient
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingId
     */
    public function __construct(\Arkitecht\FedEx\Structs\Party $recipient = null, \Arkitecht\FedEx\Structs\TrackingId $trackingId = null)
    {
        $this
            ->setRecipient($recipient)
            ->setTrackingId($trackingId);
    }
    /**
     * Get Recipient value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Arkitecht\FedEx\Structs\Party $recipient
     * @return \Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setRecipient(\Arkitecht\FedEx\Structs\Party $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get TrackingId value
     * @return \Arkitecht\FedEx\Structs\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingId
     * @return \Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setTrackingId(\Arkitecht\FedEx\Structs\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail
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
