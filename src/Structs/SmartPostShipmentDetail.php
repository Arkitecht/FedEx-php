<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmartPostShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 * @subpackage Structs
 */
class SmartPostShipmentDetail extends AbstractStructBase
{
    /**
     * The ProcessingOptionsRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\SmartPostShipmentProcessingOptionsRequested
     */
    public $ProcessingOptionsRequested;
    /**
     * The Indicia
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Indicia;
    /**
     * The AncillaryEndorsement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: These values are mutually exclusive; at most one of them can be attached to a SmartPost shipment.
     * @var string
     */
    public $AncillaryEndorsement;
    /**
     * The HubId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HubId;
    /**
     * The CustomerManifestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerManifestId;
    /**
     * Constructor method for SmartPostShipmentDetail
     * @uses SmartPostShipmentDetail::setProcessingOptionsRequested()
     * @uses SmartPostShipmentDetail::setIndicia()
     * @uses SmartPostShipmentDetail::setAncillaryEndorsement()
     * @uses SmartPostShipmentDetail::setHubId()
     * @uses SmartPostShipmentDetail::setCustomerManifestId()
     * @param \Arkitecht\FedEx\Structs\SmartPostShipmentProcessingOptionsRequested
     * $processingOptionsRequested
     * @param string $indicia
     * @param string $ancillaryEndorsement
     * @param string $hubId
     * @param string $customerManifestId
     */
    public function __construct(\Arkitecht\FedEx\Structs\SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested = null, $indicia = null, $ancillaryEndorsement = null, $hubId = null, $customerManifestId = null)
    {
        $this
            ->setProcessingOptionsRequested($processingOptionsRequested)
            ->setIndicia($indicia)
            ->setAncillaryEndorsement($ancillaryEndorsement)
            ->setHubId($hubId)
            ->setCustomerManifestId($customerManifestId);
    }
    /**
     * Get ProcessingOptionsRequested value
     * @return
     * \Arkitecht\FedEx\Structs\SmartPostShipmentProcessingOptionsRequested|null
     */
    public function getProcessingOptionsRequested()
    {
        return $this->ProcessingOptionsRequested;
    }
    /**
     * Set ProcessingOptionsRequested value
     * @param \Arkitecht\FedEx\Structs\SmartPostShipmentProcessingOptionsRequested
     * $processingOptionsRequested
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentDetail
     */
    public function setProcessingOptionsRequested(\Arkitecht\FedEx\Structs\SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested = null)
    {
        $this->ProcessingOptionsRequested = $processingOptionsRequested;
        return $this;
    }
    /**
     * Get Indicia value
     * @return string|null
     */
    public function getIndicia()
    {
        return $this->Indicia;
    }
    /**
     * Set Indicia value
     * @uses \Arkitecht\FedEx\Enums\SmartPostIndiciaType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SmartPostIndiciaType::getValidValues()
     * @param string $indicia
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentDetail
     */
    public function setIndicia($indicia = null)
    {
        if (!\Arkitecht\FedEx\Enums\SmartPostIndiciaType::valueIsValid($indicia)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $indicia, implode(', ', \Arkitecht\FedEx\Enums\SmartPostIndiciaType::getValidValues())), __LINE__);
        }
        $this->Indicia = $indicia;
        return $this;
    }
    /**
     * Get AncillaryEndorsement value
     * @return string|null
     */
    public function getAncillaryEndorsement()
    {
        return $this->AncillaryEndorsement;
    }
    /**
     * Set AncillaryEndorsement value
     * @uses \Arkitecht\FedEx\Enums\SmartPostAncillaryEndorsementType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SmartPostAncillaryEndorsementType::getValidValues()
     * @param string $ancillaryEndorsement
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement($ancillaryEndorsement = null)
    {
        if (!\Arkitecht\FedEx\Enums\SmartPostAncillaryEndorsementType::valueIsValid($ancillaryEndorsement)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ancillaryEndorsement, implode(', ', \Arkitecht\FedEx\Enums\SmartPostAncillaryEndorsementType::getValidValues())), __LINE__);
        }
        $this->AncillaryEndorsement = $ancillaryEndorsement;
        return $this;
    }
    /**
     * Get HubId value
     * @return string|null
     */
    public function getHubId()
    {
        return $this->HubId;
    }
    /**
     * Set HubId value
     * @param string $hubId
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentDetail
     */
    public function setHubId($hubId = null)
    {
        $this->HubId = $hubId;
        return $this;
    }
    /**
     * Get CustomerManifestId value
     * @return string|null
     */
    public function getCustomerManifestId()
    {
        return $this->CustomerManifestId;
    }
    /**
     * Set CustomerManifestId value
     * @param string $customerManifestId
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId = null)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentDetail
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
