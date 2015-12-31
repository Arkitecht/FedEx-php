<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedHazardousShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Computed shipment level hazardous commodity information.
 * @subpackage Structs
 */
class CompletedHazardousShipmentDetail extends AbstractStructBase
{
    /**
     * The HazardousSummaryDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CompletedHazardousSummaryDetail
     */
    public $HazardousSummaryDetail;
    /**
     * The DryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Shipment-level totals of dry ice data across all packages.
     * @var \Arkitecht\FedEx\Structs\ShipmentDryIceDetail
     */
    public $DryIceDetail;
    /**
     * The AdrLicense
     * Meta informations extracted from the WSDL
     * - documentation: This contains the ADR License information, which identifies the license number and ADR category under which the customer is allowed to ship.
     * - minOccurs: 0
     * - documentation: Specifies the details around the ADR license required for shipping.
     * @var \Arkitecht\FedEx\Structs\AdrLicenseDetail
     */
    public $AdrLicense;
    /**
     * Constructor method for CompletedHazardousShipmentDetail
     * @uses CompletedHazardousShipmentDetail::setHazardousSummaryDetail()
     * @uses CompletedHazardousShipmentDetail::setDryIceDetail()
     * @uses CompletedHazardousShipmentDetail::setAdrLicense()
     * @param \Arkitecht\FedEx\Structs\CompletedHazardousSummaryDetail
     * $hazardousSummaryDetail
     * @param \Arkitecht\FedEx\Structs\ShipmentDryIceDetail $dryIceDetail
     * @param \Arkitecht\FedEx\Structs\AdrLicenseDetail $adrLicense
     */
    public function __construct(\Arkitecht\FedEx\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail = null, \Arkitecht\FedEx\Structs\ShipmentDryIceDetail $dryIceDetail = null, \Arkitecht\FedEx\Structs\AdrLicenseDetail $adrLicense = null)
    {
        $this
            ->setHazardousSummaryDetail($hazardousSummaryDetail)
            ->setDryIceDetail($dryIceDetail)
            ->setAdrLicense($adrLicense);
    }
    /**
     * Get HazardousSummaryDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousSummaryDetail|null
     */
    public function getHazardousSummaryDetail()
    {
        return $this->HazardousSummaryDetail;
    }
    /**
     * Set HazardousSummaryDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedHazardousSummaryDetail
     * $hazardousSummaryDetail
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail
     */
    public function setHazardousSummaryDetail(\Arkitecht\FedEx\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail = null)
    {
        $this->HazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    /**
     * Get DryIceDetail value
     * @return \Arkitecht\FedEx\Structs\ShipmentDryIceDetail|null
     */
    public function getDryIceDetail()
    {
        return $this->DryIceDetail;
    }
    /**
     * Set DryIceDetail value
     * @param \Arkitecht\FedEx\Structs\ShipmentDryIceDetail $dryIceDetail
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail
     */
    public function setDryIceDetail(\Arkitecht\FedEx\Structs\ShipmentDryIceDetail $dryIceDetail = null)
    {
        $this->DryIceDetail = $dryIceDetail;
        return $this;
    }
    /**
     * Get AdrLicense value
     * @return \Arkitecht\FedEx\Structs\AdrLicenseDetail|null
     */
    public function getAdrLicense()
    {
        return $this->AdrLicense;
    }
    /**
     * Set AdrLicense value
     * @param \Arkitecht\FedEx\Structs\AdrLicenseDetail $adrLicense
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail
     */
    public function setAdrLicense(\Arkitecht\FedEx\Structs\AdrLicenseDetail $adrLicense = null)
    {
        $this->AdrLicense = $adrLicense;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail
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
