<?php
/**
 * PayableUploadWithDataSchema
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
 * PayableUploadWithDataSchema Class Doc Comment
 *
 * @category Class
 * @description This schema is used to create a new payable by providing its data along with the original file.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayableUploadWithDataSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayableUploadWithDataSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => '\OpenAPI\Client\Model\CurrencyEnum',
        'amount' => 'int',
        'description' => 'string',
        'due_date' => '\DateTime',
        'payment_terms' => '\OpenAPI\Client\Model\PayableResponseSchemaPaymentTerms',
        'suggested_payment_term' => '\OpenAPI\Client\Model\PayableResponseSchemaSuggestedPaymentTerm',
        'issued_at' => '\DateTime',
        'counterpart_id' => 'string',
        'counterpart_bank_id' => 'string',
        'counterpart_account_id' => 'string',
        'counterpart_name' => 'string',
        'counterpart_address' => '\OpenAPI\Client\Model\PayableUpdateSchemaCounterpartAddress',
        'counterpart_tax_id' => 'string',
        'base64_encoded_file' => 'string',
        'file_name' => 'string',
        'tag_ids' => 'string[]',
        'document_id' => 'string',
        'subtotal' => 'int',
        'tax' => 'int',
        'sender' => 'string'
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
        'amount' => null,
        'description' => null,
        'due_date' => 'date',
        'payment_terms' => null,
        'suggested_payment_term' => null,
        'issued_at' => 'date',
        'counterpart_id' => 'uuid',
        'counterpart_bank_id' => null,
        'counterpart_account_id' => null,
        'counterpart_name' => null,
        'counterpart_address' => null,
        'counterpart_tax_id' => null,
        'base64_encoded_file' => null,
        'file_name' => null,
        'tag_ids' => 'uuid',
        'document_id' => null,
        'subtotal' => null,
        'tax' => null,
        'sender' => 'email'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currency' => false,
		'amount' => false,
		'description' => false,
		'due_date' => false,
		'payment_terms' => false,
		'suggested_payment_term' => false,
		'issued_at' => false,
		'counterpart_id' => false,
		'counterpart_bank_id' => false,
		'counterpart_account_id' => false,
		'counterpart_name' => false,
		'counterpart_address' => false,
		'counterpart_tax_id' => false,
		'base64_encoded_file' => false,
		'file_name' => false,
		'tag_ids' => false,
		'document_id' => false,
		'subtotal' => false,
		'tax' => false,
		'sender' => false
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
        'amount' => 'amount',
        'description' => 'description',
        'due_date' => 'due_date',
        'payment_terms' => 'payment_terms',
        'suggested_payment_term' => 'suggested_payment_term',
        'issued_at' => 'issued_at',
        'counterpart_id' => 'counterpart_id',
        'counterpart_bank_id' => 'counterpart_bank_id',
        'counterpart_account_id' => 'counterpart_account_id',
        'counterpart_name' => 'counterpart_name',
        'counterpart_address' => 'counterpart_address',
        'counterpart_tax_id' => 'counterpart_tax_id',
        'base64_encoded_file' => 'base64_encoded_file',
        'file_name' => 'file_name',
        'tag_ids' => 'tag_ids',
        'document_id' => 'document_id',
        'subtotal' => 'subtotal',
        'tax' => 'tax',
        'sender' => 'sender'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'due_date' => 'setDueDate',
        'payment_terms' => 'setPaymentTerms',
        'suggested_payment_term' => 'setSuggestedPaymentTerm',
        'issued_at' => 'setIssuedAt',
        'counterpart_id' => 'setCounterpartId',
        'counterpart_bank_id' => 'setCounterpartBankId',
        'counterpart_account_id' => 'setCounterpartAccountId',
        'counterpart_name' => 'setCounterpartName',
        'counterpart_address' => 'setCounterpartAddress',
        'counterpart_tax_id' => 'setCounterpartTaxId',
        'base64_encoded_file' => 'setBase64EncodedFile',
        'file_name' => 'setFileName',
        'tag_ids' => 'setTagIds',
        'document_id' => 'setDocumentId',
        'subtotal' => 'setSubtotal',
        'tax' => 'setTax',
        'sender' => 'setSender'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'due_date' => 'getDueDate',
        'payment_terms' => 'getPaymentTerms',
        'suggested_payment_term' => 'getSuggestedPaymentTerm',
        'issued_at' => 'getIssuedAt',
        'counterpart_id' => 'getCounterpartId',
        'counterpart_bank_id' => 'getCounterpartBankId',
        'counterpart_account_id' => 'getCounterpartAccountId',
        'counterpart_name' => 'getCounterpartName',
        'counterpart_address' => 'getCounterpartAddress',
        'counterpart_tax_id' => 'getCounterpartTaxId',
        'base64_encoded_file' => 'getBase64EncodedFile',
        'file_name' => 'getFileName',
        'tag_ids' => 'getTagIds',
        'document_id' => 'getDocumentId',
        'subtotal' => 'getSubtotal',
        'tax' => 'getTax',
        'sender' => 'getSender'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('payment_terms', $data ?? [], null);
        $this->setIfExists('suggested_payment_term', $data ?? [], null);
        $this->setIfExists('issued_at', $data ?? [], null);
        $this->setIfExists('counterpart_id', $data ?? [], null);
        $this->setIfExists('counterpart_bank_id', $data ?? [], null);
        $this->setIfExists('counterpart_account_id', $data ?? [], null);
        $this->setIfExists('counterpart_name', $data ?? [], null);
        $this->setIfExists('counterpart_address', $data ?? [], null);
        $this->setIfExists('counterpart_tax_id', $data ?? [], null);
        $this->setIfExists('base64_encoded_file', $data ?? [], null);
        $this->setIfExists('file_name', $data ?? [], null);
        $this->setIfExists('tag_ids', $data ?? [], null);
        $this->setIfExists('document_id', $data ?? [], null);
        $this->setIfExists('subtotal', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
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

        if (!is_null($this->container['file_name']) && (mb_strlen($this->container['file_name']) > 512)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be smaller than or equal to 512.";
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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The total amount to be paid, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An arbitrary description of this payable.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date The date by which the payable must be paid, in the YYYY-MM-DD format. If the payable specifies payment terms with early payment discounts, this is the final payment date.
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return \OpenAPI\Client\Model\PayableResponseSchemaPaymentTerms|null
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param \OpenAPI\Client\Model\PayableResponseSchemaPaymentTerms|null $payment_terms payment_terms
     *
     * @return self
     */
    public function setPaymentTerms($payment_terms)
    {
        if (is_null($payment_terms)) {
            throw new \InvalidArgumentException('non-nullable payment_terms cannot be null');
        }
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets suggested_payment_term
     *
     * @return \OpenAPI\Client\Model\PayableResponseSchemaSuggestedPaymentTerm|null
     */
    public function getSuggestedPaymentTerm()
    {
        return $this->container['suggested_payment_term'];
    }

    /**
     * Sets suggested_payment_term
     *
     * @param \OpenAPI\Client\Model\PayableResponseSchemaSuggestedPaymentTerm|null $suggested_payment_term suggested_payment_term
     *
     * @return self
     */
    public function setSuggestedPaymentTerm($suggested_payment_term)
    {
        if (is_null($suggested_payment_term)) {
            throw new \InvalidArgumentException('non-nullable suggested_payment_term cannot be null');
        }
        $this->container['suggested_payment_term'] = $suggested_payment_term;

        return $this;
    }

    /**
     * Gets issued_at
     *
     * @return \DateTime|null
     */
    public function getIssuedAt()
    {
        return $this->container['issued_at'];
    }

    /**
     * Sets issued_at
     *
     * @param \DateTime|null $issued_at The date when the payable was issued, in the YYYY-MM-DD format.
     *
     * @return self
     */
    public function setIssuedAt($issued_at)
    {
        if (is_null($issued_at)) {
            throw new \InvalidArgumentException('non-nullable issued_at cannot be null');
        }
        $this->container['issued_at'] = $issued_at;

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
     * @param string|null $counterpart_id UUID of the vendor or supplier in the system.
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
     * Gets counterpart_bank_id
     *
     * @return string|null
     */
    public function getCounterpartBankId()
    {
        return $this->container['counterpart_bank_id'];
    }

    /**
     * Sets counterpart_bank_id
     *
     * @param string|null $counterpart_bank_id SWIFT code (BIC) of the vendor's bank.
     *
     * @return self
     */
    public function setCounterpartBankId($counterpart_bank_id)
    {
        if (is_null($counterpart_bank_id)) {
            throw new \InvalidArgumentException('non-nullable counterpart_bank_id cannot be null');
        }
        $this->container['counterpart_bank_id'] = $counterpart_bank_id;

        return $this;
    }

    /**
     * Gets counterpart_account_id
     *
     * @return string|null
     */
    public function getCounterpartAccountId()
    {
        return $this->container['counterpart_account_id'];
    }

    /**
     * Sets counterpart_account_id
     *
     * @param string|null $counterpart_account_id Vendor's bank account number, IBAN, or similar.
     *
     * @return self
     */
    public function setCounterpartAccountId($counterpart_account_id)
    {
        if (is_null($counterpart_account_id)) {
            throw new \InvalidArgumentException('non-nullable counterpart_account_id cannot be null');
        }
        $this->container['counterpart_account_id'] = $counterpart_account_id;

        return $this;
    }

    /**
     * Gets counterpart_name
     *
     * @return string|null
     */
    public function getCounterpartName()
    {
        return $this->container['counterpart_name'];
    }

    /**
     * Sets counterpart_name
     *
     * @param string|null $counterpart_name Vendor or supplier name.
     *
     * @return self
     */
    public function setCounterpartName($counterpart_name)
    {
        if (is_null($counterpart_name)) {
            throw new \InvalidArgumentException('non-nullable counterpart_name cannot be null');
        }
        $this->container['counterpart_name'] = $counterpart_name;

        return $this;
    }

    /**
     * Gets counterpart_address
     *
     * @return \OpenAPI\Client\Model\PayableUpdateSchemaCounterpartAddress|null
     */
    public function getCounterpartAddress()
    {
        return $this->container['counterpart_address'];
    }

    /**
     * Sets counterpart_address
     *
     * @param \OpenAPI\Client\Model\PayableUpdateSchemaCounterpartAddress|null $counterpart_address counterpart_address
     *
     * @return self
     */
    public function setCounterpartAddress($counterpart_address)
    {
        if (is_null($counterpart_address)) {
            throw new \InvalidArgumentException('non-nullable counterpart_address cannot be null');
        }
        $this->container['counterpart_address'] = $counterpart_address;

        return $this;
    }

    /**
     * Gets counterpart_tax_id
     *
     * @return string|null
     */
    public function getCounterpartTaxId()
    {
        return $this->container['counterpart_tax_id'];
    }

    /**
     * Sets counterpart_tax_id
     *
     * @param string|null $counterpart_tax_id The tax id of the counterpart.
     *
     * @return self
     */
    public function setCounterpartTaxId($counterpart_tax_id)
    {
        if (is_null($counterpart_tax_id)) {
            throw new \InvalidArgumentException('non-nullable counterpart_tax_id cannot be null');
        }
        $this->container['counterpart_tax_id'] = $counterpart_tax_id;

        return $this;
    }

    /**
     * Gets base64_encoded_file
     *
     * @return string|null
     */
    public function getBase64EncodedFile()
    {
        return $this->container['base64_encoded_file'];
    }

    /**
     * Sets base64_encoded_file
     *
     * @param string|null $base64_encoded_file Base64-encoded contents of the original issued payable. The file is provided for reference purposes as the original source of the data.   Any file formats are allowed. The most common formats are PDF, PNG, JPG, GIF.
     *
     * @return self
     */
    public function setBase64EncodedFile($base64_encoded_file)
    {
        if (is_null($base64_encoded_file)) {
            throw new \InvalidArgumentException('non-nullable base64_encoded_file cannot be null');
        }
        $this->container['base64_encoded_file'] = $base64_encoded_file;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name The original file name.
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        if (is_null($file_name)) {
            throw new \InvalidArgumentException('non-nullable file_name cannot be null');
        }
        if ((mb_strlen($file_name) > 512)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling PayableUploadWithDataSchema., must be smaller than or equal to 512.');
        }

        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return string[]|null
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param string[]|null $tag_ids A list of IDs of user-defined tags (labels) assigned to this payable. Tags can be used to trigger a specific approval policy for this payable.
     *
     * @return self
     */
    public function setTagIds($tag_ids)
    {
        if (is_null($tag_ids)) {
            throw new \InvalidArgumentException('non-nullable tag_ids cannot be null');
        }
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string|null $document_id A unique invoice number assigned by the invoice issuer for payment tracking purposes.
     *
     * @return self
     */
    public function setDocumentId($document_id)
    {
        if (is_null($document_id)) {
            throw new \InvalidArgumentException('non-nullable document_id cannot be null');
        }
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return int|null
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param int|null $subtotal The subtotal amount to be paid, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250.
     *
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        if (is_null($subtotal)) {
            throw new \InvalidArgumentException('non-nullable subtotal cannot be null');
        }
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return int|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param int|null $tax Registered tax applied for a service price, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250.
     *
     * @return self
     */
    public function setTax($tax)
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string|null $sender The email address from which the invoice was sent to the entity.
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

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

