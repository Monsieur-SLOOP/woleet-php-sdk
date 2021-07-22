<?php
/**
 * Credits
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
 * Credits Class Doc Comment
 *
 * @category Class
 * @package  WooletClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Credits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'credits';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'credits' => 'int',
        'sign_credits' => 'int',
        'signature_request_credits' => 'int'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'credits' => null,
        'sign_credits' => null,
        'signature_request_credits' => null];

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
        'credits' => 'credits',
        'sign_credits' => 'signCredits',
        'signature_request_credits' => 'signatureRequestCredits'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'credits' => 'setCredits',
        'sign_credits' => 'setSignCredits',
        'signature_request_credits' => 'setSignatureRequestCredits'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'credits' => 'getCredits',
        'sign_credits' => 'getSignCredits',
        'signature_request_credits' => 'getSignatureRequestCredits'];

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
        $this->container['credits'] = isset($data['credits']) ? $data['credits'] : null;
        $this->container['sign_credits'] = isset($data['sign_credits']) ? $data['sign_credits'] : null;
        $this->container['signature_request_credits'] = isset($data['signature_request_credits']) ? $data['signature_request_credits'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
     * Gets credits
     *
     * @return int
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param int $credits The remaining number of anchoring credits of the authenticated user's account.
     *
     * @return $this
     */
    public function setCredits($credits)
    {
        $this->container['credits'] = $credits;
        return $this;
    }

    /**
     * Gets sign_credits
     *
     * @return int
     */
    public function getSignCredits()
    {
        return $this->container['sign_credits'];
    }

    /**
     * Sets sign_credits
     *
     * @param int $sign_credits The remaining number of signature credits of the authenticated user's account.
     *
     * @return $this
     */
    public function setSignCredits($sign_credits)
    {
        $this->container['sign_credits'] = $sign_credits;
        return $this;
    }

    /**
     * Gets signature_request_credits
     *
     * @return int
     */
    public function getSignatureRequestCredits()
    {
        return $this->container['signature_request_credits'];
    }

    /**
     * Sets signature_request_credits
     *
     * @param int $signature_request_credits The remaining number of signature request credits of the authenticated user's account.
     *
     * @return $this
     */
    public function setSignatureRequestCredits($signature_request_credits)
    {
        $this->container['signature_request_credits'] = $signature_request_credits;
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
