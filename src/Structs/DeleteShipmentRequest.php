<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data sent to FedEx by a customer in order to delete a package.
 * - type: ns:DeleteShipmentRequest
 * @subpackage Structs
 */
class DeleteShipmentRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \Arkitecht\FedEx\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data identifying the client submitting the transaction.
     * - minOccurs: 1
     * @var \Arkitecht\FedEx\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * - minOccurs: 1
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * @var \Arkitecht\FedEx\Structs\VersionId
     */
    public $Version;
    /**
     * The DeletionControl
     * Meta informations extracted from the WSDL
     * - documentation: Determines the type of deletion to be performed in relation to package level vs shipment level.
     * - minOccurs: 1
     * - documentation: Specifies the type of deletion to be performed on a shipment.
     * @var string
     */
    public $DeletionControl;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The ShipTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: The timestamp of the shipment request.
     * - minOccurs: 0
     * @var dateTime
     */
    public $ShipTimestamp;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the FedEx tracking number of the package being cancelled.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackingId
     */
    public $TrackingId;
    /**
     * Constructor method for DeleteShipmentRequest
     * @uses DeleteShipmentRequest::setWebAuthenticationDetail()
     * @uses DeleteShipmentRequest::setClientDetail()
     * @uses DeleteShipmentRequest::setVersion()
     * @uses DeleteShipmentRequest::setDeletionControl()
     * @uses DeleteShipmentRequest::setTransactionDetail()
     * @uses DeleteShipmentRequest::setShipTimestamp()
     * @uses DeleteShipmentRequest::setTrackingId()
     * @param \Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Arkitecht\FedEx\Structs\ClientDetail $clientDetail
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param string $deletionControl
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param dateTime $shipTimestamp
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingId
     */
    public function __construct(\Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \Arkitecht\FedEx\Structs\ClientDetail $clientDetail = null, \Arkitecht\FedEx\Structs\VersionId $version = null, $deletionControl = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, $shipTimestamp = null, \Arkitecht\FedEx\Structs\TrackingId $trackingId = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setDeletionControl($deletionControl)
            ->setTransactionDetail($transactionDetail)
            ->setShipTimestamp($shipTimestamp)
            ->setTrackingId($trackingId);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \Arkitecht\FedEx\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \Arkitecht\FedEx\Structs\DeleteShipmentRequest
     */
    public function setWebAuthenticationDetail(\Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \Arkitecht\FedEx\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Arkitecht\FedEx\Structs\ClientDetail $clientDetail
     * @return \Arkitecht\FedEx\Structs\DeleteShipmentRequest
     */
    public function setClientDetail(\Arkitecht\FedEx\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \Arkitecht\FedEx\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @return \Arkitecht\FedEx\Structs\DeleteShipmentRequest
     */
    public function setVersion(\Arkitecht\FedEx\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get DeletionControl value
     * @return string
     */
    public function getDeletionControl()
    {
        return $this->DeletionControl;
    }
    /**
     * Set DeletionControl value
     * @uses \Arkitecht\FedEx\Enums\DeletionControlType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DeletionControlType::getValidValues()
     * @param string $deletionControl
     * @return \Arkitecht\FedEx\Structs\DeleteShipmentRequest
     */
    public function setDeletionControl($deletionControl = null)
    {
        if (!\Arkitecht\FedEx\Enums\DeletionControlType::valueIsValid($deletionControl)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deletionControl, implode(', ', \Arkitecht\FedEx\Enums\DeletionControlType::getValidValues())), __LINE__);
        }
        $this->DeletionControl = $deletionControl;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \Arkitecht\FedEx\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @return \Arkitecht\FedEx\Structs\DeleteShipmentRequest
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ShipTimestamp value
     * @return dateTime|null
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    /**
     * Set ShipTimestamp value
     * @param dateTime $shipTimestamp
     * @return \Arkitecht\FedEx\Structs\DeleteShipmentRequest
     */
    public function setShipTimestamp($shipTimestamp = null)
    {
        $this->ShipTimestamp = $shipTimestamp;
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
     * @return \Arkitecht\FedEx\Structs\DeleteShipmentRequest
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
     * @return \Arkitecht\FedEx\Structs\DeleteShipmentRequest
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
