<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageOperationalDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Package-level data required for labeling and/or movement.
 * @subpackage Structs
 */
class PackageOperationalDetail extends AbstractStructBase
{
    /**
     * The AstraHandlingText
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text for pre-January 2011 clients.
     * - minOccurs: 0
     * @var string
     */
    public $AstraHandlingText;
    /**
     * The OperationalInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable content for use on a label.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\OperationalInstruction
     */
    public $OperationalInstructions;
    /**
     * The Barcodes
     * Meta informations extracted from the WSDL
     * - documentation: The operational barcodes pertaining to the current package.
     * - minOccurs: 0
     * - documentation: Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     * @var \Arkitecht\FedEx\Structs\PackageBarcodes
     */
    public $Barcodes;
    /**
     * The GroundServiceCode
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx internal code that represents the service and/or features of service for the current package moving under a FedEx Ground service.
     * - minOccurs: 0
     * @var string
     */
    public $GroundServiceCode;
    /**
     * Constructor method for PackageOperationalDetail
     * @uses PackageOperationalDetail::setAstraHandlingText()
     * @uses PackageOperationalDetail::setOperationalInstructions()
     * @uses PackageOperationalDetail::setBarcodes()
     * @uses PackageOperationalDetail::setGroundServiceCode()
     * @param string $astraHandlingText
     * @param \Arkitecht\FedEx\Structs\OperationalInstruction $operationalInstructions
     * @param \Arkitecht\FedEx\Structs\PackageBarcodes $barcodes
     * @param string $groundServiceCode
     */
    public function __construct($astraHandlingText = null, \Arkitecht\FedEx\Structs\OperationalInstruction $operationalInstructions = null, \Arkitecht\FedEx\Structs\PackageBarcodes $barcodes = null, $groundServiceCode = null)
    {
        $this
            ->setAstraHandlingText($astraHandlingText)
            ->setOperationalInstructions($operationalInstructions)
            ->setBarcodes($barcodes)
            ->setGroundServiceCode($groundServiceCode);
    }
    /**
     * Get AstraHandlingText value
     * @return string|null
     */
    public function getAstraHandlingText()
    {
        return $this->AstraHandlingText;
    }
    /**
     * Set AstraHandlingText value
     * @param string $astraHandlingText
     * @return \Arkitecht\FedEx\Structs\PackageOperationalDetail
     */
    public function setAstraHandlingText($astraHandlingText = null)
    {
        $this->AstraHandlingText = $astraHandlingText;
        return $this;
    }
    /**
     * Get OperationalInstructions value
     * @return \Arkitecht\FedEx\Structs\OperationalInstruction|null
     */
    public function getOperationalInstructions()
    {
        return $this->OperationalInstructions;
    }
    /**
     * Set OperationalInstructions value
     * @param \Arkitecht\FedEx\Structs\OperationalInstruction $operationalInstructions
     * @return \Arkitecht\FedEx\Structs\PackageOperationalDetail
     */
    public function setOperationalInstructions(\Arkitecht\FedEx\Structs\OperationalInstruction $operationalInstructions = null)
    {
        $this->OperationalInstructions = $operationalInstructions;
        return $this;
    }
    /**
     * Get Barcodes value
     * @return \Arkitecht\FedEx\Structs\PackageBarcodes|null
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    /**
     * Set Barcodes value
     * @param \Arkitecht\FedEx\Structs\PackageBarcodes $barcodes
     * @return \Arkitecht\FedEx\Structs\PackageOperationalDetail
     */
    public function setBarcodes(\Arkitecht\FedEx\Structs\PackageBarcodes $barcodes = null)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    /**
     * Get GroundServiceCode value
     * @return string|null
     */
    public function getGroundServiceCode()
    {
        return $this->GroundServiceCode;
    }
    /**
     * Set GroundServiceCode value
     * @param string $groundServiceCode
     * @return \Arkitecht\FedEx\Structs\PackageOperationalDetail
     */
    public function setGroundServiceCode($groundServiceCode = null)
    {
        $this->GroundServiceCode = $groundServiceCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PackageOperationalDetail
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
