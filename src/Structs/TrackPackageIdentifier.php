<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackPackageIdentifier Structs
 * Meta informations extracted from the WSDL
 * - documentation: The type and value of the package identifier that is to be used to retrieve the tracking information for a package.
 * @subpackage Structs
 */
class TrackPackageIdentifier extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The type of the Value to be used to retrieve tracking information for a package (e.g. SHIPPER_REFERENCE, PURCHASE_ORDER, TRACKING_NUMBER_OR_DOORTAG, etc..) .
     * - minOccurs: 1
     * - documentation: The type of track to be performed.
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: The value to be used to retrieve tracking information for a package.
     * - minOccurs: 1
     * @var string
     */
    public $Value;
    /**
     * Constructor method for TrackPackageIdentifier
     * @uses TrackPackageIdentifier::setType()
     * @uses TrackPackageIdentifier::setValue()
     * @param string $type
     * @param string $value
     */
    public function __construct($type = null, $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Arkitecht\FedEx\Enums\TrackIdentifierType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackIdentifierType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\TrackPackageIdentifier
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackIdentifierType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\TrackIdentifierType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Arkitecht\FedEx\Structs\TrackPackageIdentifier
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackPackageIdentifier
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
