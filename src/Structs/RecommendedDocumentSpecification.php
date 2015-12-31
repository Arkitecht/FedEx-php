<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendedDocumentSpecification Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about documents that are recommended to be included with the shipment for ease of shipment processing and transportation.
 * @subpackage Structs
 */
class RecommendedDocumentSpecification extends AbstractStructBase
{
    /**
     * The Types
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Type of documents that are recommended to be included with the shipment.
     * @var string
     */
    public $Types;
    /**
     * Constructor method for RecommendedDocumentSpecification
     * @uses RecommendedDocumentSpecification::setTypes()
     * @param string $types
     */
    public function __construct($types = null)
    {
        $this
            ->setTypes($types);
    }
    /**
     * Get Types value
     * @return string|null
     */
    public function getTypes()
    {
        return $this->Types;
    }
    /**
     * Set Types value
     * @uses \Arkitecht\FedEx\Enums\RecommendedDocumentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RecommendedDocumentType::getValidValues()
     * @param string $types
     * @return \Arkitecht\FedEx\Structs\RecommendedDocumentSpecification
     */
    public function setTypes($types = null)
    {
        if (!\Arkitecht\FedEx\Enums\RecommendedDocumentType::valueIsValid($types)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $types, implode(', ', \Arkitecht\FedEx\Enums\RecommendedDocumentType::getValidValues())), __LINE__);
        }
        $this->Types = $types;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RecommendedDocumentSpecification
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
