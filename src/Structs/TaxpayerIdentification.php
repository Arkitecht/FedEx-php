<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxpayerIdentification Structs
 * @subpackage Structs
 */
class TaxpayerIdentification extends AbstractStructBase
{
    /**
     * The TinType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TinType;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The Usage
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the usage of Tax Identification Number in Shipment processing
     * - minOccurs: 0
     * @var string
     */
    public $Usage;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $EffectiveDate;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ExpirationDate;
    /**
     * Constructor method for TaxpayerIdentification
     * @uses TaxpayerIdentification::setTinType()
     * @uses TaxpayerIdentification::setNumber()
     * @uses TaxpayerIdentification::setUsage()
     * @uses TaxpayerIdentification::setEffectiveDate()
     * @uses TaxpayerIdentification::setExpirationDate()
     * @param string $tinType
     * @param string $number
     * @param string $usage
     * @param dateTime $effectiveDate
     * @param dateTime $expirationDate
     */
    public function __construct($tinType = null, $number = null, $usage = null, $effectiveDate = null, $expirationDate = null)
    {
        $this
            ->setTinType($tinType)
            ->setNumber($number)
            ->setUsage($usage)
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get TinType value
     * @return string|null
     */
    public function getTinType()
    {
        return $this->TinType;
    }
    /**
     * Set TinType value
     * @uses \Arkitecht\FedEx\Enums\TinType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TinType::getValidValues()
     * @param string $tinType
     * @return \Arkitecht\FedEx\Structs\TaxpayerIdentification
     */
    public function setTinType($tinType = null)
    {
        if (!\Arkitecht\FedEx\Enums\TinType::valueIsValid($tinType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tinType, implode(', ', \Arkitecht\FedEx\Enums\TinType::getValidValues())), __LINE__);
        }
        $this->TinType = $tinType;
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Arkitecht\FedEx\Structs\TaxpayerIdentification
     */
    public function setNumber($number = null)
    {
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Usage value
     * @return string|null
     */
    public function getUsage()
    {
        return $this->Usage;
    }
    /**
     * Set Usage value
     * @param string $usage
     * @return \Arkitecht\FedEx\Structs\TaxpayerIdentification
     */
    public function setUsage($usage = null)
    {
        $this->Usage = $usage;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return dateTime|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param dateTime $effectiveDate
     * @return \Arkitecht\FedEx\Structs\TaxpayerIdentification
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return dateTime|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param dateTime $expirationDate
     * @return \Arkitecht\FedEx\Structs\TaxpayerIdentification
     */
    public function setExpirationDate($expirationDate = null)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TaxpayerIdentification
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
