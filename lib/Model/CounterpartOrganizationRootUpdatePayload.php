<?php
/**
 * CounterpartOrganizationRootUpdatePayload
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Monite Partner API
 *
 * The Monite REST API, for Monite partners to integrate with our solution.
 *
 * The version of the OpenAPI document: 2023-03-14
 * Contact: developers@monite.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CounterpartOrganizationRootUpdatePayload Class Doc Comment
 *
 * @category Class
 * @description Represents counterparts that are organizations (juridical persons).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CounterpartOrganizationRootUpdatePayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CounterpartOrganizationRootUpdatePayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_shipping_address_id' => 'string',
        'default_billing_address_id' => 'string',
        'type' => 'string',
        'organization' => '\OpenAPI\Client\Model\CounterpartOrganizationUpdatePayload',
        'created_automatically' => 'bool',
        'reminders_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_shipping_address_id' => 'uuid',
        'default_billing_address_id' => 'uuid',
        'type' => null,
        'organization' => null,
        'created_automatically' => null,
        'reminders_enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default_shipping_address_id' => false,
		'default_billing_address_id' => false,
		'type' => false,
		'organization' => false,
		'created_automatically' => false,
		'reminders_enabled' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'default_shipping_address_id' => 'default_shipping_address_id',
        'default_billing_address_id' => 'default_billing_address_id',
        'type' => 'type',
        'organization' => 'organization',
        'created_automatically' => 'created_automatically',
        'reminders_enabled' => 'reminders_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_shipping_address_id' => 'setDefaultShippingAddressId',
        'default_billing_address_id' => 'setDefaultBillingAddressId',
        'type' => 'setType',
        'organization' => 'setOrganization',
        'created_automatically' => 'setCreatedAutomatically',
        'reminders_enabled' => 'setRemindersEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_shipping_address_id' => 'getDefaultShippingAddressId',
        'default_billing_address_id' => 'getDefaultBillingAddressId',
        'type' => 'getType',
        'organization' => 'getOrganization',
        'created_automatically' => 'getCreatedAutomatically',
        'reminders_enabled' => 'getRemindersEnabled'
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

    public const TYPE_ORGANIZATION = 'organization';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ORGANIZATION,
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
        $this->setIfExists('default_shipping_address_id', $data ?? [], null);
        $this->setIfExists('default_billing_address_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('created_automatically', $data ?? [], false);
        $this->setIfExists('reminders_enabled', $data ?? [], true);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
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
     * Gets default_shipping_address_id
     *
     * @return string|null
     */
    public function getDefaultShippingAddressId()
    {
        return $this->container['default_shipping_address_id'];
    }

    /**
     * Sets default_shipping_address_id
     *
     * @param string|null $default_shipping_address_id ID of the shipping address.
     *
     * @return self
     */
    public function setDefaultShippingAddressId($default_shipping_address_id)
    {
        if (is_null($default_shipping_address_id)) {
            throw new \InvalidArgumentException('non-nullable default_shipping_address_id cannot be null');
        }
        $this->container['default_shipping_address_id'] = $default_shipping_address_id;

        return $this;
    }

    /**
     * Gets default_billing_address_id
     *
     * @return string|null
     */
    public function getDefaultBillingAddressId()
    {
        return $this->container['default_billing_address_id'];
    }

    /**
     * Sets default_billing_address_id
     *
     * @param string|null $default_billing_address_id ID of the billing address.
     *
     * @return self
     */
    public function setDefaultBillingAddressId($default_billing_address_id)
    {
        if (is_null($default_billing_address_id)) {
            throw new \InvalidArgumentException('non-nullable default_billing_address_id cannot be null');
        }
        $this->container['default_billing_address_id'] = $default_billing_address_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Must be \"organization\".
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \OpenAPI\Client\Model\CounterpartOrganizationUpdatePayload
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \OpenAPI\Client\Model\CounterpartOrganizationUpdatePayload $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
        }
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets created_automatically
     *
     * @return bool|null
     */
    public function getCreatedAutomatically()
    {
        return $this->container['created_automatically'];
    }

    /**
     * Sets created_automatically
     *
     * @param bool|null $created_automatically `true` if the counterpart was created automatically by Monite when processing incoming invoices with OCR. `false` if the counterpart was created by the API client.
     *
     * @return self
     */
    public function setCreatedAutomatically($created_automatically)
    {
        if (is_null($created_automatically)) {
            throw new \InvalidArgumentException('non-nullable created_automatically cannot be null');
        }
        $this->container['created_automatically'] = $created_automatically;

        return $this;
    }

    /**
     * Gets reminders_enabled
     *
     * @return bool|null
     */
    public function getRemindersEnabled()
    {
        return $this->container['reminders_enabled'];
    }

    /**
     * Sets reminders_enabled
     *
     * @param bool|null $reminders_enabled reminders_enabled
     *
     * @return self
     */
    public function setRemindersEnabled($reminders_enabled)
    {
        if (is_null($reminders_enabled)) {
            throw new \InvalidArgumentException('non-nullable reminders_enabled cannot be null');
        }
        $this->container['reminders_enabled'] = $reminders_enabled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


