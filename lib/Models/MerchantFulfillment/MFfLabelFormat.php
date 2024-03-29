<?php
/**
 * MFfLabelFormat
 *
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
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
 * MFfLabelFormat Class Doc Comment
 *
 * @category Class
 * @description The label format.
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MFfLabelFormat
{
    /**
     * Possible values of this enum
     */
    public const PDF = 'PDF';
    public const PNG = 'PNG';
    public const ZPL203 = 'ZPL203';
    public const ZPL300 = 'ZPL300';
    public const SHIPPING_SERVICE_DEFAULT = 'ShippingServiceDefault';
    
	/**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDF,
            self::PNG,
            self::ZPL203,
            self::ZPL300,
            self::SHIPPING_SERVICE_DEFAULT
        ];
    }
}


