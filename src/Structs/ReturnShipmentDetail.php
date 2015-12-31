<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnShipmentDetail Structs
 * @subpackage Structs
 */
class ReturnShipmentDetail extends AbstractStructBase
{
    /**
     * The ReturnType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReturnType;
    /**
     * The Rma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Rma
     */
    public $Rma;
    /**
     * The ReturnEMailDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ReturnEMailDetail
     */
    public $ReturnEMailDetail;
    /**
     * The ReturnAssociation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ReturnAssociationDetail
     */
    public $ReturnAssociation;
    /**
     * Constructor method for ReturnShipmentDetail
     * @uses ReturnShipmentDetail::setReturnType()
     * @uses ReturnShipmentDetail::setRma()
     * @uses ReturnShipmentDetail::setReturnEMailDetail()
     * @uses ReturnShipmentDetail::setReturnAssociation()
     * @param string $returnType
     * @param \Arkitecht\FedEx\Structs\Rma $rma
     * @param \Arkitecht\FedEx\Structs\ReturnEMailDetail $returnEMailDetail
     * @param \Arkitecht\FedEx\Structs\ReturnAssociationDetail $returnAssociation
     */
    public function __construct($returnType = null, \Arkitecht\FedEx\Structs\Rma $rma = null, \Arkitecht\FedEx\Structs\ReturnEMailDetail $returnEMailDetail = null, \Arkitecht\FedEx\Structs\ReturnAssociationDetail $returnAssociation = null)
    {
        $this
            ->setReturnType($returnType)
            ->setRma($rma)
            ->setReturnEMailDetail($returnEMailDetail)
            ->setReturnAssociation($returnAssociation);
    }
    /**
     * Get ReturnType value
     * @return string|null
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }
    /**
     * Set ReturnType value
     * @uses \Arkitecht\FedEx\Enums\ReturnType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ReturnType::getValidValues()
     * @param string $returnType
     * @return \Arkitecht\FedEx\Structs\ReturnShipmentDetail
     */
    public function setReturnType($returnType = null)
    {
        if (!\Arkitecht\FedEx\Enums\ReturnType::valueIsValid($returnType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnType, implode(', ', \Arkitecht\FedEx\Enums\ReturnType::getValidValues())), __LINE__);
        }
        $this->ReturnType = $returnType;
        return $this;
    }
    /**
     * Get Rma value
     * @return \Arkitecht\FedEx\Structs\Rma|null
     */
    public function getRma()
    {
        return $this->Rma;
    }
    /**
     * Set Rma value
     * @param \Arkitecht\FedEx\Structs\Rma $rma
     * @return \Arkitecht\FedEx\Structs\ReturnShipmentDetail
     */
    public function setRma(\Arkitecht\FedEx\Structs\Rma $rma = null)
    {
        $this->Rma = $rma;
        return $this;
    }
    /**
     * Get ReturnEMailDetail value
     * @return \Arkitecht\FedEx\Structs\ReturnEMailDetail|null
     */
    public function getReturnEMailDetail()
    {
        return $this->ReturnEMailDetail;
    }
    /**
     * Set ReturnEMailDetail value
     * @param \Arkitecht\FedEx\Structs\ReturnEMailDetail $returnEMailDetail
     * @return \Arkitecht\FedEx\Structs\ReturnShipmentDetail
     */
    public function setReturnEMailDetail(\Arkitecht\FedEx\Structs\ReturnEMailDetail $returnEMailDetail = null)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    /**
     * Get ReturnAssociation value
     * @return \Arkitecht\FedEx\Structs\ReturnAssociationDetail|null
     */
    public function getReturnAssociation()
    {
        return $this->ReturnAssociation;
    }
    /**
     * Set ReturnAssociation value
     * @param \Arkitecht\FedEx\Structs\ReturnAssociationDetail $returnAssociation
     * @return \Arkitecht\FedEx\Structs\ReturnShipmentDetail
     */
    public function setReturnAssociation(\Arkitecht\FedEx\Structs\ReturnAssociationDetail $returnAssociation = null)
    {
        $this->ReturnAssociation = $returnAssociation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ReturnShipmentDetail
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
