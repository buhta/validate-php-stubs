<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace ProtocGenValidate\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BytesRules describe the constraints applied to `bytes` values
 *
 * Generated from protobuf message <code>validate.BytesRules</code>
 */
class BytesRules extends \Google\Protobuf\Internal\Message
{
    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>bytes const = 1;</code>
     */
    protected $const = null;
    /**
     * Len specifies that this field must be the specified number of bytes
     *
     * Generated from protobuf field <code>uint64 len = 13;</code>
     */
    protected $len = null;
    /**
     * MinLen specifies that this field must be the specified number of bytes
     * at a minimum
     *
     * Generated from protobuf field <code>uint64 min_len = 2;</code>
     */
    protected $min_len = null;
    /**
     * MaxLen specifies that this field must be the specified number of bytes
     * at a maximum
     *
     * Generated from protobuf field <code>uint64 max_len = 3;</code>
     */
    protected $max_len = null;
    /**
     * Pattern specifes that this field must match against the specified
     * regular expression (RE2 syntax). The included expression should elide
     * any delimiters.
     *
     * Generated from protobuf field <code>string pattern = 4;</code>
     */
    protected $pattern = null;
    /**
     * Prefix specifies that this field must have the specified bytes at the
     * beginning of the string.
     *
     * Generated from protobuf field <code>bytes prefix = 5;</code>
     */
    protected $prefix = null;
    /**
     * Suffix specifies that this field must have the specified bytes at the
     * end of the string.
     *
     * Generated from protobuf field <code>bytes suffix = 6;</code>
     */
    protected $suffix = null;
    /**
     * Contains specifies that this field must have the specified bytes
     * anywhere in the string.
     *
     * Generated from protobuf field <code>bytes contains = 7;</code>
     */
    protected $contains = null;
    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated bytes in = 8;</code>
     */
    private $in;
    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated bytes not_in = 9;</code>
     */
    private $not_in;
    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>bool ignore_empty = 14;</code>
     */
    protected $ignore_empty = null;
    protected $well_known;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $const
     *           Const specifies that this field must be exactly the specified value
     *     @type int|string $len
     *           Len specifies that this field must be the specified number of bytes
     *     @type int|string $min_len
     *           MinLen specifies that this field must be the specified number of bytes
     *           at a minimum
     *     @type int|string $max_len
     *           MaxLen specifies that this field must be the specified number of bytes
     *           at a maximum
     *     @type string $pattern
     *           Pattern specifes that this field must match against the specified
     *           regular expression (RE2 syntax). The included expression should elide
     *           any delimiters.
     *     @type string $prefix
     *           Prefix specifies that this field must have the specified bytes at the
     *           beginning of the string.
     *     @type string $suffix
     *           Suffix specifies that this field must have the specified bytes at the
     *           end of the string.
     *     @type string $contains
     *           Contains specifies that this field must have the specified bytes
     *           anywhere in the string.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $in
     *           In specifies that this field must be equal to one of the specified
     *           values
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $not_in
     *           NotIn specifies that this field cannot be equal to one of the specified
     *           values
     *     @type bool $ip
     *           Ip specifies that the field must be a valid IP (v4 or v6) address in
     *           byte format
     *     @type bool $ipv4
     *           Ipv4 specifies that the field must be a valid IPv4 address in byte
     *           format
     *     @type bool $ipv6
     *           Ipv6 specifies that the field must be a valid IPv6 address in byte
     *           format
     *     @type bool $ignore_empty
     *           IgnoreEmpty specifies that the validation rules of this field should be
     *           evaluated only if the field is not empty
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtocGenValidate\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>bytes const = 1;</code>
     * @return string
     */
    public function getConst()
    {
        return isset($this->const) ? $this->const : '';
    }

    public function hasConst()
    {
        return isset($this->const);
    }

    public function clearConst()
    {
        unset($this->const);
    }

    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>bytes const = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkString($var, False);
        $this->const = $var;

