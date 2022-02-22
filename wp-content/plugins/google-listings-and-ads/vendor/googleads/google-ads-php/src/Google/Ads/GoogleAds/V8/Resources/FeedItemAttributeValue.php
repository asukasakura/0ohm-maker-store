<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/feed_item.proto

namespace Google\Ads\GoogleAds\V8\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed item attribute value.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.resources.FeedItemAttributeValue</code>
 */
class FeedItemAttributeValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Id of the feed attribute for which the value is associated with.
     *
     * Generated from protobuf field <code>int64 feed_attribute_id = 11;</code>
     */
    protected $feed_attribute_id = null;
    /**
     * Int64 value. Should be set if feed_attribute_id refers to a feed attribute
     * of type INT64.
     *
     * Generated from protobuf field <code>int64 integer_value = 12;</code>
     */
    protected $integer_value = null;
    /**
     * Bool value. Should be set if feed_attribute_id refers to a feed attribute
     * of type BOOLEAN.
     *
     * Generated from protobuf field <code>bool boolean_value = 13;</code>
     */
    protected $boolean_value = null;
    /**
     * String value. Should be set if feed_attribute_id refers to a feed attribute
     * of type STRING, URL or DATE_TIME.
     * For STRING the maximum length is 1500 characters. For URL the maximum
     * length is 2076 characters. For DATE_TIME the string must be in the format
     * "YYYYMMDD HHMMSS".
     *
     * Generated from protobuf field <code>string string_value = 14;</code>
     */
    protected $string_value = null;
    /**
     * Double value. Should be set if feed_attribute_id refers to a feed attribute
     * of type DOUBLE.
     *
     * Generated from protobuf field <code>double double_value = 15;</code>
     */
    protected $double_value = null;
    /**
     * Price value. Should be set if feed_attribute_id refers to a feed attribute
     * of type PRICE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.Money price_value = 6;</code>
     */
    protected $price_value = null;
    /**
     * Repeated int64 value. Should be set if feed_attribute_id refers to a feed
     * attribute of type INT64_LIST.
     *
     * Generated from protobuf field <code>repeated int64 integer_values = 16;</code>
     */
    private $integer_values;
    /**
     * Repeated bool value. Should be set if feed_attribute_id refers to a feed
     * attribute of type BOOLEAN_LIST.
     *
     * Generated from protobuf field <code>repeated bool boolean_values = 17;</code>
     */
    private $boolean_values;
    /**
     * Repeated string value. Should be set if feed_attribute_id refers to a feed
     * attribute of type STRING_LIST, URL_LIST or DATE_TIME_LIST.
     * For STRING_LIST and URL_LIST the total size of the list in bytes may not
     * exceed 3000. For DATE_TIME_LIST the number of elements may not exceed 200.
     * For STRING_LIST the maximum length of each string element is 1500
     * characters. For URL_LIST the maximum length is 2076 characters. For
     * DATE_TIME the format of the string must be the same as start and end time
     * for the feed item.
     *
     * Generated from protobuf field <code>repeated string string_values = 18;</code>
     */
    private $string_values;
    /**
     * Repeated double value. Should be set if feed_attribute_id refers to a feed
     * attribute of type DOUBLE_LIST.
     *
     * Generated from protobuf field <code>repeated double double_values = 19;</code>
     */
    private $double_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $feed_attribute_id
     *           Id of the feed attribute for which the value is associated with.
     *     @type int|string $integer_value
     *           Int64 value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type INT64.
     *     @type bool $boolean_value
     *           Bool value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type BOOLEAN.
     *     @type string $string_value
     *           String value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type STRING, URL or DATE_TIME.
     *           For STRING the maximum length is 1500 characters. For URL the maximum
     *           length is 2076 characters. For DATE_TIME the string must be in the format
     *           "YYYYMMDD HHMMSS".
     *     @type float $double_value
     *           Double value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type DOUBLE.
     *     @type \Google\Ads\GoogleAds\V8\Common\Money $price_value
     *           Price value. Should be set if feed_attribute_id refers to a feed attribute
     *           of type PRICE.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $integer_values
     *           Repeated int64 value. Should be set if feed_attribute_id refers to a feed
     *           attribute of type INT64_LIST.
     *     @type bool[]|\Google\Protobuf\Internal\RepeatedField $boolean_values
     *           Repeated bool value. Should be set if feed_attribute_id refers to a feed
     *           attribute of type BOOLEAN_LIST.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $string_values
     *           Repeated string value. Should be set if feed_attribute_id refers to a feed
     *           attribute of type STRING_LIST, URL_LIST or DATE_TIME_LIST.
     *           For STRING_LIST and URL_LIST the total size of the list in bytes may not
     *           exceed 3000. For DATE_TIME_LIST the number of elements may not exceed 200.
     *           For STRING_LIST the maximum length of each string element is 1500
     *           characters. For URL_LIST the maximum length is 2076 characters. For
     *           DATE_TIME the format of the string must be the same as start and end time
     *           for the feed item.
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $double_values
     *           Repeated double value. Should be set if feed_attribute_id refers to a feed
     *           attribute of type DOUBLE_LIST.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Resources\FeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Id of the feed attribute for which the value is associated with.
     *
     * Generated from protobuf field <code>int64 feed_attribute_id = 11;</code>
     * @return int|string
     */
    public function getFeedAttributeId()
    {
        return isset($this->feed_attribute_id) ? $this->feed_attribute_id : 0;
    }

    public function hasFeedAttributeId()
    {
        return isset($this->feed_attribute_id);
    }

    public function clearFeedAttributeId()
    {
        unset($this->feed_attribute_id);
    }

    /**
     * Id of the feed attribute for which the value is associated with.
     *
     * Generated from protobuf field <code>int64 feed_attribute_id = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeedAttributeId($var)
    {
        GPBUtil::checkInt64($var);
        $this->feed_attribute_id = $var;

        return $this;
    }

    /**
     * Int64 value. Should be set if feed_attribute_id refers to a feed attribute
     * of type INT64.
     *
     * Generated from protobuf field <code>int64 integer_value = 12;</code>
     * @return int|string
     */
    public function getIntegerValue()
    {
        return isset($this->integer_value) ? $this->integer_value : 0;
    }

    public function hasIntegerValue()
    {
        return isset($this->integer_value);
    }

    public function clearIntegerValue()
    {
        unset($this->integer_value);
    }

    /**
     * Int64 value. Should be set if feed_attribute_id refers to a feed attribute
     * of type INT64.
     *
     * Generated from protobuf field <code>int64 integer_value = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntegerValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->integer_value = $var;

        return $this;
    }

    /**
     * Bool value. Should be set if feed_attribute_id refers to a feed attribute
     * of type BOOLEAN.
     *
     * Generated from protobuf field <code>bool boolean_value = 13;</code>
     * @return bool
     */
    public function getBooleanValue()
    {
        return isset($this->boolean_value) ? $this->boolean_value : false;
    }

    public function hasBooleanValue()
    {
        return isset($this->boolean_value);
    }

    public function clearBooleanValue()
    {
        unset($this->boolean_value);
    }

    /**
     * Bool value. Should be set if feed_attribute_id refers to a feed attribute
     * of type BOOLEAN.
     *
     * Generated from protobuf field <code>bool boolean_value = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setBooleanValue($var)
    {
        GPBUtil::checkBool($var);
        $this->boolean_value = $var;

        return $this;
    }

    /**
     * String value. Should be set if feed_attribute_id refers to a feed attribute
     * of type STRING, URL or DATE_TIME.
     * For STRING the maximum length is 1500 characters. For URL the maximum
     * length is 2076 characters. For DATE_TIME the string must be in the format
     * "YYYYMMDD HHMMSS".
     *
     * Generated from protobuf field <code>string string_value = 14;</code>
     * @return string
     */
    public function getStringValue()
    {
        return isset($this->string_value) ? $this->string_value : '';
    }

    public function hasStringValue()
    {
        return isset($this->string_value);
    }

    public function clearStringValue()
    {
        unset($this->string_value);
    }

    /**
     * String value. Should be set if feed_attribute_id refers to a feed attribute
     * of type STRING, URL or DATE_TIME.
     * For STRING the maximum length is 1500 characters. For URL the maximum
     * length is 2076 characters. For DATE_TIME the string must be in the format
     * "YYYYMMDD HHMMSS".
     *
     * Generated from protobuf field <code>string string_value = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->string_value = $var;

        return $this;
    }

    /**
     * Double value. Should be set if feed_attribute_id refers to a feed attribute
     * of type DOUBLE.
     *
     * Generated from protobuf field <code>double double_value = 15;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return isset($this->double_value) ? $this->double_value : 0.0;
    }

    public function hasDoubleValue()
    {
        return isset($this->double_value);
    }

    public function clearDoubleValue()
    {
        unset($this->double_value);
    }

    /**
     * Double value. Should be set if feed_attribute_id refers to a feed attribute
     * of type DOUBLE.
     *
     * Generated from protobuf field <code>double double_value = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->double_value = $var;

        return $this;
    }

    /**
     * Price value. Should be set if feed_attribute_id refers to a feed attribute
     * of type PRICE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.Money price_value = 6;</code>
     * @return \Google\Ads\GoogleAds\V8\Common\Money|null
     */
    public function getPriceValue()
    {
        return isset($this->price_value) ? $this->price_value : null;
    }

    public function hasPriceValue()
    {
        return isset($this->price_value);
    }

    public function clearPriceValue()
    {
        unset($this->price_value);
    }

    /**
     * Price value. Should be set if feed_attribute_id refers to a feed attribute
     * of type PRICE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.Money price_value = 6;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\Money $var
     * @return $this
     */
    public function setPriceValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\Money::class);
        $this->price_value = $var;

        return $this;
    }

    /**
     * Repeated int64 value. Should be set if feed_attribute_id refers to a feed
     * attribute of type INT64_LIST.
     *
     * Generated from protobuf field <code>repeated int64 integer_values = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIntegerValues()
    {
        return $this->integer_values;
    }

    /**
     * Repeated int64 value. Should be set if feed_attribute_id refers to a feed
     * attribute of type INT64_LIST.
     *
     * Generated from protobuf field <code>repeated int64 integer_values = 16;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIntegerValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->integer_values = $arr;

        return $this;
    }

    /**
     * Repeated bool value. Should be set if feed_attribute_id refers to a feed
     * attribute of type BOOLEAN_LIST.
     *
     * Generated from protobuf field <code>repeated bool boolean_values = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBooleanValues()
    {
        return $this->boolean_values;
    }

    /**
     * Repeated bool value. Should be set if feed_attribute_id refers to a feed
     * attribute of type BOOLEAN_LIST.
     *
     * Generated from protobuf field <code>repeated bool boolean_values = 17;</code>
     * @param bool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBooleanValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BOOL);
        $this->boolean_values = $arr;

        return $this;
    }

    /**
     * Repeated string value. Should be set if feed_attribute_id refers to a feed
     * attribute of type STRING_LIST, URL_LIST or DATE_TIME_LIST.
     * For STRING_LIST and URL_LIST the total size of the list in bytes may not
     * exceed 3000. For DATE_TIME_LIST the number of elements may not exceed 200.
     * For STRING_LIST the maximum length of each string element is 1500
     * characters. For URL_LIST the maximum length is 2076 characters. For
     * DATE_TIME the format of the string must be the same as start and end time
     * for the feed item.
     *
     * Generated from protobuf field <code>repeated string string_values = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStringValues()
    {
        return $this->string_values;
    }

    /**
     * Repeated string value. Should be set if feed_attribute_id refers to a feed
     * attribute of type STRING_LIST, URL_LIST or DATE_TIME_LIST.
     * For STRING_LIST and URL_LIST the total size of the list in bytes may not
     * exceed 3000. For DATE_TIME_LIST the number of elements may not exceed 200.
     * For STRING_LIST the maximum length of each string element is 1500
     * characters. For URL_LIST the maximum length is 2076 characters. For
     * DATE_TIME the format of the string must be the same as start and end time
     * for the feed item.
     *
     * Generated from protobuf field <code>repeated string string_values = 18;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStringValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->string_values = $arr;

        return $this;
    }

    /**
     * Repeated double value. Should be set if feed_attribute_id refers to a feed
     * attribute of type DOUBLE_LIST.
     *
     * Generated from protobuf field <code>repeated double double_values = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDoubleValues()
    {
        return $this->double_values;
    }

    /**
     * Repeated double value. Should be set if feed_attribute_id refers to a feed
     * attribute of type DOUBLE_LIST.
     *
     * Generated from protobuf field <code>repeated double double_values = 19;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDoubleValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->double_values = $arr;

        return $this;
    }

}

