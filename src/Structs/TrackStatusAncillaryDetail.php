<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackStatusAncillaryDetail Structs
 * @subpackage Structs
 */
class TrackStatusAncillaryDetail extends AbstractStructBase
{
    /**
     * The Reason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Reason;
    /**
     * The ReasonDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReasonDescription;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The ActionDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionDescription;
    /**
     * Constructor method for TrackStatusAncillaryDetail
     * @uses TrackStatusAncillaryDetail::setReason()
     * @uses TrackStatusAncillaryDetail::setReasonDescription()
     * @uses TrackStatusAncillaryDetail::setAction()
     * @uses TrackStatusAncillaryDetail::setActionDescription()
     * @param string $reason
     * @param string $reasonDescription
     * @param string $action
     * @param string $actionDescription
     */
    public function __construct($reason = null, $reasonDescription = null, $action = null, $actionDescription = null)
    {
        $this
            ->setReason($reason)
            ->setReasonDescription($reasonDescription)
            ->setAction($action)
            ->setActionDescription($actionDescription);
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail
     */
    public function setReason($reason = null)
    {
        $this->Reason = $reason;
        return $this;
    }
    /**
     * Get ReasonDescription value
     * @return string|null
     */
    public function getReasonDescription()
    {
        return $this->ReasonDescription;
    }
    /**
     * Set ReasonDescription value
     * @param string $reasonDescription
     * @return \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail
     */
    public function setReasonDescription($reasonDescription = null)
    {
        $this->ReasonDescription = $reasonDescription;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail
     */
    public function setAction($action = null)
    {
        $this->Action = $action;
        return $this;
    }
    /**
     * Get ActionDescription value
     * @return string|null
     */
    public function getActionDescription()
    {
        return $this->ActionDescription;
    }
    /**
     * Set ActionDescription value
     * @param string $actionDescription
     * @return \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail
     */
    public function setActionDescription($actionDescription = null)
    {
        $this->ActionDescription = $actionDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackStatusAncillaryDetail
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