        return $this;
    }

    /**
     * Len specifies that this field must be the specified number of bytes
     *
     * Generated from protobuf field <code>uint64 len = 13;</code>
     * @return int|string
     */
    public function getLen()
    {
        return isset($this->len) ? $this->len : 0;
    }

    public function hasLen()
    {
        return isset($this->len);
    }

    public function clearLen()
    {
        unset($this->len);
    }

    /**
     * Len specifies that this field must be the specified number of bytes
     *
     * Generated from protobuf field <code>uint64 len = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLen($var)
    {
        GPBUtil::checkUint64($var);
        $this->len = $var;

        return $this;
    }

    /**
     * MinLen specifies that this field must be the specified number of bytes
     * at a minimum
     *
     * Generated from protobuf field <code>uint64 min_len = 2;</code>
     * @return int|string
     */
    public function getMinLen()
    {
        return isset($this->min_len) ? $this->min_len : 0;
    }

    public function hasMinLen()
    {
        return isset($this->min_len);
    }

    public function clearMinLen()
    {
        unset($this->min_len);
    }

    /**
     * MinLen specifies that this field must be the specified number of bytes
     * at a minimum
     *
     * Generated from protobuf field <code>uint64 min_len = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinLen($var)
    {
        GPBUtil::checkUint64($var);
        $this->min_len = $var;

        return $this;
    }

    /**
     * MaxLen specifies that this field must be the specified number of bytes
     * at a maximum
     *
     * Generated from protobuf field <code>uint64 max_len = 3;</code>
     * @return int|string
     */
    public function getMaxLen()
    {
        return isset($this->max_len) ? $this->max_len : 0;
    }

    public function hasMaxLen()
    {
        return isset($this->max_len);
    }

    public function clearMaxLen()
    {
        unset($this->max_len);
    }

    /**
     * MaxLen specifies that this field must be the specified number of bytes
     * at a maximum
     *
     * Generated from protobuf field <code>uint64 max_len = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxLen($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_len = $var;

        return $this;
    }

    /**
     * Pattern specifes that this field must match against the specified
     * regular expression (RE2 syntax). The included expression should elide
     * any delimiters.
     *
     * Generated from protobuf field <code>string pattern = 4;</code>
     * @return string
     */
    public function getPattern()
    {
        return isset($this->pattern) ? $this->pattern : '';
    }

    public function hasPattern()
    {
        return isset($this->pattern);
    }

    public function clearPattern()
    {
        unset($this->pattern);
    }

    /**
     * Pattern specifes that this field must match against the specified
     * regular expression (RE2 syntax). The included expression should elide
     * any delimiters.
     *
     * Generated from protobuf field <code>string pattern = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->pattern = $var;

        return $this;
    }

    /**
     * Prefix specifies that this field must have the specified bytes at the
     * beginning of the string.
     *
     * Generated from protobuf field <code>bytes prefix = 5;</code>
     * @return string
     */
    public function getPrefix()
    {
        return isset($this->prefix) ? $this->prefix : '';
    }

    public function hasPrefix()
    {
        return isset($this->prefix);
    }

    public function clearPrefix()
    {
        unset($this->prefix);
    }

    /**
     * Prefix specifies that this field must have the specified bytes at the
     * beginning of the string.
     *
     * Generated from protobuf field <code>bytes prefix = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPrefix($var)
    {
        GPBUtil::checkString($var, False);
        $this->prefix = $var;

        return $this;
    }

    /**
     * Suffix specifies that this field must have the specified bytes at the
     * end of the string.
     *
     * Generated from protobuf field <code>bytes suffix = 6;</code>
     * @return string
     */
    public function getSuffix()
    {
        return isset($this->suffix) ? $this->suffix : '';
    }

    public function hasSuffix()
    {
        return isset($this->suffix);
    }

    public function clearSuffix()
    {
        unset($this->suffix);
    }

    /**
     * Suffix specifies that this field must have the specified bytes at the
     * end of the string.
     *
     * Generated from protobuf field <code>bytes suffix = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSuffix($var)
    {
        GPBUtil::checkString($var, False);
        $this->suffix = $var;

        return $this;
    }

    /**
     * Contains specifies that this field must have the specified bytes
     * anywhere in the string.
     *
     * Generated from protobuf field <code>bytes contains = 7;</code>
     * @return string
     */
    public function getContains()
    {
        return isset($this->contains) ? $this->contains : '';
    }

    public function hasContains()
    {
        return isset($this->contains);
    }

    public function clearContains()
    {
        unset($this->contains);
    }

    /**
     * Contains specifies that this field must have the specified bytes
     * anywhere in the string.
     *
     * Generated from protobuf field <code>bytes contains = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setContains($var)
    {
        GPBUtil::checkString($var, False);
        $this->contains = $var;

        return $this;
    }

    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated bytes in = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated bytes in = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->in = $arr;

        return $this;
    }

    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated bytes not_in = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotIn()
    {
        return $this->not_in;
    }

    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated bytes not_in = 9;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->not_in = $arr;

        return $this;
    }

    /**
     * Ip specifies that the field must be a valid IP (v4 or v6) address in
     * byte format
     *
     * Generated from protobuf field <code>bool ip = 10;</code>
     * @return bool
     */
    public function getIp()
    {
        return $this->readOneof(10);
    }

    public function hasIp()
    {
        return $this->hasOneof(10);
    }

    /**
     * Ip specifies that the field must be a valid IP (v4 or v6) address in
     * byte format
     *
     * Generated from protobuf field <code>bool ip = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Ipv4 specifies that the field must be a valid IPv4 address in byte
     * format
     *
     * Generated from protobuf field <code>bool ipv4 = 11;</code>
     * @return bool
     */
    public function getIpv4()
    {
        return $this->readOneof(11);
    }

    public function hasIpv4()
    {
        return $this->hasOneof(11);
    }

    /**
     * Ipv4 specifies that the field must be a valid IPv4 address in byte
     * format
     *
     * Generated from protobuf field <code>bool ipv4 = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setIpv4($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Ipv6 specifies that the field must be a valid IPv6 address in byte
     * format
     *
     * Generated from protobuf field <code>bool ipv6 = 12;</code>
     * @return bool
     */
    public function getIpv6()
    {
        return $this->readOneof(12);
    }

    public function hasIpv6()
    {
        return $this->hasOneof(12);
    }

    /**
     * Ipv6 specifies that the field must be a valid IPv6 address in byte
     * format
     *
     * Generated from protobuf field <code>bool ipv6 = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIpv6($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>bool ignore_empty = 14;</code>
     * @return bool
     */
    public function getIgnoreEmpty()
    {
        return isset($this->ignore_empty) ? $this->ignore_empty : false;
    }

    public function hasIgnoreEmpty()
    {
        return isset($this->ignore_empty);
    }

    public function clearIgnoreEmpty()
    {
        unset($this->ignore_empty);
    }

    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>bool ignore_empty = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreEmpty($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_empty = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getWellKnown()
    {
        return $this->whichOneof("well_known");
    }

}

