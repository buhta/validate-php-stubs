<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace ProtocGenValidate\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FieldRules encapsulates the rules for each type of field. Depending on the
 * field, the correct set should be used to ensure proper validations.
 *
 * Generated from protobuf message <code>validate.FieldRules</code>
 */
class FieldRules extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.validate.MessageRules message = 17;</code>
     */
    protected $message = null;
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ProtocGenValidate\Validate\MessageRules $message
     *     @type \ProtocGenValidate\Validate\FloatRules $float
     *           Scalar Field Types
     *     @type \ProtocGenValidate\Validate\DoubleRules $double
     *     @type \ProtocGenValidate\Validate\Int32Rules $int32
     *     @type \ProtocGenValidate\Validate\Int64Rules $int64
     *     @type \ProtocGenValidate\Validate\UInt32Rules $uint32
     *     @type \ProtocGenValidate\Validate\UInt64Rules $uint64
     *     @type \ProtocGenValidate\Validate\SInt32Rules $sint32
     *     @type \ProtocGenValidate\Validate\SInt64Rules $sint64
     *     @type \ProtocGenValidate\Validate\Fixed32Rules $fixed32
     *     @type \ProtocGenValidate\Validate\Fixed64Rules $fixed64
     *     @type \ProtocGenValidate\Validate\SFixed32Rules $sfixed32
     *     @type \ProtocGenValidate\Validate\SFixed64Rules $sfixed64
     *     @type \ProtocGenValidate\Validate\BoolRules $bool
     *     @type \ProtocGenValidate\Validate\StringRules $string
     *     @type \ProtocGenValidate\Validate\BytesRules $bytes
     *     @type \ProtocGenValidate\Validate\EnumRules $enum
     *           Complex Field Types
     *     @type \ProtocGenValidate\Validate\RepeatedRules $repeated
     *     @type \ProtocGenValidate\Validate\MapRules $map
     *     @type \ProtocGenValidate\Validate\AnyRules $any
     *           Well-Known Field Types
     *     @type \ProtocGenValidate\Validate\DurationRules $duration
     *     @type \ProtocGenValidate\Validate\TimestampRules $timestamp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtocGenValidate\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.validate.MessageRules message = 17;</code>
     * @return \ProtocGenValidate\Validate\MessageRules|null
     */
    public function getMessage()
    {
        return isset($this->message) ? $this->message : null;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>.validate.MessageRules message = 17;</code>
     * @param \ProtocGenValidate\Validate\MessageRules $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\MessageRules::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Scalar Field Types
     *
     * Generated from protobuf field <code>.validate.FloatRules float = 1;</code>
     * @return \ProtocGenValidate\Validate\FloatRules|null
     */
    public function getFloat()
    {
        return $this->readOneof(1);
    }

    public function hasFloat()
    {
        return $this->hasOneof(1);
    }

    /**
     * Scalar Field Types
     *
     * Generated from protobuf field <code>.validate.FloatRules float = 1;</code>
     * @param \ProtocGenValidate\Validate\FloatRules $var
     * @return $this
     */
    public function setFloat($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\FloatRules::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.DoubleRules double = 2;</code>
     * @return \ProtocGenValidate\Validate\DoubleRules|null
     */
    public function getDouble()
    {
        return $this->readOneof(2);
    }

    public function hasDouble()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.validate.DoubleRules double = 2;</code>
     * @param \ProtocGenValidate\Validate\DoubleRules $var
     * @return $this
     */
    public function setDouble($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\DoubleRules::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.Int32Rules int32 = 3;</code>
     * @return \ProtocGenValidate\Validate\Int32Rules|null
     */
    public function getInt32()
    {
        return $this->readOneof(3);
    }

    public function hasInt32()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.validate.Int32Rules int32 = 3;</code>
     * @param \ProtocGenValidate\Validate\Int32Rules $var
     * @return $this
     */
    public function setInt32($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\Int32Rules::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.Int64Rules int64 = 4;</code>
     * @return \ProtocGenValidate\Validate\Int64Rules|null
     */
    public function getInt64()
    {
        return $this->readOneof(4);
    }

    public function hasInt64()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.validate.Int64Rules int64 = 4;</code>
     * @param \ProtocGenValidate\Validate\Int64Rules $var
     * @return $this
     */
    public function setInt64($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\Int64Rules::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.UInt32Rules uint32 = 5;</code>
     * @return \ProtocGenValidate\Validate\UInt32Rules|null
     */
    public function getUint32()
    {
        return $this->readOneof(5);
    }

    public function hasUint32()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.validate.UInt32Rules uint32 = 5;</code>
     * @param \ProtocGenValidate\Validate\UInt32Rules $var
     * @return $this
     */
    public function setUint32($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\UInt32Rules::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.UInt64Rules uint64 = 6;</code>
     * @return \ProtocGenValidate\Validate\UInt64Rules|null
     */
    public function getUint64()
    {
        return $this->readOneof(6);
    }

    public function hasUint64()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.validate.UInt64Rules uint64 = 6;</code>
     * @param \ProtocGenValidate\Validate\UInt64Rules $var
     * @return $this
     */
    public function setUint64($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\UInt64Rules::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.SInt32Rules sint32 = 7;</code>
     * @return \ProtocGenValidate\Validate\SInt32Rules|null
     */
    public function getSint32()
    {
        return $this->readOneof(7);
    }

    public function hasSint32()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.validate.SInt32Rules sint32 = 7;</code>
     * @param \ProtocGenValidate\Validate\SInt32Rules $var
     * @return $this
     */
    public function setSint32($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\SInt32Rules::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.SInt64Rules sint64 = 8;</code>
     * @return \ProtocGenValidate\Validate\SInt64Rules|null
     */
    public function getSint64()
    {
        return $this->readOneof(8);
    }

    public function hasSint64()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.validate.SInt64Rules sint64 = 8;</code>
     * @param \ProtocGenValidate\Validate\SInt64Rules $var
     * @return $this
     */
    public function setSint64($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\SInt64Rules::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.Fixed32Rules fixed32 = 9;</code>
     * @return \ProtocGenValidate\Validate\Fixed32Rules|null
     */
    public function getFixed32()
    {
        return $this->readOneof(9);
    }

    public function hasFixed32()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.validate.Fixed32Rules fixed32 = 9;</code>
     * @param \ProtocGenValidate\Validate\Fixed32Rules $var
     * @return $this
     */
    public function setFixed32($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\Fixed32Rules::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.Fixed64Rules fixed64 = 10;</code>
     * @return \ProtocGenValidate\Validate\Fixed64Rules|null
     */
    public function getFixed64()
    {
        return $this->readOneof(10);
    }

    public function hasFixed64()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.validate.Fixed64Rules fixed64 = 10;</code>
     * @param \ProtocGenValidate\Validate\Fixed64Rules $var
     * @return $this
     */
    public function setFixed64($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\Fixed64Rules::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.SFixed32Rules sfixed32 = 11;</code>
     * @return \ProtocGenValidate\Validate\SFixed32Rules|null
     */
    public function getSfixed32()
    {
        return $this->readOneof(11);
    }

    public function hasSfixed32()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.validate.SFixed32Rules sfixed32 = 11;</code>
     * @param \ProtocGenValidate\Validate\SFixed32Rules $var
     * @return $this
     */
    public function setSfixed32($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\SFixed32Rules::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.SFixed64Rules sfixed64 = 12;</code>
     * @return \ProtocGenValidate\Validate\SFixed64Rules|null
     */
    public function getSfixed64()
    {
        return $this->readOneof(12);
    }

    public function hasSfixed64()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.validate.SFixed64Rules sfixed64 = 12;</code>
     * @param \ProtocGenValidate\Validate\SFixed64Rules $var
     * @return $this
     */
    public function setSfixed64($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\SFixed64Rules::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.BoolRules bool = 13;</code>
     * @return \ProtocGenValidate\Validate\BoolRules|null
     */
    public function getBool()
    {
        return $this->readOneof(13);
    }

    public function hasBool()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.validate.BoolRules bool = 13;</code>
     * @param \ProtocGenValidate\Validate\BoolRules $var
     * @return $this
     */
    public function setBool($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\BoolRules::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.StringRules string = 14;</code>
     * @return \ProtocGenValidate\Validate\StringRules|null
     */
    public function getString()
    {
        return $this->readOneof(14);
    }

    public function hasString()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.validate.StringRules string = 14;</code>
     * @param \ProtocGenValidate\Validate\StringRules $var
     * @return $this
     */
    public function setString($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\StringRules::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.BytesRules bytes = 15;</code>
     * @return \ProtocGenValidate\Validate\BytesRules|null
     */
    public function getBytes()
    {
        return $this->readOneof(15);
    }

    public function hasBytes()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.validate.BytesRules bytes = 15;</code>
     * @param \ProtocGenValidate\Validate\BytesRules $var
     * @return $this
     */
    public function setBytes($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\BytesRules::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Complex Field Types
     *
     * Generated from protobuf field <code>.validate.EnumRules enum = 16;</code>
     * @return \ProtocGenValidate\Validate\EnumRules|null
     */
    public function getEnum()
    {
        return $this->readOneof(16);
    }

    public function hasEnum()
    {
        return $this->hasOneof(16);
    }

    /**
     * Complex Field Types
     *
     * Generated from protobuf field <code>.validate.EnumRules enum = 16;</code>
     * @param \ProtocGenValidate\Validate\EnumRules $var
     * @return $this
     */
    public function setEnum($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\EnumRules::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.RepeatedRules repeated = 18;</code>
     * @return \ProtocGenValidate\Validate\RepeatedRules|null
     */
    public function getRepeated()
    {
        return $this->readOneof(18);
    }

    public function hasRepeated()
    {
        return $this->hasOneof(18);
    }

    /**
     * Generated from protobuf field <code>.validate.RepeatedRules repeated = 18;</code>
     * @param \ProtocGenValidate\Validate\RepeatedRules $var
     * @return $this
     */
    public function setRepeated($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\RepeatedRules::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.MapRules map = 19;</code>
     * @return \ProtocGenValidate\Validate\MapRules|null
     */
    public function getMap()
    {
        return $this->readOneof(19);
    }

    public function hasMap()
    {
        return $this->hasOneof(19);
    }

    /**
     * Generated from protobuf field <code>.validate.MapRules map = 19;</code>
     * @param \ProtocGenValidate\Validate\MapRules $var
     * @return $this
     */
    public function setMap($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\MapRules::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Well-Known Field Types
     *
     * Generated from protobuf field <code>.validate.AnyRules any = 20;</code>
     * @return \ProtocGenValidate\Validate\AnyRules|null
     */
    public function getAny()
    {
        return $this->readOneof(20);
    }

    public function hasAny()
    {
        return $this->hasOneof(20);
    }

    /**
     * Well-Known Field Types
     *
     * Generated from protobuf field <code>.validate.AnyRules any = 20;</code>
     * @param \ProtocGenValidate\Validate\AnyRules $var
     * @return $this
     */
    public function setAny($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\AnyRules::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.DurationRules duration = 21;</code>
     * @return \ProtocGenValidate\Validate\DurationRules|null
     */
    public function getDuration()
    {
        return $this->readOneof(21);
    }

    public function hasDuration()
    {
        return $this->hasOneof(21);
    }

    /**
     * Generated from protobuf field <code>.validate.DurationRules duration = 21;</code>
     * @param \ProtocGenValidate\Validate\DurationRules $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\DurationRules::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.validate.TimestampRules timestamp = 22;</code>
     * @return \ProtocGenValidate\Validate\TimestampRules|null
     */
    public function getTimestamp()
    {
        return $this->readOneof(22);
    }

    public function hasTimestamp()
    {
        return $this->hasOneof(22);
    }

    /**
     * Generated from protobuf field <code>.validate.TimestampRules timestamp = 22;</code>
     * @param \ProtocGenValidate\Validate\TimestampRules $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \ProtocGenValidate\Validate\TimestampRules::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

