<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace ProtocGenValidate\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Fixed32Rules describes the constraints applied to `fixed32` values
 *
 * Generated from protobuf message <code>validate.Fixed32Rules</code>
 */
class Fixed32Rules extends \Google\Protobuf\Internal\Message
{
    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>fixed32 const = 1;</code>
     */
    protected $const = null;
    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>fixed32 lt = 2;</code>
     */
    protected $lt = null;
    /**
     * Lte specifies that this field must be less than or equal to the
     * specified value, inclusive
     *
     * Generated from protobuf field <code>fixed32 lte = 3;</code>
     */
    protected $lte = null;
    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive. If the value of Gt is larger than a specified Lt or Lte, the
     * range is reversed.
     *
     * Generated from protobuf field <code>fixed32 gt = 4;</code>
     */
    protected $gt = null;
    /**
     * Gte specifies that this field must be greater than or equal to the
     * specified value, inclusive. If the value of Gte is larger than a
     * specified Lt or Lte, the range is reversed.
     *
     * Generated from protobuf field <code>fixed32 gte = 5;</code>
     */
    protected $gte = null;
    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated fixed32 in = 6;</code>
     */
    private $in;
    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated fixed32 not_in = 7;</code>
     */
    private $not_in;
    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>bool ignore_empty = 8;</code>
     */
    protected $ignore_empty = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $const
     *           Const specifies that this field must be exactly the specified value
     *     @type int $lt
     *           Lt specifies that this field must be less than the specified value,
     *           exclusive
     *     @type int $lte
     *           Lte specifies that this field must be less than or equal to the
     *           specified value, inclusive
     *     @type int $gt
     *           Gt specifies that this field must be greater than the specified value,
     *           exclusive. If the value of Gt is larger than a specified Lt or Lte, the
     *           range is reversed.
     *     @type int $gte
     *           Gte specifies that this field must be greater than or equal to the
     *           specified value, inclusive. If the value of Gte is larger than a
     *           specified Lt or Lte, the range is reversed.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $in
     *           In specifies that this field must be equal to one of the specified
     *           values
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $not_in
     *           NotIn specifies that this field cannot be equal to one of the specified
     *           values
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
     * Generated from protobuf field <code>fixed32 const = 1;</code>
     * @return int
     */
    public function getConst()
    {
        return isset($this->const) ? $this->const : 0;
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
     * Generated from protobuf field <code>fixed32 const = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkUint32($var);
        $this->const = $var;

        return $this;
    }

    /**
     * Lt specifies that this field must be less than the specified value,
     * exclusive
     *
     * Generated from protobuf field <code>fixed32 lt = 2;</code>
     * @return int
     */
    public function getLt()
    {
        return isset($this->lt) ? $this->lt : 0;
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
     * Generated from protobuf field <code>fixed32 lt = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkUint32($var);
        $this->lt = $var;

        return $this;
    }

    /**
     * Lte specifies that this field must be less than or equal to the
     * specified value, inclusive
     *
     * Generated from protobuf field <code>fixed32 lte = 3;</code>
     * @return int
     */
    public function getLte()
    {
        return isset($this->lte) ? $this->lte : 0;
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
     * Lte specifies that this field must be less than or equal to the
     * specified value, inclusive
     *
     * Generated from protobuf field <code>fixed32 lte = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkUint32($var);
        $this->lte = $var;

        return $this;
    }

    /**
     * Gt specifies that this field must be greater than the specified value,
     * exclusive. If the value of Gt is larger than a specified Lt or Lte, the
     * range is reversed.
     *
     * Generated from protobuf field <code>fixed32 gt = 4;</code>
     * @return int
     */
    public function getGt()
    {
        return isset($this->gt) ? $this->gt : 0;
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
     * exclusive. If the value of Gt is larger than a specified Lt or Lte, the
     * range is reversed.
     *
     * Generated from protobuf field <code>fixed32 gt = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkUint32($var);
        $this->gt = $var;

        return $this;
    }

    /**
     * Gte specifies that this field must be greater than or equal to the
     * specified value, inclusive. If the value of Gte is larger than a
     * specified Lt or Lte, the range is reversed.
     *
     * Generated from protobuf field <code>fixed32 gte = 5;</code>
     * @return int
     */
    public function getGte()
    {
        return isset($this->gte) ? $this->gte : 0;
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
     * Gte specifies that this field must be greater than or equal to the
     * specified value, inclusive. If the value of Gte is larger than a
     * specified Lt or Lte, the range is reversed.
     *
     * Generated from protobuf field <code>fixed32 gte = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkUint32($var);
        $this->gte = $var;

        return $this;
    }

    /**
     * In specifies that this field must be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated fixed32 in = 6;</code>
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
     * Generated from protobuf field <code>repeated fixed32 in = 6;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->in = $arr;

        return $this;
    }

    /**
     * NotIn specifies that this field cannot be equal to one of the specified
     * values
     *
     * Generated from protobuf field <code>repeated fixed32 not_in = 7;</code>
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
     * Generated from protobuf field <code>repeated fixed32 not_in = 7;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->not_in = $arr;

        return $this;
    }

    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>bool ignore_empty = 8;</code>
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
     * Generated from protobuf field <code>bool ignore_empty = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreEmpty($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_empty = $var;

        return $this;
    }

}

