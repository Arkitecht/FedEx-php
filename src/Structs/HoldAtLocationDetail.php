<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HoldAtLocationDetail Structs
 * @subpackage Structs
 */
class HoldAtLocationDetail extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: Contact phone number for recipient of shipment.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The LocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address of FedEx facility at which shipment is to be held.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $LocationContactAndAddress;
    /**
     * The LocationType
     * Meta informations extracted from the WSDL
     * - documentation: Type of facility at which package/shipment is to be held.
     * - minOccurs: 0
     * - documentation: Identifies a kind of FedEx facility.
     * @var string
     */
    public $LocationType;
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - documentation: Location identification (for facilities identified by an alphanumeric location code).
     * - minOccurs: 0
     * @var string
     */
    public $LocationId;
    /**
     * The LocationNumber
     * Meta informations extracted from the WSDL
     * - documentation: Location identification (for facilities identified by an numeric location code).
     * - minOccurs: 0
     * @var int
     */
    public $LocationNumber;
    /**
     * Constructor method for HoldAtLocationDetail
     * @uses HoldAtLocationDetail::setPhoneNumber()
     * @uses HoldAtLocationDetail::setLocationContactAndAddress()
     * @uses HoldAtLocationDetail::setLocationType()
     * @uses HoldAtLocationDetail::setLocationId()
     * @uses HoldAtLocationDetail::setLocationNumber()
     * @param string $phoneNumber
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $locationContactAndAddress
     * @param string $locationType
     * @param string $locationId
     * @param int $locationNumber
     */
    public function __construct($phoneNumber = null, \Arkitecht\FedEx\Structs\ContactAndAddress $locationContactAndAddress = null, $locationType = null, $locationId = null, $locationNumber = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setLocationContactAndAddress($locationContactAndAddress)
            ->setLocationType($locationType)
            ->setLocationId($locationId)
            ->setLocationNumber($locationNumber);
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \Arkitecht\FedEx\Structs\HoldAtLocationDetail
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get LocationContactAndAddress value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getLocationContactAndAddress()
    {
        return $this->LocationContactAndAddress;
    }
    /**
     * Set LocationContactAndAddress value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $locationContactAndAddress
     * @return \Arkitecht\FedEx\Structs\HoldAtLocationDetail
     */
    public function setLocationContactAndAddress(\Arkitecht\FedEx\Structs\ContactAndAddress $locationContactAndAddress = null)
    {
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @uses \Arkitecht\FedEx\Enums\FedExLocationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FedExLocationType::getValidValues()
     * @param string $locationType
     * @return \Arkitecht\FedEx\Structs\HoldAtLocationDetail
     */
    public function setLocationType($locationType = null)
    {
        if (!\Arkitecht\FedEx\Enums\FedExLocationType::valueIsValid($locationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $locationType, implode(', ', \Arkitecht\FedEx\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        return $this;
    }
    /**
     * Get LocationId value
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    /**
     * Set LocationId value
     * @param string $locationId
     * @return \Arkitecht\FedEx\Structs\HoldAtLocationDetail
     */
    public function setLocationId($locationId = null)
    {
        $this->LocationId = $locationId;
        return $this;
    }
    /**
     * Get LocationNumber value
     * @return int|null
     */
    public function getLocationNumber()
    {
        return $this->LocationNumber;
    }
    /**
     * Set LocationNumber value
     * @param int $locationNumber
     * @return \Arkitecht\FedEx\Structs\HoldAtLocationDetail
     */
    public function setLocationNumber($locationNumber = null)
    {
        $this->LocationNumber = $locationNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\HoldAtLocationDetail
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
