<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace ProtocGenValidate\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MapRules describe the constraints applied to `map` values
 *
 * Generated from protobuf message <code>validate.MapRules</code>
 */
class MapRules extends \Google\Protobuf\Internal\Message
{
    /**
     * MinPairs specifies that this field must have the specified number of
     * KVs at a minimum
     *
     * Generated from protobuf field <code>uint64 min_pairs = 1;</code>
     */
    protected $min_pairs = null;
    /**
     * MaxPairs specifies that this field must have the specified number of
     * KVs at a maximum
     *
     * Generated from protobuf field <code>uint64 max_pairs = 2;</code>
     */
    protected $max_pairs = null;
    /**
     * NoSparse specifies values in this field cannot be unset. This only
     * applies to map's with message value types.
     *
     * Generated from protobuf field <code>bool no_sparse = 3;</code>
     */
    protected $no_sparse = null;
    /**
     * Keys specifies the constraints to be applied to each key in the field.
     *
     * Generated from protobuf field <code>.validate.FieldRules keys = 4;</code>
     */
    protected $keys = null;
    /**
     * Values specifies the constraints to be applied to the value of each key
     * in the field. Message values will still have their validations evaluated
     * unless skip is specified here.
     *
     * Generated from protobuf field <code>.validate.FieldRules values = 5;</code>
     */
    protected $values = null;
    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>bool ignore_empty = 6;</code>
     */
    protected $ignore_empty = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $min_pairs
     *           MinPairs specifies that this field must have the specified number of
     *           KVs at a minimum
     *     @type int|string $max_pairs
     *           MaxPairs specifies that this field must have the specified number of
     *           KVs at a maximum
     *     @type bool $no_sparse
     *           NoSparse specifies values in this field cannot be unset. This only
     *           applies to map's with message value types.
     *     @type \ProtocGenValidate\Validate\FieldRules $keys
     *           Keys specifies the constraints to be applied to each key in the field.
     *     @type \ProtocGenValidate\Validate\FieldRules $values
     *           Values specifies the constraints to be applied to the value of each key
     *           in the field. Message values will still have their validations evaluated
     *           unless skip is specified here.
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
     * MinPairs specifies that this field must have the specified number of
     * KVs at a minimum
     *
     * Generated from protobuf field <code>uint64 min_pairs = 1;</code>
     * @return int|string
     */
    public function getMinPairs()
    {
        return isset($this->min_pairs) ? $this->min_pairs : 0;
    }

    public function hasMinPairs()
    {
        return isset($this->min_pairs);
    }

    public function clearMinPairs()
    {
        unset($this->min_pairs);
    }

    /**
     * MinPairs specifies that this field must have the specified number of
     * KVs at a minimum
     *
     * Generated from protobuf field <code>uint64 min_pairs = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinPairs($var)
    {
        GPBUtil::checkUint64($var);
        $this->min_pairs = $var;

        return $this;
    }

    /**
     * MaxPairs specifies that this field must have the specified number of
     * KVs at a maximum
     *
     * Generated from protobuf field <code>uint64 max_pairs = 2;</code>
     * @return int|string
     */
    public function getMaxPairs()
    {
        return isset($this->max_pairs) ? $this->max_pairs : 0;
    }

    public function hasMaxPairs()
    {
        return isset($this->max_pairs);
    }

    public function clearMaxPairs()
    {
        unset($this->max_pairs);
    }

    /**
     * MaxPairs specifies that this field must have the specified number of
     * KVs at a maximum
     *
     * Generated from protobuf field <code>uint64 max_pairs = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxPairs($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_pairs = $var;

        return $this;
    }

    /**
     * NoSparse specifies values in this field cannot be unset. This only
     * applies to map's with message value types.
     *
     * Generated from protobuf field <code>bool no_sparse = 3;</code>
     * @return bool
     */
    public function getNoSparse()
    {
        return isset($this->no_sparse) ? $this->no_sparse : false;
    }

    public function hasNoSparse()
    {
        return isset($this->no_sparse);
    }

    public function clearNoSparse()
    {
        unset($this->no_sparse);
    }

    /**
     * NoSparse specifies values in this field cannot be unset. This only
     * applies to map's with message value types.
     *
     * Generated from protobuf field <code>bool no_sparse = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoSparse($var)
    {
        GPBUtil::checkBool($var);
        $this->no_sparse = $var;

        return $this;
    }

    /**
     * Keys specifies the constraints to be applied to each key in the field.
     *
     * Generated from protobuf field <code>.validate.FieldRules keys = 4;</code>
     * @return \ProtocGenValidate\Validate\FieldRules|null
     */
    public function getKeys()
    {
        return isset($this->keys) ? $this->keys : null;
    }

    public function hasKeys()
    {
        return isset($this->keys);
    }

    public function clearKeys()
    {
        unset($this->keys);
    }

    /**
     * Keys specifies the constraints to be applied to each key in the field.
     *
     * Generated from protobuf field <code>.validate.FieldRules keys = 4;</code>
     * @param \ProtocGenValidate\Validate\FieldRules $var
     * @return $this
     */
    public function setKeys($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\FieldRules::class);
        $this->keys = $var;

        return $this;
    }

    /**
     * Values specifies the constraints to be applied to the value of each key
     * in the field. Message values will still have their validations evaluated
     * unless skip is specified here.
     *
     * Generated from protobuf field <code>.validate.FieldRules values = 5;</code>
     * @return \ProtocGenValidate\Validate\FieldRules|null
     */
    public function getValues()
    {
        return isset($this->values) ? $this->values : null;
    }

    public function hasValues()
    {
        return isset($this->values);
    }

    public function clearValues()
    {
        unset($this->values);
    }

    /**
     * Values specifies the constraints to be applied to the value of each key
     * in the field. Message values will still have their validations evaluated
     * unless skip is specified here.
     *
     * Generated from protobuf field <code>.validate.FieldRules values = 5;</code>
     * @param \ProtocGenValidate\Validate\FieldRules $var
     * @return $this
     */
    public function setValues($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\FieldRules::class);
        $this->values = $var;

        return $this;
    }

    /**
     * IgnoreEmpty specifies that the validation rules of this field should be
     * evaluated only if the field is not empty
     *
     * Generated from protobuf field <code>bool ignore_empty = 6;</code>
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
     * Generated from protobuf field <code>bool ignore_empty = 6;</code>
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

