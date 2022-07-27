# # MFfShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | An Amazon-defined shipment identifier. |
**amazon_order_id** | **string** | An Amazon-defined order identifier, in 3-7-7 format. |
**seller_order_id** | **string** | A seller-defined order identifier. | [optional]
**item_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfItem[]**](MFfItem.md) | The list of items to be included in a shipment. |
**ship_from_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfAddress**](MFfAddress.md) |  |
**ship_to_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfAddress**](MFfAddress.md) |  |
**package_dimensions** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfPackageDimensions**](MFfPackageDimensions.md) |  |
**weight** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfWeight**](MFfWeight.md) |  |
**insurance** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCurrencyAmount**](MFfCurrencyAmount.md) |  |
**shipping_service** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfShippingService**](MFfShippingService.md) |  |
**label** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfLabel**](MFfLabel.md) |  |
**status** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfShipmentStatus**](MFfShipmentStatus.md) |  |
**tracking_id** | **string** | The shipment tracking identifier provided by the carrier. | [optional]
**created_date** | **\DateTime** |  |
**last_updated_date** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
