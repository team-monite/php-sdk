<?php
/**
 * UpdateInvoice
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
 * UpdateInvoice Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => '\OpenAPI\Client\Model\CurrencyEnum',
        'vat_exempt' => 'bool',
        'vat_exemption_rationale' => 'string',
        'memo' => 'string',
        'discount' => '\OpenAPI\Client\Model\CreditNoteResponsePayloadDiscount',
        'counterpart_shipping_address' => '\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartShippingAddress',
        'counterpart_billing_address' => '\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartBillingAddress',
        'line_items' => '\OpenAPI\Client\Model\LineItemUpdate[]',
        'counterpart_id' => 'string',
        'contact_id' => 'string',
        'payment_terms_id' => 'string',
        'payment_reminder_id' => 'string',
        'overdue_reminder_id' => 'string',
        'fulfillment_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'vat_exempt' => null,
        'vat_exemption_rationale' => null,
        'memo' => null,
        'discount' => null,
        'counterpart_shipping_address' => null,
        'counterpart_billing_address' => null,
        'line_items' => null,
        'counterpart_id' => 'uuid',
        'contact_id' => 'uuid',
        'payment_terms_id' => 'uuid',
        'payment_reminder_id' => 'uuid',
        'overdue_reminder_id' => 'uuid',
        'fulfillment_date' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currency' => false,
		'vat_exempt' => false,
		'vat_exemption_rationale' => false,
		'memo' => false,
		'discount' => false,
		'counterpart_shipping_address' => false,
		'counterpart_billing_address' => false,
		'line_items' => false,
		'counterpart_id' => false,
		'contact_id' => false,
		'payment_terms_id' => false,
		'payment_reminder_id' => false,
		'overdue_reminder_id' => false,
		'fulfillment_date' => false
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
        'currency' => 'currency',
        'vat_exempt' => 'vat_exempt',
        'vat_exemption_rationale' => 'vat_exemption_rationale',
        'memo' => 'memo',
        'discount' => 'discount',
        'counterpart_shipping_address' => 'counterpart_shipping_address',
        'counterpart_billing_address' => 'counterpart_billing_address',
        'line_items' => 'line_items',
        'counterpart_id' => 'counterpart_id',
        'contact_id' => 'contact_id',
        'payment_terms_id' => 'payment_terms_id',
        'payment_reminder_id' => 'payment_reminder_id',
        'overdue_reminder_id' => 'overdue_reminder_id',
        'fulfillment_date' => 'fulfillment_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'vat_exempt' => 'setVatExempt',
        'vat_exemption_rationale' => 'setVatExemptionRationale',
        'memo' => 'setMemo',
        'discount' => 'setDiscount',
        'counterpart_shipping_address' => 'setCounterpartShippingAddress',
        'counterpart_billing_address' => 'setCounterpartBillingAddress',
        'line_items' => 'setLineItems',
        'counterpart_id' => 'setCounterpartId',
        'contact_id' => 'setContactId',
        'payment_terms_id' => 'setPaymentTermsId',
        'payment_reminder_id' => 'setPaymentReminderId',
        'overdue_reminder_id' => 'setOverdueReminderId',
        'fulfillment_date' => 'setFulfillmentDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'vat_exempt' => 'getVatExempt',
        'vat_exemption_rationale' => 'getVatExemptionRationale',
        'memo' => 'getMemo',
        'discount' => 'getDiscount',
        'counterpart_shipping_address' => 'getCounterpartShippingAddress',
        'counterpart_billing_address' => 'getCounterpartBillingAddress',
        'line_items' => 'getLineItems',
        'counterpart_id' => 'getCounterpartId',
        'contact_id' => 'getContactId',
        'payment_terms_id' => 'getPaymentTermsId',
        'payment_reminder_id' => 'getPaymentReminderId',
        'overdue_reminder_id' => 'getOverdueReminderId',
        'fulfillment_date' => 'getFulfillmentDate'
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
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('vat_exempt', $data ?? [], null);
        $this->setIfExists('vat_exemption_rationale', $data ?? [], null);
        $this->setIfExists('memo', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('counterpart_shipping_address', $data ?? [], null);
        $this->setIfExists('counterpart_billing_address', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('counterpart_id', $data ?? [], null);
        $this->setIfExists('contact_id', $data ?? [], null);
        $this->setIfExists('payment_terms_id', $data ?? [], null);
        $this->setIfExists('payment_reminder_id', $data ?? [], null);
        $this->setIfExists('overdue_reminder_id', $data ?? [], null);
        $this->setIfExists('fulfillment_date', $data ?? [], null);
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
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\CurrencyEnum|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\CurrencyEnum|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets vat_exempt
     *
     * @return bool|null
     */
    public function getVatExempt()
    {
        return $this->container['vat_exempt'];
    }

    /**
     * Sets vat_exempt
     *
     * @param bool|null $vat_exempt vat_exempt
     *
     * @return self
     */
    public function setVatExempt($vat_exempt)
    {
        if (is_null($vat_exempt)) {
            throw new \InvalidArgumentException('non-nullable vat_exempt cannot be null');
        }
        $this->container['vat_exempt'] = $vat_exempt;

        return $this;
    }

    /**
     * Gets vat_exemption_rationale
     *
     * @return string|null
     */
    public function getVatExemptionRationale()
    {
        return $this->container['vat_exemption_rationale'];
    }

    /**
     * Sets vat_exemption_rationale
     *
     * @param string|null $vat_exemption_rationale vat_exemption_rationale
     *
     * @return self
     */
    public function setVatExemptionRationale($vat_exemption_rationale)
    {
        if (is_null($vat_exemption_rationale)) {
            throw new \InvalidArgumentException('non-nullable vat_exemption_rationale cannot be null');
        }
        $this->container['vat_exemption_rationale'] = $vat_exemption_rationale;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo A note with additional information for a receivable
     *
     * @return self
     */
    public function setMemo($memo)
    {
        if (is_null($memo)) {
            throw new \InvalidArgumentException('non-nullable memo cannot be null');
        }
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \OpenAPI\Client\Model\CreditNoteResponsePayloadDiscount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \OpenAPI\Client\Model\CreditNoteResponsePayloadDiscount|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets counterpart_shipping_address
     *
     * @return \OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartShippingAddress|null
     */
    public function getCounterpartShippingAddress()
    {
        return $this->container['counterpart_shipping_address'];
    }

    /**
     * Sets counterpart_shipping_address
     *
     * @param \OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartShippingAddress|null $counterpart_shipping_address counterpart_shipping_address
     *
     * @return self
     */
    public function setCounterpartShippingAddress($counterpart_shipping_address)
    {
        if (is_null($counterpart_shipping_address)) {
            throw new \InvalidArgumentException('non-nullable counterpart_shipping_address cannot be null');
        }
        $this->container['counterpart_shipping_address'] = $counterpart_shipping_address;

        return $this;
    }

    /**
     * Gets counterpart_billing_address
     *
     * @return \OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartBillingAddress|null
     */
    public function getCounterpartBillingAddress()
    {
        return $this->container['counterpart_billing_address'];
    }

    /**
     * Sets counterpart_billing_address
     *
     * @param \OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartBillingAddress|null $counterpart_billing_address counterpart_billing_address
     *
     * @return self
     */
    public function setCounterpartBillingAddress($counterpart_billing_address)
    {
        if (is_null($counterpart_billing_address)) {
            throw new \InvalidArgumentException('non-nullable counterpart_billing_address cannot be null');
        }
        $this->container['counterpart_billing_address'] = $counterpart_billing_address;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \OpenAPI\Client\Model\LineItemUpdate[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \OpenAPI\Client\Model\LineItemUpdate[]|null $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets counterpart_id
     *
     * @return string|null
     */
    public function getCounterpartId()
    {
        return $this->container['counterpart_id'];
    }

    /**
     * Sets counterpart_id
     *
     * @param string|null $counterpart_id Unique ID of the counterpart.
     *
     * @return self
     */
    public function setCounterpartId($counterpart_id)
    {
        if (is_null($counterpart_id)) {
            throw new \InvalidArgumentException('non-nullable counterpart_id cannot be null');
        }
        $this->container['counterpart_id'] = $counterpart_id;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id Unique ID of the counterpart contact.
     *
     * @return self
     */
    public function setContactId($contact_id)
    {
        if (is_null($contact_id)) {
            throw new \InvalidArgumentException('non-nullable contact_id cannot be null');
        }
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets payment_terms_id
     *
     * @return string|null
     */
    public function getPaymentTermsId()
    {
        return $this->container['payment_terms_id'];
    }

    /**
     * Sets payment_terms_id
     *
     * @param string|null $payment_terms_id payment_terms_id
     *
     * @return self
     */
    public function setPaymentTermsId($payment_terms_id)
    {
        if (is_null($payment_terms_id)) {
            throw new \InvalidArgumentException('non-nullable payment_terms_id cannot be null');
        }
        $this->container['payment_terms_id'] = $payment_terms_id;

        return $this;
    }

    /**
     * Gets payment_reminder_id
     *
     * @return string|null
     */
    public function getPaymentReminderId()
    {
        return $this->container['payment_reminder_id'];
    }

    /**
     * Sets payment_reminder_id
     *
     * @param string|null $payment_reminder_id payment_reminder_id
     *
     * @return self
     */
    public function setPaymentReminderId($payment_reminder_id)
    {
        if (is_null($payment_reminder_id)) {
            throw new \InvalidArgumentException('non-nullable payment_reminder_id cannot be null');
        }
        $this->container['payment_reminder_id'] = $payment_reminder_id;

        return $this;
    }

    /**
     * Gets overdue_reminder_id
     *
     * @return string|null
     */
    public function getOverdueReminderId()
    {
        return $this->container['overdue_reminder_id'];
    }

    /**
     * Sets overdue_reminder_id
     *
     * @param string|null $overdue_reminder_id overdue_reminder_id
     *
     * @return self
     */
    public function setOverdueReminderId($overdue_reminder_id)
    {
        if (is_null($overdue_reminder_id)) {
            throw new \InvalidArgumentException('non-nullable overdue_reminder_id cannot be null');
        }
        $this->container['overdue_reminder_id'] = $overdue_reminder_id;

        return $this;
    }

    /**
     * Gets fulfillment_date
     *
     * @return \DateTime|null
     */
    public function getFulfillmentDate()
    {
        return $this->container['fulfillment_date'];
    }

    /**
     * Sets fulfillment_date
     *
     * @param \DateTime|null $fulfillment_date The date when the goods are shipped or the service is provided.  If omitted, defaults to the invoice issue date, and the value is automatically set when the invoice status changes to `issued`.
     *
     * @return self
     */
    public function setFulfillmentDate($fulfillment_date)
    {
        if (is_null($fulfillment_date)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_date cannot be null');
        }
        $this->container['fulfillment_date'] = $fulfillment_date;

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


