<?php
/**
 * ReceivablesStatusEnum
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * ReceivablesStatusEnum Class Doc Comment
 *
 * @category Class
 * @description This Enum the results of combining two types of statuses from QuoteStateEnum, CreditNoteStateEnum and InvoiceStateEnum. You shouldn&#39;t use it in your scenarios if only for edge cases in workers, but ideally need to remove this shared Enum.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReceivablesStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const DRAFT = 'draft';

    public const ISSUED = 'issued';

    public const ACCEPTED = 'accepted';

    public const EXPIRED = 'expired';

    public const DECLINED = 'declined';

    public const RECURRING = 'recurring';

    public const PARTIALLY_PAID = 'partially_paid';

    public const PAID = 'paid';

    public const OVERDUE = 'overdue';

    public const UNCOLLECTIBLE = 'uncollectible';

    public const CANCELED = 'canceled';

    public const DELETED = 'deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::ISSUED,
            self::ACCEPTED,
            self::EXPIRED,
            self::DECLINED,
            self::RECURRING,
            self::PARTIALLY_PAID,
            self::PAID,
            self::OVERDUE,
            self::UNCOLLECTIBLE,
            self::CANCELED,
            self::DELETED
        ];
    }
}


