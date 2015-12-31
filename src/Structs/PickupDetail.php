<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class describes the pickup characteristics of a shipment (e.g. for use in a tag request).
 * @subpackage Structs
 */
class PickupDetail extends AbstractStructBase
{
    /**
     * The ReadyDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ReadyDateTime;
    /**
     * The LatestPickupDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $LatestPickupDateTime;
    /**
     * The CourierInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CourierInstructions;
    /**
     * The RequestType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestType;
    /**
     * The RequestSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestSource;
    /**
     * Constructor method for PickupDetail
     * @uses PickupDetail::setReadyDateTime()
     * @uses PickupDetail::setLatestPickupDateTime()
     * @uses PickupDetail::setCourierInstructions()
     * @uses PickupDetail::setRequestType()
     * @uses PickupDetail::setRequestSource()
     * @param dateTime $readyDateTime
     * @param dateTime $latestPickupDateTime
     * @param string $courierInstructions
     * @param string $requestType
     * @param string $requestSource
     */
    public function __construct($readyDateTime = null, $latestPickupDateTime = null, $courierInstructions = null, $requestType = null, $requestSource = null)
    {
        $this
            ->setReadyDateTime($readyDateTime)
            ->setLatestPickupDateTime($latestPickupDateTime)
            ->setCourierInstructions($courierInstructions)
            ->setRequestType($requestType)
            ->setRequestSource($requestSource);
    }
    /**
     * Get ReadyDateTime value
     * @return dateTime|null
     */
    public function getReadyDateTime()
    {
        return $this->ReadyDateTime;
    }
    /**
     * Set ReadyDateTime value
     * @param dateTime $readyDateTime
     * @return \Arkitecht\FedEx\Structs\PickupDetail
     */
    public function setReadyDateTime($readyDateTime = null)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    /**
     * Get LatestPickupDateTime value
     * @return dateTime|null
     */
    public function getLatestPickupDateTime()
    {
        return $this->LatestPickupDateTime;
    }
    /**
     * Set LatestPickupDateTime value
     * @param dateTime $latestPickupDateTime
     * @return \Arkitecht\FedEx\Structs\PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime = null)
    {
        $this->LatestPickupDateTime = $latestPickupDateTime;
        return $this;
    }
    /**
     * Get CourierInstructions value
     * @return string|null
     */
    public function getCourierInstructions()
    {
        return $this->CourierInstructions;
    }
    /**
     * Set CourierInstructions value
     * @param string $courierInstructions
     * @return \Arkitecht\FedEx\Structs\PickupDetail
     */
    public function setCourierInstructions($courierInstructions = null)
    {
        $this->CourierInstructions = $courierInstructions;
        return $this;
    }
    /**
     * Get RequestType value
     * @return string|null
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }
    /**
     * Set RequestType value
     * @uses \Arkitecht\FedEx\Enums\PickupRequestType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PickupRequestType::getValidValues()
     * @param string $requestType
     * @return \Arkitecht\FedEx\Structs\PickupDetail
     */
    public function setRequestType($requestType = null)
    {
        if (!\Arkitecht\FedEx\Enums\PickupRequestType::valueIsValid($requestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requestType, implode(', ', \Arkitecht\FedEx\Enums\PickupRequestType::getValidValues())), __LINE__);
        }
        $this->RequestType = $requestType;
        return $this;
    }
    /**
     * Get RequestSource value
     * @return string|null
     */
    public function getRequestSource()
    {
        return $this->RequestSource;
    }
    /**
     * Set RequestSource value
     * @uses \Arkitecht\FedEx\Enums\PickupRequestSourceType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PickupRequestSourceType::getValidValues()
     * @param string $requestSource
     * @return \Arkitecht\FedEx\Structs\PickupDetail
     */
    public function setRequestSource($requestSource = null)
    {
        if (!\Arkitecht\FedEx\Enums\PickupRequestSourceType::valueIsValid($requestSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requestSource, implode(', ', \Arkitecht\FedEx\Enums\PickupRequestSourceType::getValidValues())), __LINE__);
        }
        $this->RequestSource = $requestSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PickupDetail
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
