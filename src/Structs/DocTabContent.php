<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContent Structs
 * @subpackage Structs
 */
class DocTabContent extends AbstractStructBase
{
    /**
     * The DocTabContentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocTabContentType;
    /**
     * The Zone001
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DocTabContentZone001
     */
    public $Zone001;
    /**
     * The Barcoded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DocTabContentBarcoded
     */
    public $Barcoded;
    /**
     * Constructor method for DocTabContent
     * @uses DocTabContent::setDocTabContentType()
     * @uses DocTabContent::setZone001()
     * @uses DocTabContent::setBarcoded()
     * @param string $docTabContentType
     * @param \Arkitecht\FedEx\Structs\DocTabContentZone001 $zone001
     * @param \Arkitecht\FedEx\Structs\DocTabContentBarcoded $barcoded
     */
    public function __construct($docTabContentType = null, \Arkitecht\FedEx\Structs\DocTabContentZone001 $zone001 = null, \Arkitecht\FedEx\Structs\DocTabContentBarcoded $barcoded = null)
    {
        $this
            ->setDocTabContentType($docTabContentType)
            ->setZone001($zone001)
            ->setBarcoded($barcoded);
    }
    /**
     * Get DocTabContentType value
     * @return string|null
     */
    public function getDocTabContentType()
    {
        return $this->DocTabContentType;
    }
    /**
     * Set DocTabContentType value
     * @uses \Arkitecht\FedEx\Enums\DocTabContentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DocTabContentType::getValidValues()
     * @param string $docTabContentType
     * @return \Arkitecht\FedEx\Structs\DocTabContent
     */
    public function setDocTabContentType($docTabContentType = null)
    {
        if (!\Arkitecht\FedEx\Enums\DocTabContentType::valueIsValid($docTabContentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $docTabContentType, implode(', ', \Arkitecht\FedEx\Enums\DocTabContentType::getValidValues())), __LINE__);
        }
        $this->DocTabContentType = $docTabContentType;
        return $this;
    }
    /**
     * Get Zone001 value
     * @return \Arkitecht\FedEx\Structs\DocTabContentZone001|null
     */
    public function getZone001()
    {
        return $this->Zone001;
    }
    /**
     * Set Zone001 value
     * @param \Arkitecht\FedEx\Structs\DocTabContentZone001 $zone001
     * @return \Arkitecht\FedEx\Structs\DocTabContent
     */
    public function setZone001(\Arkitecht\FedEx\Structs\DocTabContentZone001 $zone001 = null)
    {
        $this->Zone001 = $zone001;
        return $this;
    }
    /**
     * Get Barcoded value
     * @return \Arkitecht\FedEx\Structs\DocTabContentBarcoded|null
     */
    public function getBarcoded()
    {
        return $this->Barcoded;
    }
    /**
     * Set Barcoded value
     * @param \Arkitecht\FedEx\Structs\DocTabContentBarcoded $barcoded
     * @return \Arkitecht\FedEx\Structs\DocTabContent
     */
    public function setBarcoded(\Arkitecht\FedEx\Structs\DocTabContentBarcoded $barcoded = null)
    {
        $this->Barcoded = $barcoded;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\DocTabContent
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
