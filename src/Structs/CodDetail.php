<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 * @subpackage Structs
 */
class CodDetail extends AbstractStructBase
{
    /**
     * The CodCollectionAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $CodCollectionAmount;
    /**
     * The AddTransportationChargesDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details of the charges are to be added to the COD collect amount.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail
     */
    public $AddTransportationChargesDetail;
    /**
     * The CollectionType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of funds FedEx should collect upon package delivery
     * - minOccurs: 0
     * - documentation: Identifies the type of funds FedEx should collect upon shipment delivery.
     * @var string
     */
    public $CollectionType;
    /**
     * The CodRecipient
     * Meta informations extracted from the WSDL
     * - documentation: For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $CodRecipient;
    /**
     * The FinancialInstitutionContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: When the FedEx COD payment type is not CASH, indicates the contact and address of the financial institution used to service the payment of the COD.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $FinancialInstitutionContactAndAddress;
    /**
     * The RemitToName
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name of person or company receiving the secured/unsecured funds payment
     * - minOccurs: 0
     * @var string
     */
    public $RemitToName;
    /**
     * The ReferenceIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which type of reference information to include on the COD return shipping label.
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceIndicator;
    /**
     * The ReturnTrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Only used with multi-piece COD shipments sent in multiple transactions. Required on last transaction only.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackingId
     */
    public $ReturnTrackingId;
    /**
     * Constructor method for CodDetail
     * @uses CodDetail::setCodCollectionAmount()
     * @uses CodDetail::setAddTransportationChargesDetail()
     * @uses CodDetail::setCollectionType()
     * @uses CodDetail::setCodRecipient()
     * @uses CodDetail::setFinancialInstitutionContactAndAddress()
     * @uses CodDetail::setRemitToName()
     * @uses CodDetail::setReferenceIndicator()
     * @uses CodDetail::setReturnTrackingId()
     * @param \Arkitecht\FedEx\Structs\Money $codCollectionAmount
     * @param \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail
     * $addTransportationChargesDetail
     * @param string $collectionType
     * @param \Arkitecht\FedEx\Structs\Party $codRecipient
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress
     * $financialInstitutionContactAndAddress
     * @param string $remitToName
     * @param string $referenceIndicator
     * @param \Arkitecht\FedEx\Structs\TrackingId $returnTrackingId
     */
    public function __construct(\Arkitecht\FedEx\Structs\Money $codCollectionAmount = null, \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail $addTransportationChargesDetail = null, $collectionType = null, \Arkitecht\FedEx\Structs\Party $codRecipient = null, \Arkitecht\FedEx\Structs\ContactAndAddress $financialInstitutionContactAndAddress = null, $remitToName = null, $referenceIndicator = null, \Arkitecht\FedEx\Structs\TrackingId $returnTrackingId = null)
    {
        $this
            ->setCodCollectionAmount($codCollectionAmount)
            ->setAddTransportationChargesDetail($addTransportationChargesDetail)
            ->setCollectionType($collectionType)
            ->setCodRecipient($codRecipient)
            ->setFinancialInstitutionContactAndAddress($financialInstitutionContactAndAddress)
            ->setRemitToName($remitToName)
            ->setReferenceIndicator($referenceIndicator)
            ->setReturnTrackingId($returnTrackingId);
    }
    /**
     * Get CodCollectionAmount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getCodCollectionAmount()
    {
        return $this->CodCollectionAmount;
    }
    /**
     * Set CodCollectionAmount value
     * @param \Arkitecht\FedEx\Structs\Money $codCollectionAmount
     * @return \Arkitecht\FedEx\Structs\CodDetail
     */
    public function setCodCollectionAmount(\Arkitecht\FedEx\Structs\Money $codCollectionAmount = null)
    {
        $this->CodCollectionAmount = $codCollectionAmount;
        return $this;
    }
    /**
     * Get AddTransportationChargesDetail value
     * @return \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail|null
     */
    public function getAddTransportationChargesDetail()
    {
        return $this->AddTransportationChargesDetail;
    }
    /**
     * Set AddTransportationChargesDetail value
     * @param \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail
     * $addTransportationChargesDetail
     * @return \Arkitecht\FedEx\Structs\CodDetail
     */
    public function setAddTransportationChargesDetail(\Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail $addTransportationChargesDetail = null)
    {
        $this->AddTransportationChargesDetail = $addTransportationChargesDetail;
        return $this;
    }
    /**
     * Get CollectionType value
     * @return string|null
     */
    public function getCollectionType()
    {
        return $this->CollectionType;
    }
    /**
     * Set CollectionType value
     * @uses \Arkitecht\FedEx\Enums\CodCollectionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CodCollectionType::getValidValues()
     * @param string $collectionType
     * @return \Arkitecht\FedEx\Structs\CodDetail
     */
    public function setCollectionType($collectionType = null)
    {
        if (!\Arkitecht\FedEx\Enums\CodCollectionType::valueIsValid($collectionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $collectionType, implode(', ', \Arkitecht\FedEx\Enums\CodCollectionType::getValidValues())), __LINE__);
        }
        $this->CollectionType = $collectionType;
        return $this;
    }
    /**
     * Get CodRecipient value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getCodRecipient()
    {
        return $this->CodRecipient;
    }
    /**
     * Set CodRecipient value
     * @param \Arkitecht\FedEx\Structs\Party $codRecipient
     * @return \Arkitecht\FedEx\Structs\CodDetail
     */
    public function setCodRecipient(\Arkitecht\FedEx\Structs\Party $codRecipient = null)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    /**
     * Get FinancialInstitutionContactAndAddress value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getFinancialInstitutionContactAndAddress()
    {
        return $this->FinancialInstitutionContactAndAddress;
    }
    /**
     * Set FinancialInstitutionContactAndAddress value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress
     * $financialInstitutionContactAndAddress
     * @return \Arkitecht\FedEx\Structs\CodDetail
     */
    public function setFinancialInstitutionContactAndAddress(\Arkitecht\FedEx\Structs\ContactAndAddress $financialInstitutionContactAndAddress = null)
    {
        $this->FinancialInstitutionContactAndAddress = $financialInstitutionContactAndAddress;
        return $this;
    }
    /**
     * Get RemitToName value
     * @return string|null
     */
    public function getRemitToName()
    {
        return $this->RemitToName;
    }
    /**
     * Set RemitToName value
     * @param string $remitToName
     * @return \Arkitecht\FedEx\Structs\CodDetail
     */
    public function setRemitToName($remitToName = null)
    {
        $this->RemitToName = $remitToName;
        return $this;
    }
    /**
     * Get ReferenceIndicator value
     * @return string|null
     */
    public function getReferenceIndicator()
    {
        return $this->ReferenceIndicator;
    }
    /**
     * Set ReferenceIndicator value
     * @uses \Arkitecht\FedEx\Enums\CodReturnReferenceIndicatorType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CodReturnReferenceIndicatorType::getValidValues()
     * @param string $referenceIndicator
     * @return \Arkitecht\FedEx\Structs\CodDetail
     */
    public function setReferenceIndicator($referenceIndicator = null)
    {
        if (!\Arkitecht\FedEx\Enums\CodReturnReferenceIndicatorType::valueIsValid($referenceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $referenceIndicator, implode(', ', \Arkitecht\FedEx\Enums\CodReturnReferenceIndicatorType::getValidValues())), __LINE__);
        }
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    /**
     * Get ReturnTrackingId value
     * @return \Arkitecht\FedEx\Structs\TrackingId|null
     */
    public function getReturnTrackingId()
    {
        return $this->ReturnTrackingId;
    }
    /**
     * Set ReturnTrackingId value
     * @param \Arkitecht\FedEx\Structs\TrackingId $returnTrackingId
     * @return \Arkitecht\FedEx\Structs\CodDetail
     */
    public function setReturnTrackingId(\Arkitecht\FedEx\Structs\TrackingId $returnTrackingId = null)
    {
        $this->ReturnTrackingId = $returnTrackingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CodDetail
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
