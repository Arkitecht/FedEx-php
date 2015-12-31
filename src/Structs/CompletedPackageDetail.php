<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedPackageDetail Structs
 * @subpackage Structs
 */
class CompletedPackageDetail extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The package sequence number of this package in a multiple piece shipment.
     * - minOccurs: 0
     * @var positiveInteger
     */
    public $SequenceNumber;
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: The Tracking number and form id for this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackingId
     */
    public $TrackingIds;
    /**
     * The GroupNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $GroupNumber;
    /**
     * The OversizeClass
     * Meta informations extracted from the WSDL
     * - documentation: Oversize class for this package.
     * - minOccurs: 0
     * - documentation: The oversize class types.
     * @var string
     */
    public $OversizeClass;
    /**
     * The PackageRating
     * Meta informations extracted from the WSDL
     * - documentation: All package-level rating data for this package, which may include data for multiple rate types.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PackageRating
     */
    public $PackageRating;
    /**
     * The OperationalDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Package-level data required for labeling and/or movement.
     * @var \Arkitecht\FedEx\Structs\PackageOperationalDetail
     */
    public $OperationalDetail;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - documentation: The label image or printer commands to print the label.
     * - minOccurs: 0
     * - documentation: All package-level shipping documents (other than labels and barcodes).
     * @var \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public $Label;
    /**
     * The PackageDocuments
     * Meta informations extracted from the WSDL
     * - documentation: All package-level shipping documents (other than labels and barcodes). For use in loads after January, 2008.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: All package-level shipping documents (other than labels and barcodes).
     * @var \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public $PackageDocuments;
    /**
     * The CodReturnDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the information associated with this package that has COD special service in a ground shipment.
     * - minOccurs: 0
     * - documentation: Specifies the information associated with a package that has COD special service in a ground shipment.
     * @var \Arkitecht\FedEx\Structs\CodReturnPackageDetail
     */
    public $CodReturnDetail;
    /**
     * The SignatureOption
     * Meta informations extracted from the WSDL
     * - documentation: Actual signature option applied, to allow for cases in which the original value conflicted with other service features in the shipment.
     * - minOccurs: 0
     * - documentation: Identifies the delivery signature services options offered by FedEx.
     * @var string
     */
    public $SignatureOption;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $DryIceWeight;
    /**
     * The HazardousPackageDetail
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     * - minOccurs: 0
     * - documentation: Completed package-level hazardous commodity information for a single package.
     * @var \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
     */
    public $HazardousPackageDetail;
    /**
     * Constructor method for CompletedPackageDetail
     * @uses CompletedPackageDetail::setSequenceNumber()
     * @uses CompletedPackageDetail::setTrackingIds()
     * @uses CompletedPackageDetail::setGroupNumber()
     * @uses CompletedPackageDetail::setOversizeClass()
     * @uses CompletedPackageDetail::setPackageRating()
     * @uses CompletedPackageDetail::setOperationalDetail()
     * @uses CompletedPackageDetail::setLabel()
     * @uses CompletedPackageDetail::setPackageDocuments()
     * @uses CompletedPackageDetail::setCodReturnDetail()
     * @uses CompletedPackageDetail::setSignatureOption()
     * @uses CompletedPackageDetail::setDryIceWeight()
     * @uses CompletedPackageDetail::setHazardousPackageDetail()
     * @param positiveInteger $sequenceNumber
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingIds
     * @param nonNegativeInteger $groupNumber
     * @param string $oversizeClass
     * @param \Arkitecht\FedEx\Structs\PackageRating $packageRating
     * @param \Arkitecht\FedEx\Structs\PackageOperationalDetail $operationalDetail
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $label
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $packageDocuments
     * @param \Arkitecht\FedEx\Structs\CodReturnPackageDetail $codReturnDetail
     * @param string $signatureOption
     * @param \Arkitecht\FedEx\Structs\Weight $dryIceWeight
     * @param \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
     * $hazardousPackageDetail
     */
    public function __construct($sequenceNumber = null, \Arkitecht\FedEx\Structs\TrackingId $trackingIds = null, $groupNumber = null, $oversizeClass = null, \Arkitecht\FedEx\Structs\PackageRating $packageRating = null, \Arkitecht\FedEx\Structs\PackageOperationalDetail $operationalDetail = null, \Arkitecht\FedEx\Structs\ShippingDocument $label = null, \Arkitecht\FedEx\Structs\ShippingDocument $packageDocuments = null, \Arkitecht\FedEx\Structs\CodReturnPackageDetail $codReturnDetail = null, $signatureOption = null, \Arkitecht\FedEx\Structs\Weight $dryIceWeight = null, \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail $hazardousPackageDetail = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setTrackingIds($trackingIds)
            ->setGroupNumber($groupNumber)
            ->setOversizeClass($oversizeClass)
            ->setPackageRating($packageRating)
            ->setOperationalDetail($operationalDetail)
            ->setLabel($label)
            ->setPackageDocuments($packageDocuments)
            ->setCodReturnDetail($codReturnDetail)
            ->setSignatureOption($signatureOption)
            ->setDryIceWeight($dryIceWeight)
            ->setHazardousPackageDetail($hazardousPackageDetail);
    }
    /**
     * Get SequenceNumber value
     * @return positiveInteger|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param positiveInteger $sequenceNumber
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get TrackingIds value
     * @return \Arkitecht\FedEx\Structs\TrackingId|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingIds
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setTrackingIds(\Arkitecht\FedEx\Structs\TrackingId $trackingIds = null)
    {
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Get GroupNumber value
     * @return nonNegativeInteger|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    /**
     * Set GroupNumber value
     * @param nonNegativeInteger $groupNumber
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setGroupNumber($groupNumber = null)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    /**
     * Get OversizeClass value
     * @return string|null
     */
    public function getOversizeClass()
    {
        return $this->OversizeClass;
    }
    /**
     * Set OversizeClass value
     * @uses \Arkitecht\FedEx\Enums\OversizeClassType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\OversizeClassType::getValidValues()
     * @param string $oversizeClass
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setOversizeClass($oversizeClass = null)
    {
        if (!\Arkitecht\FedEx\Enums\OversizeClassType::valueIsValid($oversizeClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oversizeClass, implode(', ', \Arkitecht\FedEx\Enums\OversizeClassType::getValidValues())), __LINE__);
        }
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    /**
     * Get PackageRating value
     * @return \Arkitecht\FedEx\Structs\PackageRating|null
     */
    public function getPackageRating()
    {
        return $this->PackageRating;
    }
    /**
     * Set PackageRating value
     * @param \Arkitecht\FedEx\Structs\PackageRating $packageRating
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setPackageRating(\Arkitecht\FedEx\Structs\PackageRating $packageRating = null)
    {
        $this->PackageRating = $packageRating;
        return $this;
    }
    /**
     * Get OperationalDetail value
     * @return \Arkitecht\FedEx\Structs\PackageOperationalDetail|null
     */
    public function getOperationalDetail()
    {
        return $this->OperationalDetail;
    }
    /**
     * Set OperationalDetail value
     * @param \Arkitecht\FedEx\Structs\PackageOperationalDetail $operationalDetail
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setOperationalDetail(\Arkitecht\FedEx\Structs\PackageOperationalDetail $operationalDetail = null)
    {
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    /**
     * Get Label value
     * @return \Arkitecht\FedEx\Structs\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $label
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setLabel(\Arkitecht\FedEx\Structs\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Get PackageDocuments value
     * @return \Arkitecht\FedEx\Structs\ShippingDocument|null
     */
    public function getPackageDocuments()
    {
        return $this->PackageDocuments;
    }
    /**
     * Set PackageDocuments value
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $packageDocuments
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setPackageDocuments(\Arkitecht\FedEx\Structs\ShippingDocument $packageDocuments = null)
    {
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    /**
     * Get CodReturnDetail value
     * @return \Arkitecht\FedEx\Structs\CodReturnPackageDetail|null
     */
    public function getCodReturnDetail()
    {
        return $this->CodReturnDetail;
    }
    /**
     * Set CodReturnDetail value
     * @param \Arkitecht\FedEx\Structs\CodReturnPackageDetail $codReturnDetail
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setCodReturnDetail(\Arkitecht\FedEx\Structs\CodReturnPackageDetail $codReturnDetail = null)
    {
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    /**
     * Get SignatureOption value
     * @return string|null
     */
    public function getSignatureOption()
    {
        return $this->SignatureOption;
    }
    /**
     * Set SignatureOption value
     * @uses \Arkitecht\FedEx\Enums\SignatureOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SignatureOptionType::getValidValues()
     * @param string $signatureOption
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setSignatureOption($signatureOption = null)
    {
        if (!\Arkitecht\FedEx\Enums\SignatureOptionType::valueIsValid($signatureOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $signatureOption, implode(', ', \Arkitecht\FedEx\Enums\SignatureOptionType::getValidValues())), __LINE__);
        }
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $dryIceWeight
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setDryIceWeight(\Arkitecht\FedEx\Structs\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Get HazardousPackageDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail|null
     */
    public function getHazardousPackageDetail()
    {
        return $this->HazardousPackageDetail;
    }
    /**
     * Set HazardousPackageDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail
     * $hazardousPackageDetail
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public function setHazardousPackageDetail(\Arkitecht\FedEx\Structs\CompletedHazardousPackageDetail $hazardousPackageDetail = null)
    {
        $this->HazardousPackageDetail = $hazardousPackageDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail
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
