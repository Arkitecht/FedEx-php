<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackStatusDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about the status of the track information for the shipments being tracked.
 * @subpackage Structs
 */
class TrackStatusDetail extends AbstractStructBase
{
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $CreationTime;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $Location;
    /**
     * The AncillaryDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail
     */
    public $AncillaryDetails;
    /**
     * Constructor method for TrackStatusDetail
     * @uses TrackStatusDetail::setCreationTime()
     * @uses TrackStatusDetail::setCode()
     * @uses TrackStatusDetail::setDescription()
     * @uses TrackStatusDetail::setLocation()
     * @uses TrackStatusDetail::setAncillaryDetails()
     * @param dateTime $creationTime
     * @param string $code
     * @param string $description
     * @param \Arkitecht\FedEx\Structs\Address $location
     * @param \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail $ancillaryDetails
     */
    public function __construct($creationTime = null, $code = null, $description = null, \Arkitecht\FedEx\Structs\Address $location = null, \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail $ancillaryDetails = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setCode($code)
            ->setDescription($description)
            ->setLocation($location)
            ->setAncillaryDetails($ancillaryDetails);
    }
    /**
     * Get CreationTime value
     * @return dateTime|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param dateTime $creationTime
     * @return \Arkitecht\FedEx\Structs\TrackStatusDetail
     */
    public function setCreationTime($creationTime = null)
    {
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Arkitecht\FedEx\Structs\TrackStatusDetail
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
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
     * @return \Arkitecht\FedEx\Structs\TrackStatusDetail
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Location value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Arkitecht\FedEx\Structs\Address $location
     * @return \Arkitecht\FedEx\Structs\TrackStatusDetail
     */
    public function setLocation(\Arkitecht\FedEx\Structs\Address $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get AncillaryDetails value
     * @return \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail|null
     */
    public function getAncillaryDetails()
    {
        return $this->AncillaryDetails;
    }
    /**
     * Set AncillaryDetails value
     * @param \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail $ancillaryDetails
     * @return \Arkitecht\FedEx\Structs\TrackStatusDetail
     */
    public function setAncillaryDetails(\Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail $ancillaryDetails = null)
    {
        $this->AncillaryDetails = $ancillaryDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackStatusDetail
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
