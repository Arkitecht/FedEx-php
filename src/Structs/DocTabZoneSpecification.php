<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabZoneSpecification Structs
 * @subpackage Structs
 */
class DocTabZoneSpecification extends AbstractStructBase
{
    /**
     * The ZoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var positiveInteger
     */
    public $ZoneNumber;
    /**
     * The Header
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Header;
    /**
     * The DataField
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DataField;
    /**
     * The LiteralValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LiteralValue;
    /**
     * The Justification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Justification;
    /**
     * Constructor method for DocTabZoneSpecification
     * @uses DocTabZoneSpecification::setZoneNumber()
     * @uses DocTabZoneSpecification::setHeader()
     * @uses DocTabZoneSpecification::setDataField()
     * @uses DocTabZoneSpecification::setLiteralValue()
     * @uses DocTabZoneSpecification::setJustification()
     * @param positiveInteger $zoneNumber
     * @param string $header
     * @param string $dataField
     * @param string $literalValue
     * @param string $justification
     */
    public function __construct($zoneNumber = null, $header = null, $dataField = null, $literalValue = null, $justification = null)
    {
        $this
            ->setZoneNumber($zoneNumber)
            ->setHeader($header)
            ->setDataField($dataField)
            ->setLiteralValue($literalValue)
            ->setJustification($justification);
    }
    /**
     * Get ZoneNumber value
     * @return positiveInteger|null
     */
    public function getZoneNumber()
    {
        return $this->ZoneNumber;
    }
    /**
     * Set ZoneNumber value
     * @param positiveInteger $zoneNumber
     * @return \Arkitecht\FedEx\Structs\DocTabZoneSpecification
     */
    public function setZoneNumber($zoneNumber = null)
    {
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    /**
     * Get Header value
     * @return string|null
     */
    public function getHeader()
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @param string $header
     * @return \Arkitecht\FedEx\Structs\DocTabZoneSpecification
     */
    public function setHeader($header = null)
    {
        $this->Header = $header;
        return $this;
    }
    /**
     * Get DataField value
     * @return string|null
     */
    public function getDataField()
    {
        return $this->DataField;
    }
    /**
     * Set DataField value
     * @param string $dataField
     * @return \Arkitecht\FedEx\Structs\DocTabZoneSpecification
     */
    public function setDataField($dataField = null)
    {
        $this->DataField = $dataField;
        return $this;
    }
    /**
     * Get LiteralValue value
     * @return string|null
     */
    public function getLiteralValue()
    {
        return $this->LiteralValue;
    }
    /**
     * Set LiteralValue value
     * @param string $literalValue
     * @return \Arkitecht\FedEx\Structs\DocTabZoneSpecification
     */
    public function setLiteralValue($literalValue = null)
    {
        $this->LiteralValue = $literalValue;
        return $this;
    }
    /**
     * Get Justification value
     * @return string|null
     */
    public function getJustification()
    {
        return $this->Justification;
    }
    /**
     * Set Justification value
     * @uses \Arkitecht\FedEx\Enums\DocTabZoneJustificationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DocTabZoneJustificationType::getValidValues()
     * @param string $justification
     * @return \Arkitecht\FedEx\Structs\DocTabZoneSpecification
     */
    public function setJustification($justification = null)
    {
        if (!\Arkitecht\FedEx\Enums\DocTabZoneJustificationType::valueIsValid($justification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $justification, implode(', ', \Arkitecht\FedEx\Enums\DocTabZoneJustificationType::getValidValues())), __LINE__);
        }
        $this->Justification = $justification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\DocTabZoneSpecification
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
