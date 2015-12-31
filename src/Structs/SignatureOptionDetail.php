<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureOptionDetail Structs
 * @subpackage Structs
 */
class SignatureOptionDetail extends AbstractStructBase
{
    /**
     * The OptionType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OptionType;
    /**
     * The SignatureReleaseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SignatureReleaseNumber;
    /**
     * Constructor method for SignatureOptionDetail
     * @uses SignatureOptionDetail::setOptionType()
     * @uses SignatureOptionDetail::setSignatureReleaseNumber()
     * @param string $optionType
     * @param string $signatureReleaseNumber
     */
    public function __construct($optionType = null, $signatureReleaseNumber = null)
    {
        $this
            ->setOptionType($optionType)
            ->setSignatureReleaseNumber($signatureReleaseNumber);
    }
    /**
     * Get OptionType value
     * @return string|null
     */
    public function getOptionType()
    {
        return $this->OptionType;
    }
    /**
     * Set OptionType value
     * @uses \Arkitecht\FedEx\Enums\SignatureOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SignatureOptionType::getValidValues()
     * @param string $optionType
     * @return \Arkitecht\FedEx\Structs\SignatureOptionDetail
     */
    public function setOptionType($optionType = null)
    {
        if (!\Arkitecht\FedEx\Enums\SignatureOptionType::valueIsValid($optionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $optionType, implode(', ', \Arkitecht\FedEx\Enums\SignatureOptionType::getValidValues())), __LINE__);
        }
        $this->OptionType = $optionType;
        return $this;
    }
    /**
     * Get SignatureReleaseNumber value
     * @return string|null
     */
    public function getSignatureReleaseNumber()
    {
        return $this->SignatureReleaseNumber;
    }
    /**
     * Set SignatureReleaseNumber value
     * @param string $signatureReleaseNumber
     * @return \Arkitecht\FedEx\Structs\SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber = null)
    {
        $this->SignatureReleaseNumber = $signatureReleaseNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\SignatureOptionDetail
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
