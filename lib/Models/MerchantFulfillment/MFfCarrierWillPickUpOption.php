<?php
/**
 * MFfCarrierWillPickUpOption
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment;
use \MPSolutions\AmznSellingPartnerApi\Models\ModelInterface;
use \MPSolutions\AmznSellingPartnerApi\ObjectSerializer;

/**
 * MFfCarrierWillPickUpOption Class Doc Comment
 *
 * @category Class
 * @description Carrier will pick up option.
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MFfCarrierWillPickUpOption
{
    /**
     * Possible values of this enum
     */
    const CARRIER_WILL_PICK_UP = 'CarrierWillPickUp';
    const SHIPPER_WILL_DROP_OFF = 'ShipperWillDropOff';
    const NO_PREFERENCE = 'NoPreference';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CARRIER_WILL_PICK_UP,
            self::SHIPPER_WILL_DROP_OFF,
            self::NO_PREFERENCE,
        ];
    }
}

