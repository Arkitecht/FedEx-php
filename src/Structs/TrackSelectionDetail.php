<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackSelectionDetail Structs
 * @subpackage Structs
 */
class TrackSelectionDetail extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx operating company (transportation) used for this package's delivery.
     * - minOccurs: 0
     * - documentation: Identification of a FedEx operating company (transportation).
     * @var string
     */
    public $CarrierCode;
    /**
     * The OperatingCompany
     * Meta informations extracted from the WSDL
     * - documentation: Identifies operating transportation company that is the specific to the carrier code.
     * - minOccurs: 0
     * - documentation: Identification for a FedEx operating company (transportation and non-transportation).
     * @var string
     */
    public $OperatingCompany;
    /**
     * The PackageIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: The type and value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages.
     * - minOccurs: 0
     * - documentation: The type and value of the package identifier that is to be used to retrieve the tracking information for a package.
     * @var \Arkitecht\FedEx\Structs\TrackPackageIdentifier
     */
    public $PackageIdentifier;
    /**
     * The TrackingNumberUniqueIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Used to distinguish duplicate FedEx tracking numbers.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;
    /**
     * The ShipDateRangeBegin
     * Meta informations extracted from the WSDL
     * - documentation: To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     * - minOccurs: 0
     * @var date
     */
    public $ShipDateRangeBegin;
    /**
     * The ShipDateRangeEnd
     * Meta informations extracted from the WSDL
     * - documentation: To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     * - minOccurs: 0
     * @var date
     */
    public $ShipDateRangeEnd;
    /**
     * The ShipmentAccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: For tracking by references information either the account number or destination postal code and country must be provided.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentAccountNumber;
    /**
     * The SecureSpodAccount
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the SPOD account number for the shipment being tracked.
     * - minOccurs: 0
     * @var string
     */
    public $SecureSpodAccount;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - documentation: For tracking by references information either the account number or destination postal code and country must be provided.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $Destination;
    /**
     * The PagingDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PagingDetail
     */
    public $PagingDetail;
    /**
     * The CustomerSpecifiedTimeOutValueInMilliseconds
     * Meta informations extracted from the WSDL
     * - documentation: The customer can specify a desired time out value for this particular tracking number.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $CustomerSpecifiedTimeOutValueInMilliseconds;
    /**
     * Constructor method for TrackSelectionDetail
     * @uses TrackSelectionDetail::setCarrierCode()
     * @uses TrackSelectionDetail::setOperatingCompany()
     * @uses TrackSelectionDetail::setPackageIdentifier()
     * @uses TrackSelectionDetail::setTrackingNumberUniqueIdentifier()
     * @uses TrackSelectionDetail::setShipDateRangeBegin()
     * @uses TrackSelectionDetail::setShipDateRangeEnd()
     * @uses TrackSelectionDetail::setShipmentAccountNumber()
     * @uses TrackSelectionDetail::setSecureSpodAccount()
     * @uses TrackSelectionDetail::setDestination()
     * @uses TrackSelectionDetail::setPagingDetail()
     * @uses TrackSelectionDetail::setCustomerSpecifiedTimeOutValueInMilliseconds()
     * @param string $carrierCode
     * @param string $operatingCompany
     * @param \Arkitecht\FedEx\Structs\TrackPackageIdentifier $packageIdentifier
     * @param string $trackingNumberUniqueIdentifier
     * @param date $shipDateRangeBegin
     * @param date $shipDateRangeEnd
     * @param string $shipmentAccountNumber
     * @param string $secureSpodAccount
     * @param \Arkitecht\FedEx\Structs\Address $destination
     * @param \Arkitecht\FedEx\Structs\PagingDetail $pagingDetail
     * @param nonNegativeInteger $customerSpecifiedTimeOutValueInMilliseconds
     */
    public function __construct($carrierCode = null, $operatingCompany = null, \Arkitecht\FedEx\Structs\TrackPackageIdentifier $packageIdentifier = null, $trackingNumberUniqueIdentifier = null, $shipDateRangeBegin = null, $shipDateRangeEnd = null, $shipmentAccountNumber = null, $secureSpodAccount = null, \Arkitecht\FedEx\Structs\Address $destination = null, \Arkitecht\FedEx\Structs\PagingDetail $pagingDetail = null, $customerSpecifiedTimeOutValueInMilliseconds = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setOperatingCompany($operatingCompany)
            ->setPackageIdentifier($packageIdentifier)
            ->setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
            ->setShipDateRangeBegin($shipDateRangeBegin)
            ->setShipDateRangeEnd($shipDateRangeEnd)
            ->setShipmentAccountNumber($shipmentAccountNumber)
            ->setSecureSpodAccount($secureSpodAccount)
            ->setDestination($destination)
            ->setPagingDetail($pagingDetail)
            ->setCustomerSpecifiedTimeOutValueInMilliseconds($customerSpecifiedTimeOutValueInMilliseconds);
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues()
     * @param string $carrierCode
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        if (!\Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get OperatingCompany value
     * @return string|null
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    /**
     * Set OperatingCompany value
     * @uses \Arkitecht\FedEx\Enums\OperatingCompanyType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\OperatingCompanyType::getValidValues()
     * @param string $operatingCompany
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setOperatingCompany($operatingCompany = null)
    {
        if (!\Arkitecht\FedEx\Enums\OperatingCompanyType::valueIsValid($operatingCompany)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operatingCompany, implode(', ', \Arkitecht\FedEx\Enums\OperatingCompanyType::getValidValues())), __LINE__);
        }
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    /**
     * Get PackageIdentifier value
     * @return \Arkitecht\FedEx\Structs\TrackPackageIdentifier|null
     */
    public function getPackageIdentifier()
    {
        return $this->PackageIdentifier;
    }
    /**
     * Set PackageIdentifier value
     * @param \Arkitecht\FedEx\Structs\TrackPackageIdentifier $packageIdentifier
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setPackageIdentifier(\Arkitecht\FedEx\Structs\TrackPackageIdentifier $packageIdentifier = null)
    {
        $this->PackageIdentifier = $packageIdentifier;
        return $this;
    }
    /**
     * Get TrackingNumberUniqueIdentifier value
     * @return string|null
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    /**
     * Set TrackingNumberUniqueIdentifier value
     * @param string $trackingNumberUniqueIdentifier
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier = null)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    /**
     * Get ShipDateRangeBegin value
     * @return date|null
     */
    public function getShipDateRangeBegin()
    {
        return $this->ShipDateRangeBegin;
    }
    /**
     * Set ShipDateRangeBegin value
     * @param date $shipDateRangeBegin
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setShipDateRangeBegin($shipDateRangeBegin = null)
    {
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    /**
     * Get ShipDateRangeEnd value
     * @return date|null
     */
    public function getShipDateRangeEnd()
    {
        return $this->ShipDateRangeEnd;
    }
    /**
     * Set ShipDateRangeEnd value
     * @param date $shipDateRangeEnd
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setShipDateRangeEnd($shipDateRangeEnd = null)
    {
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    /**
     * Get ShipmentAccountNumber value
     * @return string|null
     */
    public function getShipmentAccountNumber()
    {
        return $this->ShipmentAccountNumber;
    }
    /**
     * Set ShipmentAccountNumber value
     * @param string $shipmentAccountNumber
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setShipmentAccountNumber($shipmentAccountNumber = null)
    {
        $this->ShipmentAccountNumber = $shipmentAccountNumber;
        return $this;
    }
    /**
     * Get SecureSpodAccount value
     * @return string|null
     */
    public function getSecureSpodAccount()
    {
        return $this->SecureSpodAccount;
    }
    /**
     * Set SecureSpodAccount value
     * @param string $secureSpodAccount
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setSecureSpodAccount($secureSpodAccount = null)
    {
        $this->SecureSpodAccount = $secureSpodAccount;
        return $this;
    }
    /**
     * Get Destination value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param \Arkitecht\FedEx\Structs\Address $destination
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setDestination(\Arkitecht\FedEx\Structs\Address $destination = null)
    {
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Get PagingDetail value
     * @return \Arkitecht\FedEx\Structs\PagingDetail|null
     */
    public function getPagingDetail()
    {
        return $this->PagingDetail;
    }
    /**
     * Set PagingDetail value
     * @param \Arkitecht\FedEx\Structs\PagingDetail $pagingDetail
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setPagingDetail(\Arkitecht\FedEx\Structs\PagingDetail $pagingDetail = null)
    {
        $this->PagingDetail = $pagingDetail;
        return $this;
    }
    /**
     * Get CustomerSpecifiedTimeOutValueInMilliseconds value
     * @return nonNegativeInteger|null
     */
    public function getCustomerSpecifiedTimeOutValueInMilliseconds()
    {
        return $this->CustomerSpecifiedTimeOutValueInMilliseconds;
    }
    /**
     * Set CustomerSpecifiedTimeOutValueInMilliseconds value
     * @param nonNegativeInteger $customerSpecifiedTimeOutValueInMilliseconds
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public function setCustomerSpecifiedTimeOutValueInMilliseconds($customerSpecifiedTimeOutValueInMilliseconds = null)
    {
        $this->CustomerSpecifiedTimeOutValueInMilliseconds = $customerSpecifiedTimeOutValueInMilliseconds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail
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
