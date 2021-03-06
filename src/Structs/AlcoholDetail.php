<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlcoholDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies details for a package containing alcohol
 * @subpackage Structs
 */
class AlcoholDetail extends AbstractStructBase
{
    /**
     * The RecipientType
     * Meta informations extracted from the WSDL
     * - documentation: The license type that the recipient of the alcohol package.
     * - minOccurs: 0
     * - documentation: Specifies the type of license that the recipient of the alcohol shipment has.
     * @var string
     */
    public $RecipientType;
    /**
     * Constructor method for AlcoholDetail
     * @uses AlcoholDetail::setRecipientType()
     * @param string $recipientType
     */
    public function __construct($recipientType = null)
    {
        $this
            ->setRecipientType($recipientType);
    }
    /**
     * Get RecipientType value
     * @return string|null
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    /**
     * Set RecipientType value
     * @uses \Arkitecht\FedEx\Enums\AlcoholRecipientType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\AlcoholRecipientType::getValidValues()
     * @param string $recipientType
     * @return \Arkitecht\FedEx\Structs\AlcoholDetail
     */
    public function setRecipientType($recipientType = null)
    {
        if (!\Arkitecht\FedEx\Enums\AlcoholRecipientType::valueIsValid($recipientType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $recipientType, implode(', ', \Arkitecht\FedEx\Enums\AlcoholRecipientType::getValidValues())), __LINE__);
        }
        $this->RecipientType = $recipientType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\AlcoholDetail
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
