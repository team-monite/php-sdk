<?php
/**
 * Recurrence
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
 * Recurrence Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Recurrence implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Recurrence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_id' => 'string',
        'start_year' => 'int',
        'start_month' => 'int',
        'end_year' => 'int',
        'end_month' => 'int',
        'day_of_month' => '\OpenAPI\Client\Model\DayOfMonth',
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'iterations' => '\OpenAPI\Client\Model\RecurrenceIteration[]',
        'status' => '\OpenAPI\Client\Model\RecurrenceStatus',
        'current_iteration' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoice_id' => 'uuid',
        'start_year' => null,
        'start_month' => null,
        'end_year' => null,
        'end_month' => null,
        'day_of_month' => null,
        'id' => 'uuid',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'iterations' => null,
        'status' => null,
        'current_iteration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invoice_id' => false,
		'start_year' => false,
		'start_month' => false,
		'end_year' => false,
		'end_month' => false,
		'day_of_month' => false,
		'id' => false,
		'created_at' => false,
		'updated_at' => false,
		'iterations' => false,
		'status' => false,
		'current_iteration' => false
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
        'invoice_id' => 'invoice_id',
        'start_year' => 'start_year',
        'start_month' => 'start_month',
        'end_year' => 'end_year',
        'end_month' => 'end_month',
        'day_of_month' => 'day_of_month',
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'iterations' => 'iterations',
        'status' => 'status',
        'current_iteration' => 'current_iteration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_id' => 'setInvoiceId',
        'start_year' => 'setStartYear',
        'start_month' => 'setStartMonth',
        'end_year' => 'setEndYear',
        'end_month' => 'setEndMonth',
        'day_of_month' => 'setDayOfMonth',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'iterations' => 'setIterations',
        'status' => 'setStatus',
        'current_iteration' => 'setCurrentIteration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_id' => 'getInvoiceId',
        'start_year' => 'getStartYear',
        'start_month' => 'getStartMonth',
        'end_year' => 'getEndYear',
        'end_month' => 'getEndMonth',
        'day_of_month' => 'getDayOfMonth',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'iterations' => 'getIterations',
        'status' => 'getStatus',
        'current_iteration' => 'getCurrentIteration'
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
        $this->setIfExists('invoice_id', $data ?? [], null);
        $this->setIfExists('start_year', $data ?? [], null);
        $this->setIfExists('start_month', $data ?? [], null);
        $this->setIfExists('end_year', $data ?? [], null);
        $this->setIfExists('end_month', $data ?? [], null);
        $this->setIfExists('day_of_month', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('iterations', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('current_iteration', $data ?? [], null);
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

        if ($this->container['invoice_id'] === null) {
            $invalidProperties[] = "'invoice_id' can't be null";
        }
        if ($this->container['start_year'] === null) {
            $invalidProperties[] = "'start_year' can't be null";
        }
        if (($this->container['start_year'] > 2077)) {
            $invalidProperties[] = "invalid value for 'start_year', must be smaller than or equal to 2077.";
        }

        if ($this->container['start_month'] === null) {
            $invalidProperties[] = "'start_month' can't be null";
        }
        if (($this->container['start_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'start_month', must be smaller than or equal to 12.";
        }

        if (($this->container['start_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_month', must be bigger than or equal to 1.";
        }

        if ($this->container['end_year'] === null) {
            $invalidProperties[] = "'end_year' can't be null";
        }
        if (($this->container['end_year'] > 2077)) {
            $invalidProperties[] = "invalid value for 'end_year', must be smaller than or equal to 2077.";
        }

        if ($this->container['end_month'] === null) {
            $invalidProperties[] = "'end_month' can't be null";
        }
        if (($this->container['end_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'end_month', must be smaller than or equal to 12.";
        }

        if (($this->container['end_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'end_month', must be bigger than or equal to 1.";
        }

        if ($this->container['day_of_month'] === null) {
            $invalidProperties[] = "'day_of_month' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['iterations'] === null) {
            $invalidProperties[] = "'iterations' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['current_iteration'] === null) {
            $invalidProperties[] = "'current_iteration' can't be null";
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
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id invoice_id
     *
     * @return self
     */
    public function setInvoiceId($invoice_id)
    {
        if (is_null($invoice_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_id cannot be null');
        }
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets start_year
     *
     * @return int
     */
    public function getStartYear()
    {
        return $this->container['start_year'];
    }

    /**
     * Sets start_year
     *
     * @param int $start_year start_year
     *
     * @return self
     */
    public function setStartYear($start_year)
    {
        if (is_null($start_year)) {
            throw new \InvalidArgumentException('non-nullable start_year cannot be null');
        }

        if (($start_year > 2077)) {
            throw new \InvalidArgumentException('invalid value for $start_year when calling Recurrence., must be smaller than or equal to 2077.');
        }

        $this->container['start_year'] = $start_year;

        return $this;
    }

    /**
     * Gets start_month
     *
     * @return int
     */
    public function getStartMonth()
    {
        return $this->container['start_month'];
    }

    /**
     * Sets start_month
     *
     * @param int $start_month start_month
     *
     * @return self
     */
    public function setStartMonth($start_month)
    {
        if (is_null($start_month)) {
            throw new \InvalidArgumentException('non-nullable start_month cannot be null');
        }

        if (($start_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $start_month when calling Recurrence., must be smaller than or equal to 12.');
        }
        if (($start_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $start_month when calling Recurrence., must be bigger than or equal to 1.');
        }

        $this->container['start_month'] = $start_month;

        return $this;
    }

    /**
     * Gets end_year
     *
     * @return int
     */
    public function getEndYear()
    {
        return $this->container['end_year'];
    }

    /**
     * Sets end_year
     *
     * @param int $end_year end_year
     *
     * @return self
     */
    public function setEndYear($end_year)
    {
        if (is_null($end_year)) {
            throw new \InvalidArgumentException('non-nullable end_year cannot be null');
        }

        if (($end_year > 2077)) {
            throw new \InvalidArgumentException('invalid value for $end_year when calling Recurrence., must be smaller than or equal to 2077.');
        }

        $this->container['end_year'] = $end_year;

        return $this;
    }

    /**
     * Gets end_month
     *
     * @return int
     */
    public function getEndMonth()
    {
        return $this->container['end_month'];
    }

    /**
     * Sets end_month
     *
     * @param int $end_month end_month
     *
     * @return self
     */
    public function setEndMonth($end_month)
    {
        if (is_null($end_month)) {
            throw new \InvalidArgumentException('non-nullable end_month cannot be null');
        }

        if (($end_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $end_month when calling Recurrence., must be smaller than or equal to 12.');
        }
        if (($end_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $end_month when calling Recurrence., must be bigger than or equal to 1.');
        }

        $this->container['end_month'] = $end_month;

        return $this;
    }

    /**
     * Gets day_of_month
     *
     * @return \OpenAPI\Client\Model\DayOfMonth
     */
    public function getDayOfMonth()
    {
        return $this->container['day_of_month'];
    }

    /**
     * Sets day_of_month
     *
     * @param \OpenAPI\Client\Model\DayOfMonth $day_of_month day_of_month
     *
     * @return self
     */
    public function setDayOfMonth($day_of_month)
    {
        if (is_null($day_of_month)) {
            throw new \InvalidArgumentException('non-nullable day_of_month cannot be null');
        }
        $this->container['day_of_month'] = $day_of_month;

        return $this;
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
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Time at which the receivable was created. Timestamps follow the ISO 8601 standard.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Time at which the receivable was last updated. Timestamps follow the ISO 8601 standard.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets iterations
     *
     * @return \OpenAPI\Client\Model\RecurrenceIteration[]
     */
    public function getIterations()
    {
        return $this->container['iterations'];
    }

    /**
     * Sets iterations
     *
     * @param \OpenAPI\Client\Model\RecurrenceIteration[] $iterations iterations
     *
     * @return self
     */
    public function setIterations($iterations)
    {
        if (is_null($iterations)) {
            throw new \InvalidArgumentException('non-nullable iterations cannot be null');
        }
        $this->container['iterations'] = $iterations;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\RecurrenceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\RecurrenceStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets current_iteration
     *
     * @return int
     */
    public function getCurrentIteration()
    {
        return $this->container['current_iteration'];
    }

    /**
     * Sets current_iteration
     *
     * @param int $current_iteration current_iteration
     *
     * @return self
     */
    public function setCurrentIteration($current_iteration)
    {
        if (is_null($current_iteration)) {
            throw new \InvalidArgumentException('non-nullable current_iteration cannot be null');
        }
        $this->container['current_iteration'] = $current_iteration;

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


