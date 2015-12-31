<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentConfigurationData Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies data structures that may be re-used multiple times with s single shipment.
 * @subpackage Structs
 */
class ShipmentConfigurationData extends AbstractStructBase
{
    /**
     * The DangerousGoodsPackageConfigurations
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the data that is common to dangerous goods packages in the shipment. This is populated when the shipment contains packages with identical dangerous goods commodities.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     */
    public $DangerousGoodsPackageConfigurations;
    /**
     * Constructor method for ShipmentConfigurationData
     * @uses ShipmentConfigurationData::setDangerousGoodsPackageConfigurations()
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     * $dangerousGoodsPackageConfigurations
     */
    public function __construct(\Arkitecht\FedEx\Structs\DangerousGoodsDetail $dangerousGoodsPackageConfigurations = null)
    {
        $this
            ->setDangerousGoodsPackageConfigurations($dangerousGoodsPackageConfigurations);
    }
    /**
     * Get DangerousGoodsPackageConfigurations value
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsDetail|null
     */
    public function getDangerousGoodsPackageConfigurations()
    {
        return $this->DangerousGoodsPackageConfigurations;
    }
    /**
     * Set DangerousGoodsPackageConfigurations value
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsDetail
     * $dangerousGoodsPackageConfigurations
     * @return \Arkitecht\FedEx\Structs\ShipmentConfigurationData
     */
    public function setDangerousGoodsPackageConfigurations(\Arkitecht\FedEx\Structs\DangerousGoodsDetail $dangerousGoodsPackageConfigurations = null)
    {
        $this->DangerousGoodsPackageConfigurations = $dangerousGoodsPackageConfigurations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShipmentConfigurationData
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
