<?php
/**
 * InteractionMedium
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sirena API
 *
 * Sirena API for lead providers and prospect data manipulation
 *
 * OpenAPI spec version: 1.5.0
 * Contact: it@getsirena.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

/**
 * InteractionMedium Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InteractionMedium
{
    /**
     * Possible values of this enum
     */
    const INBOUND_CALL = 'inboundCall';
    const OUTBOUND_CALL = 'outboundCall';
    const WHATS_APP = 'whatsApp';
    const SMS = 'sms';
    const EMAIL = 'email';
    const WALK_IN = 'walkIn';
    const OTHER = 'other';
    const TEST_DRIVE = 'testDrive';
    const PHONE_CALL = 'phoneCall';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INBOUND_CALL,
            self::OUTBOUND_CALL,
            self::WHATS_APP,
            self::SMS,
            self::EMAIL,
            self::WALK_IN,
            self::OTHER,
            self::TEST_DRIVE,
            self::PHONE_CALL,
        ];
    }
}


