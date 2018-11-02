<?php
/**
 * UpdateSubmissionDataRequestData
 *
 * PHP version 5
 *
 * @category Class
 * @package  FormAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API v1
 *
 * FormAPI is a service that helps you fill out and sign PDF templates.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FormAPI\Model;

use \ArrayAccess;
use \FormAPI\ObjectSerializer;

/**
 * UpdateSubmissionDataRequestData Class Doc Comment
 *
 * @category Class
 * @package  FormAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateSubmissionDataRequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'update_submission_data_request_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'email' => 'string',
        'order' => 'int',
        'fields' => 'string[]',
        'metadata' => 'object',
        'auth_type' => 'string',
        'auth_second_factor_type' => 'string',
        'auth_provider' => 'string',
        'auth_session_started_at' => 'string',
        'auth_session_id_hash' => 'string',
        'auth_user_id_hash' => 'string',
        'auth_username_hash' => 'string',
        'auth_phone_number_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'email' => null,
        'order' => null,
        'fields' => null,
        'metadata' => null,
        'auth_type' => null,
        'auth_second_factor_type' => null,
        'auth_provider' => null,
        'auth_session_started_at' => null,
        'auth_session_id_hash' => null,
        'auth_user_id_hash' => null,
        'auth_username_hash' => null,
        'auth_phone_number_hash' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'email' => 'email',
        'order' => 'order',
        'fields' => 'fields',
        'metadata' => 'metadata',
        'auth_type' => 'auth_type',
        'auth_second_factor_type' => 'auth_second_factor_type',
        'auth_provider' => 'auth_provider',
        'auth_session_started_at' => 'auth_session_started_at',
        'auth_session_id_hash' => 'auth_session_id_hash',
        'auth_user_id_hash' => 'auth_user_id_hash',
        'auth_username_hash' => 'auth_username_hash',
        'auth_phone_number_hash' => 'auth_phone_number_hash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'email' => 'setEmail',
        'order' => 'setOrder',
        'fields' => 'setFields',
        'metadata' => 'setMetadata',
        'auth_type' => 'setAuthType',
        'auth_second_factor_type' => 'setAuthSecondFactorType',
        'auth_provider' => 'setAuthProvider',
        'auth_session_started_at' => 'setAuthSessionStartedAt',
        'auth_session_id_hash' => 'setAuthSessionIdHash',
        'auth_user_id_hash' => 'setAuthUserIdHash',
        'auth_username_hash' => 'setAuthUsernameHash',
        'auth_phone_number_hash' => 'setAuthPhoneNumberHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'email' => 'getEmail',
        'order' => 'getOrder',
        'fields' => 'getFields',
        'metadata' => 'getMetadata',
        'auth_type' => 'getAuthType',
        'auth_second_factor_type' => 'getAuthSecondFactorType',
        'auth_provider' => 'getAuthProvider',
        'auth_session_started_at' => 'getAuthSessionStartedAt',
        'auth_session_id_hash' => 'getAuthSessionIdHash',
        'auth_user_id_hash' => 'getAuthUserIdHash',
        'auth_username_hash' => 'getAuthUsernameHash',
        'auth_phone_number_hash' => 'getAuthPhoneNumberHash'
    ];

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
        return self::$openAPIModelName;
    }

    const AUTH_TYPE_NONE = 'none';
    const AUTH_TYPE_PASSWORD = 'password';
    const AUTH_TYPE_OAUTH = 'oauth';
    const AUTH_TYPE_EMAIL_LINK = 'email_link';
    const AUTH_TYPE_PHONE_NUMBER = 'phone_number';
    const AUTH_TYPE_LDAP = 'ldap';
    const AUTH_TYPE_SAML = 'saml';
    const AUTH_SECOND_FACTOR_TYPE_NONE = 'none';
    const AUTH_SECOND_FACTOR_TYPE_PHONE_NUMBER = 'phone_number';
    const AUTH_SECOND_FACTOR_TYPE_TOTP = 'totp';
    const AUTH_SECOND_FACTOR_TYPE_MOBILE_PUSH = 'mobile_push';
    const AUTH_SECOND_FACTOR_TYPE_SECURITY_KEY = 'security_key';
    const AUTH_SECOND_FACTOR_TYPE_FINGERPRINT = 'fingerprint';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_NONE,
            self::AUTH_TYPE_PASSWORD,
            self::AUTH_TYPE_OAUTH,
            self::AUTH_TYPE_EMAIL_LINK,
            self::AUTH_TYPE_PHONE_NUMBER,
            self::AUTH_TYPE_LDAP,
            self::AUTH_TYPE_SAML,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthSecondFactorTypeAllowableValues()
    {
        return [
            self::AUTH_SECOND_FACTOR_TYPE_NONE,
            self::AUTH_SECOND_FACTOR_TYPE_PHONE_NUMBER,
            self::AUTH_SECOND_FACTOR_TYPE_TOTP,
            self::AUTH_SECOND_FACTOR_TYPE_MOBILE_PUSH,
            self::AUTH_SECOND_FACTOR_TYPE_SECURITY_KEY,
            self::AUTH_SECOND_FACTOR_TYPE_FINGERPRINT,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['auth_type'] = isset($data['auth_type']) ? $data['auth_type'] : null;
        $this->container['auth_second_factor_type'] = isset($data['auth_second_factor_type']) ? $data['auth_second_factor_type'] : null;
        $this->container['auth_provider'] = isset($data['auth_provider']) ? $data['auth_provider'] : null;
        $this->container['auth_session_started_at'] = isset($data['auth_session_started_at']) ? $data['auth_session_started_at'] : null;
        $this->container['auth_session_id_hash'] = isset($data['auth_session_id_hash']) ? $data['auth_session_id_hash'] : null;
        $this->container['auth_user_id_hash'] = isset($data['auth_user_id_hash']) ? $data['auth_user_id_hash'] : null;
        $this->container['auth_username_hash'] = isset($data['auth_username_hash']) ? $data['auth_username_hash'] : null;
        $this->container['auth_phone_number_hash'] = isset($data['auth_phone_number_hash']) ? $data['auth_phone_number_hash'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($this->container['auth_type']) && !in_array($this->container['auth_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auth_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAuthSecondFactorTypeAllowableValues();
        if (!is_null($this->container['auth_second_factor_type']) && !in_array($this->container['auth_second_factor_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auth_second_factor_type', must be one of '%s'",
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[]|null $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string|null $auth_type auth_type
     *
     * @return $this
     */
    public function setAuthType($auth_type)
    {
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($auth_type) && !in_array($auth_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auth_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets auth_second_factor_type
     *
     * @return string|null
     */
    public function getAuthSecondFactorType()
    {
        return $this->container['auth_second_factor_type'];
    }

    /**
     * Sets auth_second_factor_type
     *
     * @param string|null $auth_second_factor_type auth_second_factor_type
     *
     * @return $this
     */
    public function setAuthSecondFactorType($auth_second_factor_type)
    {
        $allowedValues = $this->getAuthSecondFactorTypeAllowableValues();
        if (!is_null($auth_second_factor_type) && !in_array($auth_second_factor_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auth_second_factor_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_second_factor_type'] = $auth_second_factor_type;

        return $this;
    }

    /**
     * Gets auth_provider
     *
     * @return string|null
     */
    public function getAuthProvider()
    {
        return $this->container['auth_provider'];
    }

    /**
     * Sets auth_provider
     *
     * @param string|null $auth_provider auth_provider
     *
     * @return $this
     */
    public function setAuthProvider($auth_provider)
    {
        $this->container['auth_provider'] = $auth_provider;

        return $this;
    }

    /**
     * Gets auth_session_started_at
     *
     * @return string|null
     */
    public function getAuthSessionStartedAt()
    {
        return $this->container['auth_session_started_at'];
    }

    /**
     * Sets auth_session_started_at
     *
     * @param string|null $auth_session_started_at auth_session_started_at
     *
     * @return $this
     */
    public function setAuthSessionStartedAt($auth_session_started_at)
    {
        $this->container['auth_session_started_at'] = $auth_session_started_at;

        return $this;
    }

    /**
     * Gets auth_session_id_hash
     *
     * @return string|null
     */
    public function getAuthSessionIdHash()
    {
        return $this->container['auth_session_id_hash'];
    }

    /**
     * Sets auth_session_id_hash
     *
     * @param string|null $auth_session_id_hash auth_session_id_hash
     *
     * @return $this
     */
    public function setAuthSessionIdHash($auth_session_id_hash)
    {
        $this->container['auth_session_id_hash'] = $auth_session_id_hash;

        return $this;
    }

    /**
     * Gets auth_user_id_hash
     *
     * @return string|null
     */
    public function getAuthUserIdHash()
    {
        return $this->container['auth_user_id_hash'];
    }

    /**
     * Sets auth_user_id_hash
     *
     * @param string|null $auth_user_id_hash auth_user_id_hash
     *
     * @return $this
     */
    public function setAuthUserIdHash($auth_user_id_hash)
    {
        $this->container['auth_user_id_hash'] = $auth_user_id_hash;

        return $this;
    }

    /**
     * Gets auth_username_hash
     *
     * @return string|null
     */
    public function getAuthUsernameHash()
    {
        return $this->container['auth_username_hash'];
    }

    /**
     * Sets auth_username_hash
     *
     * @param string|null $auth_username_hash auth_username_hash
     *
     * @return $this
     */
    public function setAuthUsernameHash($auth_username_hash)
    {
        $this->container['auth_username_hash'] = $auth_username_hash;

        return $this;
    }

    /**
     * Gets auth_phone_number_hash
     *
     * @return string|null
     */
    public function getAuthPhoneNumberHash()
    {
        return $this->container['auth_phone_number_hash'];
    }

    /**
     * Sets auth_phone_number_hash
     *
     * @param string|null $auth_phone_number_hash auth_phone_number_hash
     *
     * @return $this
     */
    public function setAuthPhoneNumberHash($auth_phone_number_hash)
    {
        $this->container['auth_phone_number_hash'] = $auth_phone_number_hash;

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
     * @param mixed   $value  Value to be set
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


