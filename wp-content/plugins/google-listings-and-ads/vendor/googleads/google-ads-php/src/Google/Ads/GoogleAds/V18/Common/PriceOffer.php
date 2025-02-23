<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/common/extensions.proto

namespace Google\Ads\GoogleAds\V18\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents one price offer in a price extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.common.PriceOffer</code>
 */
class PriceOffer extends \Google\Protobuf\Internal\Message
{
    /**
     * Header text of this offer.
     *
     * Generated from protobuf field <code>optional string header = 7;</code>
     */
    protected $header = null;
    /**
     * Description text of this offer.
     *
     * Generated from protobuf field <code>optional string description = 8;</code>
     */
    protected $description = null;
    /**
     * Price value of this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.Money price = 3;</code>
     */
    protected $price = null;
    /**
     * Price unit for this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit unit = 4;</code>
     */
    protected $unit = 0;
    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 9;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 10;</code>
     */
    private $final_mobile_urls;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $header
     *           Header text of this offer.
     *     @type string $description
     *           Description text of this offer.
     *     @type \Google\Ads\GoogleAds\V18\Common\Money $price
     *           Price value of this offer.
     *     @type int $unit
     *           Price unit for this offer.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs after all cross domain redirects.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs after all cross domain redirects.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * Header text of this offer.
     *
     * Generated from protobuf field <code>optional string header = 7;</code>
     * @return string
     */
    public function getHeader()
    {
        return isset($this->header) ? $this->header : '';
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Header text of this offer.
     *
     * Generated from protobuf field <code>optional string header = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->header = $var;

        return $this;
    }

    /**
     * Description text of this offer.
     *
     * Generated from protobuf field <code>optional string description = 8;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Description text of this offer.
     *
     * Generated from protobuf field <code>optional string description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Price value of this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.Money price = 3;</code>
     * @return \Google\Ads\GoogleAds\V18\Common\Money|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function hasPrice()
    {
        return isset($this->price);
    }

    public function clearPrice()
    {
        unset($this->price);
    }

    /**
     * Price value of this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.Money price = 3;</code>
     * @param \Google\Ads\GoogleAds\V18\Common\Money $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Common\Money::class);
        $this->price = $var;

        return $this;
    }

    /**
     * Price unit for this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit unit = 4;</code>
     * @return int
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Price unit for this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit unit = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\PriceExtensionPriceUnitEnum\PriceExtensionPriceUnit::class);
        $this->unit = $var;

        return $this;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 9;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 10;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_mobile_urls = $arr;

        return $this;
    }

}

