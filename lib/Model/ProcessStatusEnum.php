<?php
/**
 * ProcessStatusEnum
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
 * ProcessStatusEnum Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProcessStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const SUCCEEDED = 'succeeded';

    public const WAITING = 'waiting';

    public const FAILED = 'failed';

    public const RUNNING = 'running';

    public const CANCELED = 'canceled';

    public const TIMED_OUT = 'timed_out';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCEEDED,
            self::WAITING,
            self::FAILED,
            self::RUNNING,
            self::CANCELED,
            self::TIMED_OUT
        ];
    }
}

