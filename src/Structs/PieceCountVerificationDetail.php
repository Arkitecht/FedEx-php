<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PieceCountVerificationDetail Structs
 * @subpackage Structs
 */
class PieceCountVerificationDetail extends AbstractStructBase
{
    /**
     * The CountLocationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountLocationType;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $Count;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for PieceCountVerificationDetail
     * @uses PieceCountVerificationDetail::setCountLocationType()
     * @uses PieceCountVerificationDetail::setCount()
     * @uses PieceCountVerificationDetail::setDescription()
     * @param string $countLocationType
     * @param nonNegativeInteger $count
     * @param string $description
     */
    public function __construct($countLocationType = null, $count = null, $description = null)
    {
        $this
            ->setCountLocationType($countLocationType)
            ->setCount($count)
            ->setDescription($description);
    }
    /**
     * Get CountLocationType value
     * @return string|null
     */
    public function getCountLocationType()
    {
        return $this->CountLocationType;
    }
    /**
     * Set CountLocationType value
     * @uses \Arkitecht\FedEx\Enums\PieceCountLocationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PieceCountLocationType::getValidValues()
     * @param string $countLocationType
     * @return \Arkitecht\FedEx\Structs\PieceCountVerificationDetail
     */
    public function setCountLocationType($countLocationType = null)
    {
        if (!\Arkitecht\FedEx\Enums\PieceCountLocationType::valueIsValid($countLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $countLocationType, implode(', ', \Arkitecht\FedEx\Enums\PieceCountLocationType::getValidValues())), __LINE__);
        }
        $this->CountLocationType = $countLocationType;
        return $this;
    }
    /**
     * Get Count value
     * @return nonNegativeInteger|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param nonNegativeInteger $count
     * @return \Arkitecht\FedEx\Structs\PieceCountVerificationDetail
     */
    public function setCount($count = null)
    {
        $this->Count = $count;
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
     * @return \Arkitecht\FedEx\Structs\PieceCountVerificationDetail
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PieceCountVerificationDetail
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
