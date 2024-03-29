<?php
/**
 * FfOShippingSpeedCategory
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound;
use \MPSolutions\AmznSellingPartnerApi\Models\ModelInterface;
use \MPSolutions\AmznSellingPartnerApi\ObjectSerializer;

/**
 * FfOShippingSpeedCategory Class Doc Comment
 *
 * @category Class
 * @description The shipping method used for the fulfillment order.
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FfOShippingSpeedCategory
{
    /**
     * Possible values of this enum
     */
    public const STANDARD = 'Standard';
    public const EXPEDITED = 'Expedited';
    public const PRIORITY = 'Priority';
    public const SCHEDULED_DELIVERY = 'ScheduledDelivery';
    
	/**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STANDARD,
            self::EXPEDITED,
            self::PRIORITY,
            self::SCHEDULED_DELIVERY
        ];
    }
}


