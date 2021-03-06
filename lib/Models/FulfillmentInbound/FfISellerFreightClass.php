<?php
/**
 * FfISellerFreightClass
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound;
use \MPSolutions\AmznSellingPartnerApi\Models\ModelInterface;
use \MPSolutions\AmznSellingPartnerApi\ObjectSerializer;

/**
 * FfISellerFreightClass Class Doc Comment
 *
 * @category Class
 * @description The freight class of the shipment. For information about determining the freight class, contact the carrier.
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FfISellerFreightClass
{
    /**
     * Possible values of this enum
     */
    const _50 = '50';
    const _50_0 = '50.0';
    const _55 = '55';
    const _55_0 = '55.0';
    const _60 = '60';
    const _60_0 = '60.0';
    const _65 = '65';
    const _65_0 = '65.0';
    const _70 = '70';
    const _70_0 = '70.0';
    const _77_5 = '77.5';
    const _85 = '85';
    const _85_0 = '85.0';
    const _92_5 = '92.5';
    const _100 = '100';
    const _100_0 = '100.0';
    const _110 = '110';
    const _110_0 = '110.0';
    const _125 = '125';
    const _125_0 = '125.0';
    const _150 = '150';
    const _150_0 = '150.0';
    const _175 = '175';
    const _175_0 = '175.0';
    const _200 = '200';
    const _200_0 = '200.0';
    const _250 = '250';
    const _250_0 = '250.0';
    const _300 = '300';
    const _300_0 = '300.0';
    const _400 = '400';
    const _400_0 = '400.0';
    const _500 = '500';
    const _500_0 = '500.0';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_50,
            self::_50_0,
            self::_55,
            self::_55,
            self::_60,
            self::_60_0,
            self::_65,
            self::_65_0,
            self::_70,
            self::_70_0,
            self::_77_5,
            self::_85,
            self::_85_0,
            self::_92_5,
            self::_100,
            self::_100_0,
            self::_110,
            self::_110_0,
            self::_125,
            self::_125_0,
            self::_150,
            self::_150_0,
            self::_175,
            self::_175_0,
            self::_200,
            self::_200_0,
            self::_250,
            self::_250_0,
            self::_300,
            self::_300_0,
            self::_400,
            self::_400_0,
            self::_500,
            self::_500_0,
        ];
    }
}


