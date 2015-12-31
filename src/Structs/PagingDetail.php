<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagingDetail Structs
 * @subpackage Structs
 */
class PagingDetail extends AbstractStructBase
{
    /**
     * The PagingToken
     * Meta informations extracted from the WSDL
     * - documentation: When the MoreData field = true in a TrackReply the PagingToken must be sent in the subsequent TrackRequest to retrieve the next page of data.
     * - minOccurs: 0
     * @var string
     */
    public $PagingToken;
    /**
     * The NumberOfResultsPerPage
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of results to display per page when the there is more than one page in the subsequent TrackReply.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $NumberOfResultsPerPage;
    /**
     * Constructor method for PagingDetail
     * @uses PagingDetail::setPagingToken()
     * @uses PagingDetail::setNumberOfResultsPerPage()
     * @param string $pagingToken
     * @param nonNegativeInteger $numberOfResultsPerPage
     */
    public function __construct($pagingToken = null, $numberOfResultsPerPage = null)
    {
        $this
            ->setPagingToken($pagingToken)
            ->setNumberOfResultsPerPage($numberOfResultsPerPage);
    }
    /**
     * Get PagingToken value
     * @return string|null
     */
    public function getPagingToken()
    {
        return $this->PagingToken;
    }
    /**
     * Set PagingToken value
     * @param string $pagingToken
     * @return \Arkitecht\FedEx\Structs\PagingDetail
     */
    public function setPagingToken($pagingToken = null)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    /**
     * Get NumberOfResultsPerPage value
     * @return nonNegativeInteger|null
     */
    public function getNumberOfResultsPerPage()
    {
        return $this->NumberOfResultsPerPage;
    }
    /**
     * Set NumberOfResultsPerPage value
     * @param nonNegativeInteger $numberOfResultsPerPage
     * @return \Arkitecht\FedEx\Structs\PagingDetail
     */
    public function setNumberOfResultsPerPage($numberOfResultsPerPage = null)
    {
        $this->NumberOfResultsPerPage = $numberOfResultsPerPage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PagingDetail
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
