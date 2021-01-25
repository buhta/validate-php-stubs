<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace ProtocGenValidate\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TimestampRules describe the constraints applied exclusively to the
 * `google.protobuf.Timestamp` well-known type
 *
 * Generated from protobuf message <code>validate.TimestampRules</code>
 */
class TimestampRules extends \Google\Protobuf\Internal\Message
{
    /**
     * Required specifies that this field must be set
     *
     * Generated from protobuf field <code>bool required = 1;</code>
     */
    protected $required = null;
    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp const = 2;</code>
     */
    protected $const = null;
    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lt = 3;</code>
     */
    protected $lt = null;
    /**
     * Lte specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lte = 4;</code>
     */
    protected $lte = null;
    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gt = 5;</code>
     */
    protected $gt = null;
    /**
     * Gte specifies that this field must be greater than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gte = 6;</code>
     */
    protected $gte = null;
    /**
     * LtNow specifies that this must be less than the current time. LtNow
     * can only be used with the Within rule.
     *
     * Generated from protobuf field <code>bool lt_now = 7;</code>
     */
    protected $lt_now = null;
    /**
     * GtNow specifies that this must be greater than the current time. GtNow
     * can only be used with the Within rule.
     *
     * Generated from protobuf field <code>bool gt_now = 8;</code>
     */
    protected $gt_now = null;
    /**
     * Within specifies that this field must be within this duration of the
     * current time. This constraint can be used alone or with the LtNow and
     * GtNow rules.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration within = 9;</code>
     */
    protected $within = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $required
     *           Required specifies that this field must be set
     *     @type \Google\Protobuf\Timestamp $const
     *           Const specifies that this field must be exactly the specified value
     *     @type \Google\Protobuf\Timestamp $lt
     *           Lt specifies that this field must be less than the specified value,
     *           exclusive
     *     @type \Google\Protobuf\Timestamp $lte
     *           Lte specifies that this field must be less than the specified value,
     *           inclusive
     *     @type \Google\Protobuf\Timestamp $gt
     *           Gt specifies that this field must be greater than the specified value,
     *           exclusive
     *     @type \Google\Protobuf\Timestamp $gte
     *           Gte specifies that this field must be greater than the specified value,
     *           inclusive
     *     @type bool $lt_now
     *           LtNow specifies that this must be less than the current time. LtNow
     *           can only be used with the Within rule.
     *     @type bool $gt_now
     *           GtNow specifies that this must be greater than the current time. GtNow
     *           can only be used with the Within rule.
     *     @type \Google\Protobuf\Duration $within
     *           Within specifies that this field must be within this duration of the
     *           current time. This constraint can be used alone or with the LtNow and
     *           GtNow rules.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtocGenValidate\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * Required specifies that this field must be set
     *
     * Generated from protobuf field <code>bool required = 1;</code>
     * @return bool
     */
    public function getRequired()
    {
        return isset($this->required) ? $this->required : false;
    }

    public function hasRequired()
    {
        return isset($this->required);
    }

    public function clearRequired()
    {
        unset($this->required);
    }

    /**
     * Required specifies that this field must be set
     *
     * Generated from protobuf field <code>bool required = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp const = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getConst()
    {
        return isset($this->const) ? $this->const : null;
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp const = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->const = $var;

        return $this;
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lt = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLt()
    {
        return isset($this->lt) ? $this->lt : null;
    }

    public function hasLt()
    {
        return isset($this->lt);
    }

    public function clearLt()
    {
        unset($this->lt);
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lt = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->lt = $var;

        return $this;
    }

    /**
     * Lte specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lte = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLte()
    {
        return isset($this->lte) ? $this->lte : null;
    }

    public function hasLte()
    {
        return isset($this->lte);
    }

    public function clearLte()
    {
        unset($this->lte);
    }

    /**
     * Lte specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lte = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->lte = $var;

        return $this;
    }

    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gt = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getGt()
    {
        return isset($this->gt) ? $this->gt : null;
    }

    public function hasGt()
    {
        return isset($this->gt);
    }

    public function clearGt()
    {
        unset($this->gt);
    }

    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gt = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->gt = $var;

        return $this;
    }

    /**
     * Gte specifies that this field must be greater than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gte = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getGte()
    {
        return isset($this->gte) ? $this->gte : null;
    }

    public function hasGte()
    {
        return isset($this->gte);
    }

    public function clearGte()
    {
        unset($this->gte);
    }

    /**
     * Gte specifies that this field must be greater than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gte = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->gte = $var;

        return $this;
    }

    /**
     * LtNow specifies that this must be less than the current time. LtNow
     * can only be used with the Within rule.
     *
     * Generated from protobuf field <code>bool lt_now = 7;</code>
     * @return bool
     */
    public function getLtNow()
    {
        return isset($this->lt_now) ? $this->lt_now : false;
    }

    public function hasLtNow()
    {
        return isset($this->lt_now);
    }

    public function clearLtNow()
    {
        unset($this->lt_now);
    }

    /**
     * LtNow specifies that this must be less than the current time. LtNow
     * can only be used with the Within rule.
     *
     * Generated from protobuf field <code>bool lt_now = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setLtNow($var)
    {
        GPBUtil::checkBool($var);
        $this->lt_now = $var;

        return $this;
    }

    /**
     * GtNow specifies that this must be greater than the current time. GtNow
     * can only be used with the Within rule.
     *
     * Generated from protobuf field <code>bool gt_now = 8;</code>
     * @return bool
     */
    public function getGtNow()
    {
        return isset($this->gt_now) ? $this->gt_now : false;
    }

    public function hasGtNow()
    {
        return isset($this->gt_now);
    }

    public function clearGtNow()
    {
        unset($this->gt_now);
    }

    /**
     * GtNow specifies that this must be greater than the current time. GtNow
     * can only be used with the Within rule.
     *
     * Generated from protobuf field <code>bool gt_now = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setGtNow($var)
    {
        GPBUtil::checkBool($var);
        $this->gt_now = $var;

        return $this;
    }

    /**
     * Within specifies that this field must be within this duration of the
     * current time. This constraint can be used alone or with the LtNow and
     * GtNow rules.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration within = 9;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getWithin()
    {
        return isset($this->within) ? $this->within : null;
    }

    public function hasWithin()
    {
        return isset($this->within);
    }

    public function clearWithin()
    {
        unset($this->within);
    }

    /**
     * Within specifies that this field must be within this duration of the
     * current time. This constraint can be used alone or with the LtNow and
     * GtNow rules.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration within = 9;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWithin($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->within = $var;

        return $this;
    }

}

