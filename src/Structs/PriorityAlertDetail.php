<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriorityAlertDetail Structs
 * @subpackage Structs
 */
class PriorityAlertDetail extends AbstractStructBase
{
    /**
     * The EnhancementTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $EnhancementTypes;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $Content;
    /**
     * Constructor method for PriorityAlertDetail
     * @uses PriorityAlertDetail::setEnhancementTypes()
     * @uses PriorityAlertDetail::setContent()
     * @param string $enhancementTypes
     * @param string $content
     */
    public function __construct($enhancementTypes = null, $content = null)
    {
        $this
            ->setEnhancementTypes($enhancementTypes)
            ->setContent($content);
    }
    /**
     * Get EnhancementTypes value
     * @return string|null
     */
    public function getEnhancementTypes()
    {
        return $this->EnhancementTypes;
    }
    /**
     * Set EnhancementTypes value
     * @uses \Arkitecht\FedEx\Enums\PriorityAlertEnhancementType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PriorityAlertEnhancementType::getValidValues()
     * @param string $enhancementTypes
     * @return \Arkitecht\FedEx\Structs\PriorityAlertDetail
     */
    public function setEnhancementTypes($enhancementTypes = null)
    {
        if (!\Arkitecht\FedEx\Enums\PriorityAlertEnhancementType::valueIsValid($enhancementTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $enhancementTypes, implode(', ', \Arkitecht\FedEx\Enums\PriorityAlertEnhancementType::getValidValues())), __LINE__);
        }
        $this->EnhancementTypes = $enhancementTypes;
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \Arkitecht\FedEx\Structs\PriorityAlertDetail
     */
    public function setContent($content = null)
    {
        $this->Content = $content;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PriorityAlertDetail
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
