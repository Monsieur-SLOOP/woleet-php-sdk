<?php
/**
 * SignatureRequest
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
 * SignatureRequest Class Doc Comment
 *
 * @category Class
 * @package  WooletClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignatureRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'signatureRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'string',
        'created' => 'int',
        'last_modified' => 'int',
        'name' => 'string',
        'state' => '\WooletClient\Model\SignatureRequestState',
        'callback_url' => 'string',
        'vars' => 'object',
        'lang' => 'string',
        'public' => 'bool',
        'hash_to_sign' => 'string',
        'activation' => 'int',
        'deadline' => 'int',
        'identity_url' => 'string',
        'file_name' => 'string',
        'file_url' => 'string',
        'max_signatures' => 'int',
        'authorized_signees' => '\WooletClient\Model\AuthorizedSignee[]',
        'watchers' => '\WooletClient\Model\Watcher[]',
        'ordered' => 'bool',
        'anchors' => '\WooletClient\Model\Anchor[]',
        'audit_trail_data' => 'string',
        'audit_trail_anchor_id' => 'string',
        'proof_bundle_complete' => 'bool',
        'test_mode' => 'bool'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'created' => 'int64',
        'last_modified' => 'int64',
        'name' => null,
        'state' => null,
        'callback_url' => null,
        'vars' => null,
        'lang' => null,
        'public' => null,
        'hash_to_sign' => null,
        'activation' => 'int64',
        'deadline' => 'int64',
        'identity_url' => null,
        'file_name' => null,
        'file_url' => null,
        'max_signatures' => 'int32',
        'authorized_signees' => null,
        'watchers' => null,
        'ordered' => null,
        'anchors' => null,
        'audit_trail_data' => null,
        'audit_trail_anchor_id' => null,
        'proof_bundle_complete' => null,
        'test_mode' => null];

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
        'id' => 'id',
        'created' => 'created',
        'last_modified' => 'lastModified',
        'name' => 'name',
        'state' => 'state',
        'callback_url' => 'callbackURL',
        'vars' => 'vars',
        'lang' => 'lang',
        'public' => 'public',
        'hash_to_sign' => 'hashToSign',
        'activation' => 'activation',
        'deadline' => 'deadline',
        'identity_url' => 'identityURL',
        'file_name' => 'fileName',
        'file_url' => 'fileURL',
        'max_signatures' => 'maxSignatures',
        'authorized_signees' => 'authorizedSignees',
        'watchers' => 'watchers',
        'ordered' => 'ordered',
        'anchors' => 'anchors',
        'audit_trail_data' => 'auditTrailData',
        'audit_trail_anchor_id' => 'auditTrailAnchorId',
        'proof_bundle_complete' => 'proofBundleComplete',
        'test_mode' => 'testMode'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'last_modified' => 'setLastModified',
        'name' => 'setName',
        'state' => 'setState',
        'callback_url' => 'setCallbackUrl',
        'vars' => 'setVars',
        'lang' => 'setLang',
        'public' => 'setPublic',
        'hash_to_sign' => 'setHashToSign',
        'activation' => 'setActivation',
        'deadline' => 'setDeadline',
        'identity_url' => 'setIdentityUrl',
        'file_name' => 'setFileName',
        'file_url' => 'setFileUrl',
        'max_signatures' => 'setMaxSignatures',
        'authorized_signees' => 'setAuthorizedSignees',
        'watchers' => 'setWatchers',
        'ordered' => 'setOrdered',
        'anchors' => 'setAnchors',
        'audit_trail_data' => 'setAuditTrailData',
        'audit_trail_anchor_id' => 'setAuditTrailAnchorId',
        'proof_bundle_complete' => 'setProofBundleComplete',
        'test_mode' => 'setTestMode'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'last_modified' => 'getLastModified',
        'name' => 'getName',
        'state' => 'getState',
        'callback_url' => 'getCallbackUrl',
        'vars' => 'getVars',
        'lang' => 'getLang',
        'public' => 'getPublic',
        'hash_to_sign' => 'getHashToSign',
        'activation' => 'getActivation',
        'deadline' => 'getDeadline',
        'identity_url' => 'getIdentityUrl',
        'file_name' => 'getFileName',
        'file_url' => 'getFileUrl',
        'max_signatures' => 'getMaxSignatures',
        'authorized_signees' => 'getAuthorizedSignees',
        'watchers' => 'getWatchers',
        'ordered' => 'getOrdered',
        'anchors' => 'getAnchors',
        'audit_trail_data' => 'getAuditTrailData',
        'audit_trail_anchor_id' => 'getAuditTrailAnchorId',
        'proof_bundle_complete' => 'getProofBundleComplete',
        'test_mode' => 'getTestMode'];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['vars'] = isset($data['vars']) ? $data['vars'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['hash_to_sign'] = isset($data['hash_to_sign']) ? $data['hash_to_sign'] : null;
        $this->container['activation'] = isset($data['activation']) ? $data['activation'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
        $this->container['identity_url'] = isset($data['identity_url']) ? $data['identity_url'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_url'] = isset($data['file_url']) ? $data['file_url'] : null;
        $this->container['max_signatures'] = isset($data['max_signatures']) ? $data['max_signatures'] : null;
        $this->container['authorized_signees'] = isset($data['authorized_signees']) ? $data['authorized_signees'] : null;
        $this->container['watchers'] = isset($data['watchers']) ? $data['watchers'] : null;
        $this->container['ordered'] = isset($data['ordered']) ? $data['ordered'] : null;
        $this->container['anchors'] = isset($data['anchors']) ? $data['anchors'] : null;
        $this->container['audit_trail_data'] = isset($data['audit_trail_data']) ? $data['audit_trail_data'] : null;
        $this->container['audit_trail_anchor_id'] = isset($data['audit_trail_anchor_id']) ? $data['audit_trail_anchor_id'] : null;
        $this->container['proof_bundle_complete'] = isset($data['proof_bundle_complete']) ? $data['proof_bundle_complete'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['hash_to_sign'] === null) {
            $invalidProperties[] = "'hash_to_sign' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Signature request identifier. It is allocated by the platform, and so must not be provided at creation time.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
     * Gets created
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int $created Date of creation (in milliseconds since Unix epoch).
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return int
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param int $last_modified Date of last modification (in milliseconds since Unix epoch).
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;
        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the signature request (doesn't need to be unique).
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets state
     *
     * @return \WooletClient\Model\SignatureRequestState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \WooletClient\Model\SignatureRequestState $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url Web hook to be called by the platform whenever:<br> - the `state` property changes<br> - a new signature is registered<br> - the `proofBundleComplete` property is set to `true` by the platform (which means that the proof bundle and the Signature Attestation document are ready to download)<br> The platform does a POST request on this URL with the signature request as a JSON object in the request body.<br> Verifying the authenticity of the callback can be done by checking the HMAC-SHA1 signature of the request body provided by the platform in the `x-woleet-signature` header.<br> Please refer to the <a target=\"_blank\" href=\"https://doc.woleet.io/reference#using-callbacks\">documentation</a> for more details.
     *
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;
        return $this;
    }

    /**
     * Gets vars
     *
     * @return object
     */
    public function getVars()
    {
        return $this->container['vars'];
    }

    /**
     * Sets vars
     *
     * @param object $vars A set of variables (key/value pairs) that can be used to customize the signature request workflow.<br> Values must be of type null, boolean, string or number: nested JSON objects are not allowed.<br> In particular, these variables can be used to customize the various email sent and disable some of these emails.<br> Please refer to the <a target=\"_blank\" href=\"https://doc.woleet.io/reference#custom-signature-workflow\">documentation</a> for more details.<br> **This property is only available to the owner and the signers of the signature request.**
     *
     * @return $this
     */
    public function setVars($vars)
    {
        $this->container['vars'] = $vars;
        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang The preferred language (provided as an ISO 639-1 string) to use when emailing the signers.
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;
        return $this;
    }

    /**
     * Gets public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public `true` (or unset) if the signature request is public (ie. discoverable by its `hashToSign`) or `false` if it must be private (ie. not discoverable).<br> **Signature anchors created in the scope of a signature request inherit from its `public` property.**
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;
        return $this;
    }

    /**
     * Gets hash_to_sign
     *
     * @return string
     */
    public function getHashToSign()
    {
        return $this->container['hash_to_sign'];
    }

    /**
     * Sets hash_to_sign
     *
     * @param string $hash_to_sign SHA256 hash (ie. the fingerprint) of the file to sign.<br> The value must be provided as an hexadecimal lowercase string. The hash of the empty file is forbidden.<br>
     *
     * @return $this
     */
    public function setHashToSign($hash_to_sign)
    {
        $this->container['hash_to_sign'] = $hash_to_sign;
        return $this;
    }

    /**
     * Gets activation
     *
     * @return int
     */
    public function getActivation()
    {
        return $this->container['activation'];
    }

    /**
     * Sets activation
     *
     * @param int $activation Date of activation of the signature request (in milliseconds since Unix epoch).<br> When not set or null, no activation date is applied.
     *
     * @return $this
     */
    public function setActivation($activation)
    {
        $this->container['activation'] = $activation;
        return $this;
    }

    /**
     * Gets deadline
     *
     * @return int
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
     * Sets deadline
     *
     * @param int $deadline Deadline of the signature request (in milliseconds since Unix epoch).<br> When not set or null, no deadline is applied.<br> If set, signatures registered after the deadline are refused.
     *
     * @return $this
     */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;
        return $this;
    }

    /**
     * Gets identity_url
     *
     * @return string
     */
    public function getIdentityUrl()
    {
        return $this->container['identity_url'];
    }

    /**
     * Sets identity_url
     *
     * @param string $identity_url Web hook to use to verify the signers' identity.<br> If set, it is used to verify the identity of the signers at signature registration time.
     *
     * @return $this
     */
    public function setIdentityUrl($identity_url)
    {
        $this->container['identity_url'] = $identity_url;
        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name Name of the file to sign.<br> If set, the signature application can use it to give an indication about the file to the signers.
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;
        return $this;
    }

    /**
     * Gets file_url
     *
     * @return string
     */
    public function getFileUrl()
    {
        return $this->container['file_url'];
    }

    /**
     * Sets file_url
     *
     * @param string $file_url Public URL of the file to sign.<br> If set, the signature application can use it to download and present the file to the signers.
     *
     * @return $this
     */
    public function setFileUrl($file_url)
    {
        $this->container['file_url'] = $file_url;
        return $this;
    }

    /**
     * Gets max_signatures
     *
     * @return int
     */
    public function getMaxSignatures()
    {
        return $this->container['max_signatures'];
    }

    /**
     * Sets max_signatures
     *
     * @param int $max_signatures Maximum number of signatures to accept for this signature request.<br> When not set or null, no maximum is applied.<br> This property and the `authorizedSignees` property are mutually exclusive.<br> **This property is only available to the owner of the signature request.**
     *
     * @return $this
     */
    public function setMaxSignatures($max_signatures)
    {
        $this->container['max_signatures'] = $max_signatures;
        return $this;
    }

    /**
     * Gets authorized_signees
     *
     * @return \WooletClient\Model\AuthorizedSignee[]
     */
    public function getAuthorizedSignees()
    {
        return $this->container['authorized_signees'];
    }

    /**
     * Sets authorized_signees
     *
     * @param \WooletClient\Model\AuthorizedSignee[] $authorized_signees List of all signers authorized to register their signature (no duplicate is authorized).<br> When not set or null, anybody can sign the signature request.<br> If set, signers not being part of this list are not allowed to register their signature.<br> This property and the `maxSignatures` property are mutually exclusive.
     *
     * @return $this
     */
    public function setAuthorizedSignees($authorized_signees)
    {
        $this->container['authorized_signees'] = $authorized_signees;
        return $this;
    }

    /**
     * Gets watchers
     *
     * @return \WooletClient\Model\Watcher[]
     */
    public function getWatchers()
    {
        return $this->container['watchers'];
    }

    /**
     * Sets watchers
     *
     * @param \WooletClient\Model\Watcher[] $watchers List of all watchers to notify by email about the progress of the signature request.<br> The set of events being notified are:<br> - the signature request is activated<br> - a signer signs the signature request<br> - the signature request is canceled<br> - the signature request is closed or completed and the Signature Attestation document is ready **This property is only available to the owner of the signature request.**
     *
     * @return $this
     */
    public function setWatchers($watchers)
    {
        $this->container['watchers'] = $watchers;
        return $this;
    }

    /**
     * Gets ordered
     *
     * @return bool
     */
    public function getOrdered()
    {
        return $this->container['ordered'];
    }

    /**
     * Sets ordered
     *
     * @param bool $ordered `true` if the signers must sign in their order of appearance in the `authorizedSignees` list.<br> In this mode, each signer is notified only once the previous signer completes his signature.<br> **Only stateful signature request can be ordered.**
     *
     * @return $this
     */
    public function setOrdered($ordered)
    {
        $this->container['ordered'] = $ordered;
        return $this;
    }

    /**
     * Gets anchors
     *
     * @return \WooletClient\Model\Anchor[]
     */
    public function getAnchors()
    {
        return $this->container['anchors'];
    }

    /**
     * Sets anchors
     *
     * @param \WooletClient\Model\Anchor[] $anchors List of signature anchors created in the scope of this signature request<br> A signature anchor is created each time a new signature is registered.
     *
     * @return $this
     */
    public function setAnchors($anchors)
    {
        $this->container['anchors'] = $anchors;
        return $this;
    }

    /**
     * Gets audit_trail_data
     *
     * @return string
     */
    public function getAuditTrailData()
    {
        return $this->container['audit_trail_data'];
    }

    /**
     * Sets audit_trail_data
     *
     * @param string $audit_trail_data Audit trail data.<br> When the signature request is COMPLETED (by the platform) or CLOSED (by the requester) its audit trail (ie. the list of events recorded by the platform during the signature request workflow) is serialized to a JSON object and Base64 encoded. This data is then signed by the platform and recorded in this property.
     *
     * @return $this
     */
    public function setAuditTrailData($audit_trail_data)
    {
        $this->container['audit_trail_data'] = $audit_trail_data;
        return $this;
    }

    /**
     * Gets audit_trail_anchor_id
     *
     * @return string
     */
    public function getAuditTrailAnchorId()
    {
        return $this->container['audit_trail_anchor_id'];
    }

    /**
     * Sets audit_trail_anchor_id
     *
     * @param string $audit_trail_anchor_id Identifier of the signature anchor created by the platform to sign the audit trail data.<br> This property is set only once the audit trail is generated and can be used to retrieve its proof receipt.
     *
     * @return $this
     */
    public function setAuditTrailAnchorId($audit_trail_anchor_id)
    {
        $this->container['audit_trail_anchor_id'] = $audit_trail_anchor_id;
        return $this;
    }

    /**
     * Gets proof_bundle_complete
     *
     * @return bool
     */
    public function getProofBundleComplete()
    {
        return $this->container['proof_bundle_complete'];
    }

    /**
     * Sets proof_bundle_complete
     *
     * @param bool $proof_bundle_complete `true` when all pieces of evidence are available.<br> The proof bundle and the Signature Attestation are ready to download.
     *
     * @return $this
     */
    public function setProofBundleComplete($proof_bundle_complete)
    {
        $this->container['proof_bundle_complete'] = $proof_bundle_complete;
        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return bool
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool $test_mode **WARNING: Do not use (test purpose only).**
     *
     * @return $this
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;
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