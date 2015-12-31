<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackSplitShipmentPart Structs
 * Meta informations extracted from the WSDL
 * - documentation: Used when a cargo shipment is split across vehicles. This is used to give the status of each part of the shipment.
 * @subpackage Structs
 */
class TrackSplitShipmentPart extends AbstractStructBase
{
    /**
     * The PieceCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of pieces in this part.
     * - minOccurs: 0
     * @var positiveInteger
     */
    public $PieceCount;
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - documentation: The date and time this status began.
     * - minOccurs: 0
     * @var dateTime
     */
    public $Timestamp;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - documentation: A code that identifies this type of status.
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The StatusDescription
     * Meta informations extracted from the WSDL
     * - documentation: A human-readable description of this status.
     * - minOccurs: 0
     * @var string
     */
    public $StatusDescription;
    /**
     * Constructor method for TrackSplitShipmentPart
     * @uses TrackSplitShipmentPart::setPieceCount()
     * @uses TrackSplitShipmentPart::setTimestamp()
     * @uses TrackSplitShipmentPart::setStatusCode()
     * @uses TrackSplitShipmentPart::setStatusDescription()
     * @param positiveInteger $pieceCount
     * @param dateTime $timestamp
     * @param string $statusCode
     * @param string $statusDescription
     */
    public function __construct($pieceCount = null, $timestamp = null, $statusCode = null, $statusDescription = null)
    {
        $this
            ->setPieceCount($pieceCount)
            ->setTimestamp($timestamp)
            ->setStatusCode($statusCode)
            ->setStatusDescription($statusDescription);
    }
    /**
     * Get PieceCount value
     * @return positiveInteger|null
     */
    public function getPieceCount()
    {
        return $this->PieceCount;
    }
    /**
     * Set PieceCount value
     * @param positiveInteger $pieceCount
     * @return \Arkitecht\FedEx\Structs\TrackSplitShipmentPart
     */
    public function setPieceCount($pieceCount = null)
    {
        $this->PieceCount = $pieceCount;
        return $this;
    }
    /**
     * Get Timestamp value
     * @return dateTime|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param dateTime $timestamp
     * @return \Arkitecht\FedEx\Structs\TrackSplitShipmentPart
     */
    public function setTimestamp($timestamp = null)
    {
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Arkitecht\FedEx\Structs\TrackSplitShipmentPart
     */
    public function setStatusCode($statusCode = null)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StatusDescription value
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    /**
     * Set StatusDescription value
     * @param string $statusDescription
     * @return \Arkitecht\FedEx\Structs\TrackSplitShipmentPart
     */
    public function setStatusDescription($statusDescription = null)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackSplitShipmentPart
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
