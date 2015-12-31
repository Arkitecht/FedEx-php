<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackSpecialInstruction Structs
 * @subpackage Structs
 */
class TrackSpecialInstruction extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DeliveryOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryOption;
    /**
     * The StatusDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the status and status update time of the track special instructions.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\SpecialInstructionStatusDetail
     */
    public $StatusDetail;
    /**
     * The OriginalEstimatedDeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the estimated delivery time that was originally estimated when the shipment was shipped.
     * - minOccurs: 0
     * @var dateTime
     */
    public $OriginalEstimatedDeliveryTimestamp;
    /**
     * The OriginalRequestTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the time the customer requested a change to the shipment.
     * - minOccurs: 0
     * @var dateTime
     */
    public $OriginalRequestTime;
    /**
     * The RequestedAppointmentTime
     * Meta informations extracted from the WSDL
     * - documentation: The requested appointment time for delivery.
     * - minOccurs: 0
     * - documentation: Specifies the different appointment times on a specific date.
     * @var \Arkitecht\FedEx\Structs\AppointmentDetail
     */
    public $RequestedAppointmentTime;
    /**
     * Constructor method for TrackSpecialInstruction
     * @uses TrackSpecialInstruction::setDescription()
     * @uses TrackSpecialInstruction::setDeliveryOption()
     * @uses TrackSpecialInstruction::setStatusDetail()
     * @uses TrackSpecialInstruction::setOriginalEstimatedDeliveryTimestamp()
     * @uses TrackSpecialInstruction::setOriginalRequestTime()
     * @uses TrackSpecialInstruction::setRequestedAppointmentTime()
     * @param string $description
     * @param string $deliveryOption
     * @param \Arkitecht\FedEx\Structs\SpecialInstructionStatusDetail $statusDetail
     * @param dateTime $originalEstimatedDeliveryTimestamp
     * @param dateTime $originalRequestTime
     * @param \Arkitecht\FedEx\Structs\AppointmentDetail $requestedAppointmentTime
     */
    public function __construct($description = null, $deliveryOption = null, \Arkitecht\FedEx\Structs\SpecialInstructionStatusDetail $statusDetail = null, $originalEstimatedDeliveryTimestamp = null, $originalRequestTime = null, \Arkitecht\FedEx\Structs\AppointmentDetail $requestedAppointmentTime = null)
    {
        $this
            ->setDescription($description)
            ->setDeliveryOption($deliveryOption)
            ->setStatusDetail($statusDetail)
            ->setOriginalEstimatedDeliveryTimestamp($originalEstimatedDeliveryTimestamp)
            ->setOriginalRequestTime($originalRequestTime)
            ->setRequestedAppointmentTime($requestedAppointmentTime);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Arkitecht\FedEx\Structs\TrackSpecialInstruction
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DeliveryOption value
     * @return string|null
     */
    public function getDeliveryOption()
    {
        return $this->DeliveryOption;
    }
    /**
     * Set DeliveryOption value
     * @uses \Arkitecht\FedEx\Enums\TrackDeliveryOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackDeliveryOptionType::getValidValues()
     * @param string $deliveryOption
     * @return \Arkitecht\FedEx\Structs\TrackSpecialInstruction
     */
    public function setDeliveryOption($deliveryOption = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackDeliveryOptionType::valueIsValid($deliveryOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryOption, implode(', ', \Arkitecht\FedEx\Enums\TrackDeliveryOptionType::getValidValues())), __LINE__);
        }
        $this->DeliveryOption = $deliveryOption;
        return $this;
    }
    /**
     * Get StatusDetail value
     * @return \Arkitecht\FedEx\Structs\SpecialInstructionStatusDetail|null
     */
    public function getStatusDetail()
    {
        return $this->StatusDetail;
    }
    /**
     * Set StatusDetail value
     * @param \Arkitecht\FedEx\Structs\SpecialInstructionStatusDetail $statusDetail
     * @return \Arkitecht\FedEx\Structs\TrackSpecialInstruction
     */
    public function setStatusDetail(\Arkitecht\FedEx\Structs\SpecialInstructionStatusDetail $statusDetail = null)
    {
        $this->StatusDetail = $statusDetail;
        return $this;
    }
    /**
     * Get OriginalEstimatedDeliveryTimestamp value
     * @return dateTime|null
     */
    public function getOriginalEstimatedDeliveryTimestamp()
    {
        return $this->OriginalEstimatedDeliveryTimestamp;
    }
    /**
     * Set OriginalEstimatedDeliveryTimestamp value
     * @param dateTime $originalEstimatedDeliveryTimestamp
     * @return \Arkitecht\FedEx\Structs\TrackSpecialInstruction
     */
    public function setOriginalEstimatedDeliveryTimestamp($originalEstimatedDeliveryTimestamp = null)
    {
        $this->OriginalEstimatedDeliveryTimestamp = $originalEstimatedDeliveryTimestamp;
        return $this;
    }
    /**
     * Get OriginalRequestTime value
     * @return dateTime|null
     */
    public function getOriginalRequestTime()
    {
        return $this->OriginalRequestTime;
    }
    /**
     * Set OriginalRequestTime value
     * @param dateTime $originalRequestTime
     * @return \Arkitecht\FedEx\Structs\TrackSpecialInstruction
     */
    public function setOriginalRequestTime($originalRequestTime = null)
    {
        $this->OriginalRequestTime = $originalRequestTime;
        return $this;
    }
    /**
     * Get RequestedAppointmentTime value
     * @return \Arkitecht\FedEx\Structs\AppointmentDetail|null
     */
    public function getRequestedAppointmentTime()
    {
        return $this->RequestedAppointmentTime;
    }
    /**
     * Set RequestedAppointmentTime value
     * @param \Arkitecht\FedEx\Structs\AppointmentDetail $requestedAppointmentTime
     * @return \Arkitecht\FedEx\Structs\TrackSpecialInstruction
     */
    public function setRequestedAppointmentTime(\Arkitecht\FedEx\Structs\AppointmentDetail $requestedAppointmentTime = null)
    {
        $this->RequestedAppointmentTime = $requestedAppointmentTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackSpecialInstruction
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
