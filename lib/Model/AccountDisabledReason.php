<?php
/**
 * AccountDisabledReason
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
 * AccountDisabledReason Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountDisabledReason
{
    /**
     * Possible values of this enum
     */
    public const REQUIREMENTS_PAST_DUE = 'requirements.past_due';

    public const REQUIREMENTS_PENDING_VERIFICATION = 'requirements.pending_verification';

    public const LISTED = 'listed';

    public const PLATFORM_PAUSED = 'platform_paused';

    public const REJECTED_FRAUD = 'rejected.fraud';

    public const REJECTED_LISTED = 'rejected.listed';

    public const REJECTED_TERMS_OF_SERVICE = 'rejected.terms_of_service';

    public const REJECTED_OTHER = 'rejected.other';

    public const UNDER_REVIEW = 'under_review';

    public const OTHER = 'other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REQUIREMENTS_PAST_DUE,
            self::REQUIREMENTS_PENDING_VERIFICATION,
            self::LISTED,
            self::PLATFORM_PAUSED,
            self::REJECTED_FRAUD,
            self::REJECTED_LISTED,
            self::REJECTED_TERMS_OF_SERVICE,
            self::REJECTED_OTHER,
            self::UNDER_REVIEW,
            self::OTHER
        ];
    }
}


