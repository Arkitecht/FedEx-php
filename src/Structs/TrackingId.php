<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingId Structs
 * @subpackage Structs
 */
class TrackingId extends AbstractStructBase
{
    /**
     * The TrackingIdType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingIdType;
    /**
     * The FormId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FormId;
    /**
     * The UspsApplicationId
     * Meta informations extracted from the WSDL
     * - documentation: For use with SmartPost tracking IDs only
     * - minOccurs: 0
     * @var string
     */
    public $UspsApplicationId;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * Constructor method for TrackingId
     * @uses TrackingId::setTrackingIdType()
     * @uses TrackingId::setFormId()
     * @uses TrackingId::setUspsApplicationId()
     * @uses TrackingId::setTrackingNumber()
     * @param string $trackingIdType
     * @param string $formId
     * @param string $uspsApplicationId
     * @param string $trackingNumber
     */
    public function __construct($trackingIdType = null, $formId = null, $uspsApplicationId = null, $trackingNumber = null)
    {
        $this
            ->setTrackingIdType($trackingIdType)
            ->setFormId($formId)
            ->setUspsApplicationId($uspsApplicationId)
            ->setTrackingNumber($trackingNumber);
    }
    /**
     * Get TrackingIdType value
     * @return string|null
     */
    public function getTrackingIdType()
    {
        return $this->TrackingIdType;
    }
    /**
     * Set TrackingIdType value
     * @uses \Arkitecht\FedEx\Enums\TrackingIdType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackingIdType::getValidValues()
     * @param string $trackingIdType
     * @return \Arkitecht\FedEx\Structs\TrackingId
     */
    public function setTrackingIdType($trackingIdType = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackingIdType::valueIsValid($trackingIdType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $trackingIdType, implode(', ', \Arkitecht\FedEx\Enums\TrackingIdType::getValidValues())), __LINE__);
        }
        $this->TrackingIdType = $trackingIdType;
        return $this;
    }
    /**
     * Get FormId value
     * @return string|null
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    /**
     * Set FormId value
     * @param string $formId
     * @return \Arkitecht\FedEx\Structs\TrackingId
     */
    public function setFormId($formId = null)
    {
        $this->FormId = $formId;
        return $this;
    }
    /**
     * Get UspsApplicationId value
     * @return string|null
     */
    public function getUspsApplicationId()
    {
        return $this->UspsApplicationId;
    }
    /**
     * Set UspsApplicationId value
     * @param string $uspsApplicationId
     * @return \Arkitecht\FedEx\Structs\TrackingId
     */
    public function setUspsApplicationId($uspsApplicationId = null)
    {
        $this->UspsApplicationId = $uspsApplicationId;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \Arkitecht\FedEx\Structs\TrackingId
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackingId
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
