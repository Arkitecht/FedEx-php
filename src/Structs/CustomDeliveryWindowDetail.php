<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomDeliveryWindowDetail Structs
 * @subpackage Structs
 */
class CustomDeliveryWindowDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of custom delivery being requested.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The RequestTime
     * Meta informations extracted from the WSDL
     * - documentation: Time by which delivery is requested.
     * - minOccurs: 0
     * @var time
     */
    public $RequestTime;
    /**
     * The RequestRange
     * Meta informations extracted from the WSDL
     * - documentation: Range of dates for custom delivery request; only used if type is BETWEEN.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DateRange
     */
    public $RequestRange;
    /**
     * The RequestDate
     * Meta informations extracted from the WSDL
     * - documentation: Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER.
     * - minOccurs: 0
     * @var date
     */
    public $RequestDate;
    /**
     * Constructor method for CustomDeliveryWindowDetail
     * @uses CustomDeliveryWindowDetail::setType()
     * @uses CustomDeliveryWindowDetail::setRequestTime()
     * @uses CustomDeliveryWindowDetail::setRequestRange()
     * @uses CustomDeliveryWindowDetail::setRequestDate()
     * @param string $type
     * @param time $requestTime
     * @param \Arkitecht\FedEx\Structs\DateRange $requestRange
     * @param date $requestDate
     */
    public function __construct($type = null, time $requestTime = null, \Arkitecht\FedEx\Structs\DateRange $requestRange = null, $requestDate = null)
    {
        $this
            ->setType($type)
            ->setRequestTime($requestTime)
            ->setRequestRange($requestRange)
            ->setRequestDate($requestDate);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Arkitecht\FedEx\Enums\CustomDeliveryWindowType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CustomDeliveryWindowType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\CustomDeliveryWindowType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\CustomDeliveryWindowType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RequestTime value
     * @return time|null
     */
    public function getRequestTime()
    {
        return $this->RequestTime;
    }
    /**
     * Set RequestTime value
     * @param time $requestTime
     * @return \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail
     */
    public function setRequestTime(time $requestTime = null)
    {
        $this->RequestTime = $requestTime;
        return $this;
    }
    /**
     * Get RequestRange value
     * @return \Arkitecht\FedEx\Structs\DateRange|null
     */
    public function getRequestRange()
    {
        return $this->RequestRange;
    }
    /**
     * Set RequestRange value
     * @param \Arkitecht\FedEx\Structs\DateRange $requestRange
     * @return \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail
     */
    public function setRequestRange(\Arkitecht\FedEx\Structs\DateRange $requestRange = null)
    {
        $this->RequestRange = $requestRange;
        return $this;
    }
    /**
     * Get RequestDate value
     * @return date|null
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }
    /**
     * Set RequestDate value
     * @param date $requestDate
     * @return \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail
     */
    public function setRequestDate($requestDate = null)
    {
        $this->RequestDate = $requestDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail
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
