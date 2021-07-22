<?php
/**
 * ReceiptVerificationStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  WooletClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 * Woleet API
 *
 * Welcome to **Woleet API reference documentation**.<br> It is highly recommanded to read the chapters **[introducing Woleet API concepts](https://doc.woleet.io/reference)** before reading this documentation.
 *
 * OpenAPI spec version: 1.10.0
 * Contact: contact@woleet.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WooletClient\Model;

use \ArrayAccess;
use \WooletClient\ObjectSerializer;

/**
 * ReceiptVerificationStatus Class Doc Comment
 *
 * @category Class
 * @package  WooletClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReceiptVerificationStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'receiptVerificationStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'code' => 'string',
        'text' => 'string',
        'timestamp' => 'int',
        'confirmations' => 'int',
        'timestamp_verification_status' => '\WooletClient\Model\TimestampVerificationStatus',
        'signature_verification_status' => '\WooletClient\Model\SignatureVerificationStatus',
        'identity_verification_status' => '\WooletClient\Model\IdentityVerificationStatus'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'code' => null,
        'text' => null,
        'timestamp' => 'int64',
        'confirmations' => 'int32',
        'timestamp_verification_status' => null,
        'signature_verification_status' => null,
        'identity_verification_status' => null];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'text' => 'text',
        'timestamp' => 'timestamp',
        'confirmations' => 'confirmations',
        'timestamp_verification_status' => 'timestampVerificationStatus',
        'signature_verification_status' => 'signatureVerificationStatus',
        'identity_verification_status' => 'identityVerificationStatus'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'text' => 'setText',
        'timestamp' => 'setTimestamp',
        'confirmations' => 'setConfirmations',
        'timestamp_verification_status' => 'setTimestampVerificationStatus',
        'signature_verification_status' => 'setSignatureVerificationStatus',
        'identity_verification_status' => 'setIdentityVerificationStatus'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'text' => 'getText',
        'timestamp' => 'getTimestamp',
        'confirmations' => 'getConfirmations',
        'timestamp_verification_status' => 'getTimestampVerificationStatus',
        'signature_verification_status' => 'getSignatureVerificationStatus',
        'identity_verification_status' => 'getIdentityVerificationStatus'];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CODE_VERIFIED = 'VERIFIED';
    const CODE_TX_NOT_SENT = 'TX_NOT_SENT';
    const CODE_TX_NOT_CONFIRMED = 'TX_NOT_CONFIRMED';
    const CODE_INVALID_PROOF = 'INVALID_PROOF';
    const CODE_TX_NOT_FOUND = 'TX_NOT_FOUND';
    const CODE_TX_MISMATCH_RECEIPT = 'TX_MISMATCH_RECEIPT';
    const CODE_INVALID_SIGNATURE = 'INVALID_SIGNATURE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_VERIFIED,
            self::CODE_TX_NOT_SENT,
            self::CODE_TX_NOT_CONFIRMED,
            self::CODE_INVALID_PROOF,
            self::CODE_TX_NOT_FOUND,
            self::CODE_TX_MISMATCH_RECEIPT,
            self::CODE_INVALID_SIGNATURE,];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['confirmations'] = isset($data['confirmations']) ? $data['confirmations'] : null;
        $this->container['timestamp_verification_status'] = isset($data['timestamp_verification_status']) ? $data['timestamp_verification_status'] : null;
        $this->container['signature_verification_status'] = isset($data['signature_verification_status']) ? $data['signature_verification_status'] : null;
        $this->container['identity_verification_status'] = isset($data['identity_verification_status']) ? $data['identity_verification_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Proof receipt verification status code:<br> - VERIFIED: success: the proof receipt is verified: both the proof of timestamp AND the proof of signature (if applicable) are valid<br> - INVALID_SIGNATURE: error: the proof of signature is invalid<br> - any other verification status code: the proof of timestamp is not ready or invalid
     *
     * @return $this
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($code) && !in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;
        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Proof receipt verification status text giving more insight about verification errors.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Proven timestamp of the data (for a data anchor) or of the signature (for a signature anchor).<br> This is actually the time of the Bitcoin block into which the anchoring process occurred (in milliseconds since Unix epoch).
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
     * Gets confirmations
     *
     * @return int
     */
    public function getConfirmations()
    {
        return $this->container['confirmations'];
    }

    /**
     * Sets confirmations
     *
     * @param int $confirmations Number of confirmations of the Bitcoin block into which the anchoring process occurred.
     *
     * @return $this
     */
    public function setConfirmations($confirmations)
    {
        $this->container['confirmations'] = $confirmations;
        return $this;
    }

    /**
     * Gets timestamp_verification_status
     *
     * @return \WooletClient\Model\TimestampVerificationStatus
     */
    public function getTimestampVerificationStatus()
    {
        return $this->container['timestamp_verification_status'];
    }

    /**
     * Sets timestamp_verification_status
     *
     * @param \WooletClient\Model\TimestampVerificationStatus $timestamp_verification_status timestamp_verification_status
     *
     * @return $this
     */
    public function setTimestampVerificationStatus($timestamp_verification_status)
    {
        $this->container['timestamp_verification_status'] = $timestamp_verification_status;
        return $this;
    }

    /**
     * Gets signature_verification_status
     *
     * @return \WooletClient\Model\SignatureVerificationStatus
     */
    public function getSignatureVerificationStatus()
    {
        return $this->container['signature_verification_status'];
    }

    /**
     * Sets signature_verification_status
     *
     * @param \WooletClient\Model\SignatureVerificationStatus $signature_verification_status signature_verification_status
     *
     * @return $this
     */
    public function setSignatureVerificationStatus($signature_verification_status)
    {
        $this->container['signature_verification_status'] = $signature_verification_status;
        return $this;
    }

    /**
     * Gets identity_verification_status
     *
     * @return \WooletClient\Model\IdentityVerificationStatus
     */
    public function getIdentityVerificationStatus()
    {
        return $this->container['identity_verification_status'];
    }

    /**
     * Sets identity_verification_status
     *
     * @param \WooletClient\Model\IdentityVerificationStatus $identity_verification_status identity_verification_status
     *
     * @return $this
     */
    public function setIdentityVerificationStatus($identity_verification_status)
    {
        $this->container['identity_verification_status'] = $identity_verification_status;
        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
