<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CmsMetadataValue
{

    /**
     * @var int $cmsMetadataValueId
     */
    protected $cmsMetadataValueId = null;

    /**
     * @var string $valueName
     */
    protected $valueName = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\CmsMetadataKey $key
     */
    protected $key = null;

    /**
     * @param int $cmsMetadataValueId
     * @param string $valueName
     * @param \Google\AdsApi\AdManager\v201911\CmsMetadataKey $key
     */
    public function __construct($cmsMetadataValueId = null, $valueName = null, $key = null)
    {
      $this->cmsMetadataValueId = $cmsMetadataValueId;
      $this->valueName = $valueName;
      $this->key = $key;
    }

    /**
     * @return int
     */
    public function getCmsMetadataValueId()
    {
      return $this->cmsMetadataValueId;
    }

    /**
     * @param int $cmsMetadataValueId
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataValue
     */
    public function setCmsMetadataValueId($cmsMetadataValueId)
    {
      $this->cmsMetadataValueId = (!is_null($cmsMetadataValueId) && PHP_INT_SIZE === 4)
          ? floatval($cmsMetadataValueId) : $cmsMetadataValueId;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueName()
    {
      return $this->valueName;
    }

    /**
     * @param string $valueName
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataValue
     */
    public function setValueName($valueName)
    {
      $this->valueName = $valueName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CmsMetadataKey $key
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataValue
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
