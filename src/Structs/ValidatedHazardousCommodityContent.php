<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousCommodityContent Structs
 * Meta informations extracted from the WSDL
 * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
 * @subpackage Structs
 */
class ValidatedHazardousCommodityContent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Identifies and describes an individual hazardous commodity.
     * - minOccurs: 0
     * - documentation: Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     * @var \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     */
    public $Description;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the amount of the commodity in alternate units.
     * - minOccurs: 0
     * - documentation: Identifies amount and units for quantity of hazardous commodities.
     * @var \Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail
     */
    public $Quantity;
    /**
     * The MassPoints
     * Meta informations extracted from the WSDL
     * - documentation: The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.
     * - minOccurs: 0
     * @var decimal
     */
    public $MassPoints;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided specifications for handling individual commodities.
     * - minOccurs: 0
     * - documentation: Customer-provided specifications for handling individual commodities.
     * @var \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail
     */
    public $Options;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for ValidatedHazardousCommodityContent
     * @uses ValidatedHazardousCommodityContent::setDescription()
     * @uses ValidatedHazardousCommodityContent::setQuantity()
     * @uses ValidatedHazardousCommodityContent::setMassPoints()
     * @uses ValidatedHazardousCommodityContent::setOptions()
     * @uses ValidatedHazardousCommodityContent::setNetExplosiveDetail()
     * @param \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     * $description
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail $quantity
     * @param decimal $massPoints
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail $options
     * @param \Arkitecht\FedEx\Structs\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription $description = null, \Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail $quantity = null, $massPoints = null, \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail $options = null, \Arkitecht\FedEx\Structs\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setMassPoints($massPoints)
            ->setOptions($options)
            ->setNetExplosiveDetail($netExplosiveDetail);
    }
    /**
     * Get Description value
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription
     * $description
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
     */
    public function setDescription(\Arkitecht\FedEx\Structs\ValidatedHazardousCommodityDescription $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Quantity value
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail $quantity
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
     */
    public function setQuantity(\Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get MassPoints value
     * @return decimal|null
     */
    public function getMassPoints()
    {
        return $this->MassPoints;
    }
    /**
     * Set MassPoints value
     * @param decimal $massPoints
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
     */
    public function setMassPoints($massPoints = null)
    {
        $this->MassPoints = $massPoints;
        return $this;
    }
    /**
     * Get Options value
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail $options
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
     */
    public function setOptions(\Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get NetExplosiveDetail value
     * @return \Arkitecht\FedEx\Structs\NetExplosiveDetail|null
     */
    public function getNetExplosiveDetail()
    {
        return $this->NetExplosiveDetail;
    }
    /**
     * Set NetExplosiveDetail value
     * @param \Arkitecht\FedEx\Structs\NetExplosiveDetail $netExplosiveDetail
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
     */
    public function setNetExplosiveDetail(\Arkitecht\FedEx\Structs\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this->NetExplosiveDetail = $netExplosiveDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
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
