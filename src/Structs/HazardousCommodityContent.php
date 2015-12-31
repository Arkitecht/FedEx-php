<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityContent Structs
 * Meta informations extracted from the WSDL
 * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
 * @subpackage Structs
 */
class HazardousCommodityContent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Identifies and describes an individual hazardous commodity.
     * - minOccurs: 0
     * - documentation: Identifies and describes an individual hazardous commodity.
     * @var \Arkitecht\FedEx\Structs\HazardousCommodityDescription
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
     * The InnerReceptacles
     * Meta informations extracted from the WSDL
     * - documentation: This describes the inner receptacle details for a hazardous commodity within the dangerous goods container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: This describes information about the inner receptacles for the hazardous commodity in a particular dangerous goods container.
     * @var \Arkitecht\FedEx\Structs\HazardousCommodityInnerReceptacleDetail
     */
    public $InnerReceptacles;
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
     * The RadionuclideDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details of any radio active materials within the commodity.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RadionuclideDetail
     */
    public $RadionuclideDetail;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for HazardousCommodityContent
     * @uses HazardousCommodityContent::setDescription()
     * @uses HazardousCommodityContent::setQuantity()
     * @uses HazardousCommodityContent::setInnerReceptacles()
     * @uses HazardousCommodityContent::setOptions()
     * @uses HazardousCommodityContent::setRadionuclideDetail()
     * @uses HazardousCommodityContent::setNetExplosiveDetail()
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityDescription $description
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail $quantity
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityInnerReceptacleDetail
     * $innerReceptacles
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail $options
     * @param \Arkitecht\FedEx\Structs\RadionuclideDetail $radionuclideDetail
     * @param \Arkitecht\FedEx\Structs\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\Arkitecht\FedEx\Structs\HazardousCommodityDescription $description = null, \Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail $quantity = null, \Arkitecht\FedEx\Structs\HazardousCommodityInnerReceptacleDetail $innerReceptacles = null, \Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail $options = null, \Arkitecht\FedEx\Structs\RadionuclideDetail $radionuclideDetail = null, \Arkitecht\FedEx\Structs\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setInnerReceptacles($innerReceptacles)
            ->setOptions($options)
            ->setRadionuclideDetail($radionuclideDetail)
            ->setNetExplosiveDetail($netExplosiveDetail);
    }
    /**
     * Get Description value
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityDescription $description
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityContent
     */
    public function setDescription(\Arkitecht\FedEx\Structs\HazardousCommodityDescription $description = null)
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
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityContent
     */
    public function setQuantity(\Arkitecht\FedEx\Structs\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get InnerReceptacles value
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityInnerReceptacleDetail|null
     */
    public function getInnerReceptacles()
    {
        return $this->InnerReceptacles;
    }
    /**
     * Set InnerReceptacles value
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityInnerReceptacleDetail
     * $innerReceptacles
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityContent
     */
    public function setInnerReceptacles(\Arkitecht\FedEx\Structs\HazardousCommodityInnerReceptacleDetail $innerReceptacles = null)
    {
        $this->InnerReceptacles = $innerReceptacles;
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
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityContent
     */
    public function setOptions(\Arkitecht\FedEx\Structs\HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get RadionuclideDetail value
     * @return \Arkitecht\FedEx\Structs\RadionuclideDetail|null
     */
    public function getRadionuclideDetail()
    {
        return $this->RadionuclideDetail;
    }
    /**
     * Set RadionuclideDetail value
     * @param \Arkitecht\FedEx\Structs\RadionuclideDetail $radionuclideDetail
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityContent
     */
    public function setRadionuclideDetail(\Arkitecht\FedEx\Structs\RadionuclideDetail $radionuclideDetail = null)
    {
        $this->RadionuclideDetail = $radionuclideDetail;
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
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityContent
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
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityContent
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
