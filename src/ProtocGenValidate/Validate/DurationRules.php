<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace ProtocGenValidate\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DurationRules describe the constraints applied exclusively to the
 * `google.protobuf.Duration` well-known type
 *
 * Generated from protobuf message <code>validate.DurationRules</code>
 */
class DurationRules extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.google.protobuf.Duration const = 2;</code>
     */
    protected $const = null;
    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lt = 3;</code>
     */
    protected $lt = null;
    /**
     * Lt specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lte = 4;</code>
     */
    protected $lte = null;
    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gt = 5;</code>
     */
    protected $gt = null;
    /**
     * Gte specifies that this field must be greater than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gte = 6;</code>
     */
    protected $gte = null;
    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7;</code>
     */
    private $in;
    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8;</code>
     */
    private $not_in;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $required
     *           Required specifies that this field must be set
     *     @type \Google\Protobuf\Duration $const
     *           Const specifies that this field must be exactly the specified value
     *     @type \Google\Protobuf\Duration $lt
     *           Lt specifies that this field must be less than the specified value,
     *           exclusive
     *     @type \Google\Protobuf\Duration $lte
     *           Lt specifies that this field must be less than the specified value,
     *           inclusive
     *     @type \Google\Protobuf\Duration $gt
     *           Gt specifies that this field must be greater than the specified value,
     *           exclusive
     *     @type \Google\Protobuf\Duration $gte
     *           Gte specifies that this field must be greater than the specified value,
     *           inclusive
     *     @type \Google\Protobuf\Duration[]|\Google\Protobuf\Internal\RepeatedField $in
     *           In specifies that this field must be equal to one of the specified
     *           values
     *     @type \Google\Protobuf\Duration[]|\Google\Protobuf\Internal\RepeatedField $not_in
     *           NotIn specifies that this field cannot be equal to one of the specified
     *           values
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
     * Generated from protobuf field <code>.google.protobuf.Duration const = 2;</code>
     * @return \Google\Protobuf\Duration|null
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
     * Generated from protobuf field <code>.google.protobuf.Duration const = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->const = $var;

        return $this;
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lt = 3;</code>
     * @return \Google\Protobuf\Duration|null
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
     * Generated from protobuf field <code>.google.protobuf.Duration lt = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lt = $var;

        return $this;
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lte = 4;</code>
     * @return \Google\Protobuf\Duration|null
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
     * Lt specifies that this field must be less than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lte = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lte = $var;

        return $this;
    }

    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gt = 5;</code>
     * @return \Google\Protobuf\Duration|null
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
     * Generated from protobuf field <code>.google.protobuf.Duration gt = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->gt = $var;

        return $this;
    }

    /**
     * Gte specifies that this field must be greater than the specified value,
     * inclusive
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gte = 6;</code>
     * @return \Google\Protobuf\Duration|null
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
     * Generated from protobuf field <code>.google.protobuf.Duration gte = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->gte = $var;

        return $this;
    }

    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7;</code>
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
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7;</code>
     * @param \Google\Protobuf\Duration[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->in = $arr;

        return $this;
    }

    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8;</code>
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
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8;</code>
     * @param \Google\Protobuf\Duration[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->not_in = $arr;

        return $this;
    }

}

