<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightServiceCenterDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class describes the relationship between a customer-specified address and the FedEx Freight / FedEx National Freight Service Center that supports that address.
 * @subpackage Structs
 */
class FreightServiceCenterDetail extends AbstractStructBase
{
    /**
     * The InterlineCarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Freight Industry standard non-FedEx carrier identification
     * - minOccurs: 0
     * @var string
     */
    public $InterlineCarrierCode;
    /**
     * The InterlineCarrierName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the Interline carrier.
     * - minOccurs: 0
     * @var string
     */
    public $InterlineCarrierName;
    /**
     * The AdditionalDays
     * Meta informations extracted from the WSDL
     * - documentation: Additional time it might take at the origin or destination to pickup or deliver the freight. This is usually due to the remoteness of the location. This time is included in the total transit time.
     * - minOccurs: 0
     * @var int
     */
    public $AdditionalDays;
    /**
     * The LocalService
     * Meta informations extracted from the WSDL
     * - documentation: Service branding which may be used for local pickup or delivery, distinct from service used for line-haul of customer's shipment.
     * - minOccurs: 0
     * @var string
     */
    public $LocalService;
    /**
     * The LocalDistance
     * Meta informations extracted from the WSDL
     * - documentation: Distance between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     * - minOccurs: 0
     * - documentation: Driving or other transportation distances, distinct from dimension measurements.
     * @var \Arkitecht\FedEx\Structs\Distance
     */
    public $LocalDistance;
    /**
     * The LocalDuration
     * Meta informations extracted from the WSDL
     * - documentation: Time to travel between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     * - minOccurs: 0
     * @var duration
     */
    public $LocalDuration;
    /**
     * The LocalServiceScheduling
     * Meta informations extracted from the WSDL
     * - documentation: Specifies when/how the customer can arrange for pickup or delivery.
     * - minOccurs: 0
     * - documentation: Specifies the type of service scheduling offered from a Freight or National Freight Service Center to a customer-supplied address.
     * @var string
     */
    public $LocalServiceScheduling;
    /**
     * The LimitedServiceDays
     * Meta informations extracted from the WSDL
     * - documentation: Specifies days of operation if localServiceScheduling is LIMITED.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $LimitedServiceDays;
    /**
     * The GatewayLocationId
     * Meta informations extracted from the WSDL
     * - documentation: Freight service center that is a gateway on the border of Canada or Mexico.
     * - minOccurs: 0
     * @var string
     */
    public $GatewayLocationId;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: Alphabetical code identifying a Freight Service Center
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The ContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Freight service center Contact and Address
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $ContactAndAddress;
    /**
     * Constructor method for FreightServiceCenterDetail
     * @uses FreightServiceCenterDetail::setInterlineCarrierCode()
     * @uses FreightServiceCenterDetail::setInterlineCarrierName()
     * @uses FreightServiceCenterDetail::setAdditionalDays()
     * @uses FreightServiceCenterDetail::setLocalService()
     * @uses FreightServiceCenterDetail::setLocalDistance()
     * @uses FreightServiceCenterDetail::setLocalDuration()
     * @uses FreightServiceCenterDetail::setLocalServiceScheduling()
     * @uses FreightServiceCenterDetail::setLimitedServiceDays()
     * @uses FreightServiceCenterDetail::setGatewayLocationId()
     * @uses FreightServiceCenterDetail::setLocation()
     * @uses FreightServiceCenterDetail::setContactAndAddress()
     * @param string $interlineCarrierCode
     * @param string $interlineCarrierName
     * @param int $additionalDays
     * @param string $localService
     * @param \Arkitecht\FedEx\Structs\Distance $localDistance
     * @param duration $localDuration
     * @param string $localServiceScheduling
     * @param string $limitedServiceDays
     * @param string $gatewayLocationId
     * @param string $location
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $contactAndAddress
     */
    public function __construct($interlineCarrierCode = null, $interlineCarrierName = null, $additionalDays = null, $localService = null, \Arkitecht\FedEx\Structs\Distance $localDistance = null, $localDuration = null, $localServiceScheduling = null, $limitedServiceDays = null, $gatewayLocationId = null, $location = null, \Arkitecht\FedEx\Structs\ContactAndAddress $contactAndAddress = null)
    {
        $this
            ->setInterlineCarrierCode($interlineCarrierCode)
            ->setInterlineCarrierName($interlineCarrierName)
            ->setAdditionalDays($additionalDays)
            ->setLocalService($localService)
            ->setLocalDistance($localDistance)
            ->setLocalDuration($localDuration)
            ->setLocalServiceScheduling($localServiceScheduling)
            ->setLimitedServiceDays($limitedServiceDays)
            ->setGatewayLocationId($gatewayLocationId)
            ->setLocation($location)
            ->setContactAndAddress($contactAndAddress);
    }
    /**
     * Get InterlineCarrierCode value
     * @return string|null
     */
    public function getInterlineCarrierCode()
    {
        return $this->InterlineCarrierCode;
    }
    /**
     * Set InterlineCarrierCode value
     * @param string $interlineCarrierCode
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setInterlineCarrierCode($interlineCarrierCode = null)
    {
        $this->InterlineCarrierCode = $interlineCarrierCode;
        return $this;
    }
    /**
     * Get InterlineCarrierName value
     * @return string|null
     */
    public function getInterlineCarrierName()
    {
        return $this->InterlineCarrierName;
    }
    /**
     * Set InterlineCarrierName value
     * @param string $interlineCarrierName
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setInterlineCarrierName($interlineCarrierName = null)
    {
        $this->InterlineCarrierName = $interlineCarrierName;
        return $this;
    }
    /**
     * Get AdditionalDays value
     * @return int|null
     */
    public function getAdditionalDays()
    {
        return $this->AdditionalDays;
    }
    /**
     * Set AdditionalDays value
     * @param int $additionalDays
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setAdditionalDays($additionalDays = null)
    {
        $this->AdditionalDays = $additionalDays;
        return $this;
    }
    /**
     * Get LocalService value
     * @return string|null
     */
    public function getLocalService()
    {
        return $this->LocalService;
    }
    /**
     * Set LocalService value
     * @uses \Arkitecht\FedEx\Enums\ServiceType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ServiceType::getValidValues()
     * @param string $localService
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setLocalService($localService = null)
    {
        if (!\Arkitecht\FedEx\Enums\ServiceType::valueIsValid($localService)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $localService, implode(', ', \Arkitecht\FedEx\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->LocalService = $localService;
        return $this;
    }
    /**
     * Get LocalDistance value
     * @return \Arkitecht\FedEx\Structs\Distance|null
     */
    public function getLocalDistance()
    {
        return $this->LocalDistance;
    }
    /**
     * Set LocalDistance value
     * @param \Arkitecht\FedEx\Structs\Distance $localDistance
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setLocalDistance(\Arkitecht\FedEx\Structs\Distance $localDistance = null)
    {
        $this->LocalDistance = $localDistance;
        return $this;
    }
    /**
     * Get LocalDuration value
     * @return duration|null
     */
    public function getLocalDuration()
    {
        return $this->LocalDuration;
    }
    /**
     * Set LocalDuration value
     * @param duration $localDuration
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setLocalDuration($localDuration = null)
    {
        $this->LocalDuration = $localDuration;
        return $this;
    }
    /**
     * Get LocalServiceScheduling value
     * @return string|null
     */
    public function getLocalServiceScheduling()
    {
        return $this->LocalServiceScheduling;
    }
    /**
     * Set LocalServiceScheduling value
     * @uses \Arkitecht\FedEx\Enums\FreightServiceSchedulingType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightServiceSchedulingType::getValidValues()
     * @param string $localServiceScheduling
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setLocalServiceScheduling($localServiceScheduling = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightServiceSchedulingType::valueIsValid($localServiceScheduling)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $localServiceScheduling, implode(', ', \Arkitecht\FedEx\Enums\FreightServiceSchedulingType::getValidValues())), __LINE__);
        }
        $this->LocalServiceScheduling = $localServiceScheduling;
        return $this;
    }
    /**
     * Get LimitedServiceDays value
     * @return string|null
     */
    public function getLimitedServiceDays()
    {
        return $this->LimitedServiceDays;
    }
    /**
     * Set LimitedServiceDays value
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues()
     * @param string $limitedServiceDays
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setLimitedServiceDays($limitedServiceDays = null)
    {
        if (!\Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid($limitedServiceDays)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $limitedServiceDays, implode(', ', \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->LimitedServiceDays = $limitedServiceDays;
        return $this;
    }
    /**
     * Get GatewayLocationId value
     * @return string|null
     */
    public function getGatewayLocationId()
    {
        return $this->GatewayLocationId;
    }
    /**
     * Set GatewayLocationId value
     * @param string $gatewayLocationId
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setGatewayLocationId($gatewayLocationId = null)
    {
        $this->GatewayLocationId = $gatewayLocationId;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setLocation($location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get ContactAndAddress value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getContactAndAddress()
    {
        return $this->ContactAndAddress;
    }
    /**
     * Set ContactAndAddress value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $contactAndAddress
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public function setContactAndAddress(\Arkitecht\FedEx\Structs\ContactAndAddress $contactAndAddress = null)
    {
        $this->ContactAndAddress = $contactAndAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
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
