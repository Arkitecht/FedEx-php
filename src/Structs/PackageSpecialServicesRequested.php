<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageSpecialServicesRequested Structs
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the
 * specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class PackageSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: The types of all special services requested for the enclosing shipment or package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use with FedEx Ground services only; COD must be present in shipment's special services.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CodDetail
     */
    public $CodDetail;
    /**
     * The DangerousGoodsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public $DangerousGoodsDetail;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $DryIceWeight;
    /**
     * The SignatureOptionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\SignatureOptionDetail
     */
    public $SignatureOptionDetail;
    /**
     * The PriorityAlertDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PriorityAlertDetail
     */
    public $PriorityAlertDetail;
    /**
     * The AlcoholDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\AlcoholDetail
     */
    public $AlcoholDetail;
    /**
     * Constructor method for PackageSpecialServicesRequested
     * @uses PackageSpecialServicesRequested::setSpecialServiceTypes()
     * @uses PackageSpecialServicesRequested::setCodDetail()
     * @uses PackageSpecialServicesRequested::setDangerousGoodsDetail()
     * @uses PackageSpecialServicesRequested::setDryIceWeight()
     * @uses PackageSpecialServicesRequested::setSignatureOptionDetail()
     * @uses PackageSpecialServicesRequested::setPriorityAlertDetail()
     * @uses PackageSpecialServicesRequested::setAlcoholDetail()
     * @param string $specialServiceTypes
     * @param \Arkitecht\FedEx\Structs\CodDetail $codDetail
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsDetail $dangerousGoodsDetail
     * @param \Arkitecht\FedEx\Structs\Weight $dryIceWeight
     * @param \Arkitecht\FedEx\Structs\SignatureOptionDetail $signatureOptionDetail
     * @param \Arkitecht\FedEx\Structs\PriorityAlertDetail $priorityAlertDetail
     * @param \Arkitecht\FedEx\Structs\AlcoholDetail $alcoholDetail
     */
    public function __construct($specialServiceTypes = null, \Arkitecht\FedEx\Structs\CodDetail $codDetail = null, \Arkitecht\FedEx\Structs\DangerousGoodsDetail $dangerousGoodsDetail = null, \Arkitecht\FedEx\Structs\Weight $dryIceWeight = null, \Arkitecht\FedEx\Structs\SignatureOptionDetail $signatureOptionDetail = null, \Arkitecht\FedEx\Structs\PriorityAlertDetail $priorityAlertDetail = null, \Arkitecht\FedEx\Structs\AlcoholDetail $alcoholDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDangerousGoodsDetail($dangerousGoodsDetail)
            ->setDryIceWeight($dryIceWeight)
            ->setSignatureOptionDetail($signatureOptionDetail)
            ->setPriorityAlertDetail($priorityAlertDetail)
            ->setAlcoholDetail($alcoholDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @uses \Arkitecht\FedEx\Enums\PackageSpecialServiceType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PackageSpecialServiceType::getValidValues()
     * @param string $specialServiceTypes
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes($specialServiceTypes = null)
    {
        if (!\Arkitecht\FedEx\Enums\PackageSpecialServiceType::valueIsValid($specialServiceTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $specialServiceTypes, implode(', ', \Arkitecht\FedEx\Enums\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \Arkitecht\FedEx\Structs\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \Arkitecht\FedEx\Structs\CodDetail $codDetail
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     */
    public function setCodDetail(\Arkitecht\FedEx\Structs\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DangerousGoodsDetail value
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail|null
     */
    public function getDangerousGoodsDetail()
    {
        return $this->DangerousGoodsDetail;
    }
    /**
     * Set DangerousGoodsDetail value
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsDetail $dangerousGoodsDetail
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(\Arkitecht\FedEx\Structs\DangerousGoodsDetail $dangerousGoodsDetail = null)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $dryIceWeight
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     */
    public function setDryIceWeight(\Arkitecht\FedEx\Structs\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Get SignatureOptionDetail value
     * @return \Arkitecht\FedEx\Structs\SignatureOptionDetail|null
     */
    public function getSignatureOptionDetail()
    {
        return $this->SignatureOptionDetail;
    }
    /**
     * Set SignatureOptionDetail value
     * @param \Arkitecht\FedEx\Structs\SignatureOptionDetail $signatureOptionDetail
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(\Arkitecht\FedEx\Structs\SignatureOptionDetail $signatureOptionDetail = null)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    /**
     * Get PriorityAlertDetail value
     * @return \Arkitecht\FedEx\Structs\PriorityAlertDetail|null
     */
    public function getPriorityAlertDetail()
    {
        return $this->PriorityAlertDetail;
    }
    /**
     * Set PriorityAlertDetail value
     * @param \Arkitecht\FedEx\Structs\PriorityAlertDetail $priorityAlertDetail
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(\Arkitecht\FedEx\Structs\PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    /**
     * Get AlcoholDetail value
     * @return \Arkitecht\FedEx\Structs\AlcoholDetail|null
     */
    public function getAlcoholDetail()
    {
        return $this->AlcoholDetail;
    }
    /**
     * Set AlcoholDetail value
     * @param \Arkitecht\FedEx\Structs\AlcoholDetail $alcoholDetail
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
     */
    public function setAlcoholDetail(\Arkitecht\FedEx\Structs\AlcoholDetail $alcoholDetail = null)
    {
        $this->AlcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PackageSpecialServicesRequested
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
