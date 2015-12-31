<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegulatoryLabelContentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies details needed to generate any label artifacts required due to regulatory requirements.
 * @subpackage Structs
 */
class RegulatoryLabelContentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The GenerationOptions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the customer requested the regulatory label to be generated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $GenerationOptions;
    /**
     * Constructor method for RegulatoryLabelContentDetail
     * @uses RegulatoryLabelContentDetail::setType()
     * @uses RegulatoryLabelContentDetail::setGenerationOptions()
     * @param string $type
     * @param string $generationOptions
     */
    public function __construct($type = null, $generationOptions = null)
    {
        $this
            ->setType($type)
            ->setGenerationOptions($generationOptions);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Arkitecht\FedEx\Enums\RegulatoryLabelType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RegulatoryLabelType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\RegulatoryLabelType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\RegulatoryLabelType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get GenerationOptions value
     * @return string|null
     */
    public function getGenerationOptions()
    {
        return $this->GenerationOptions;
    }
    /**
     * Set GenerationOptions value
     * @uses
     * \Arkitecht\FedEx\Enums\CustomerSpecifiedLabelGenerationOptionType::valueIsValid(
     * )
     * @uses
     * \Arkitecht\FedEx\Enums\CustomerSpecifiedLabelGenerationOptionType::getValidValue
     * s()
     * @param string $generationOptions
     * @return \Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail
     */
    public function setGenerationOptions($generationOptions = null)
    {
        if (!\Arkitecht\FedEx\Enums\CustomerSpecifiedLabelGenerationOptionType::valueIsValid($generationOptions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $generationOptions, implode(', ', \Arkitecht\FedEx\Enums\CustomerSpecifiedLabelGenerationOptionType::getValidValues())), __LINE__);
        }
        $this->GenerationOptions = $generationOptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail
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
