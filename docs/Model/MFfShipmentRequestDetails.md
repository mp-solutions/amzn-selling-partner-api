# # MFfShipmentRequestDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined order identifier, in 3-7-7 format. |
**seller_order_id** | **string** | A seller-defined order identifier. | [optional]
**item_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfItem[]**](MFfItem.md) | The list of items to be included in a shipment. |
**ship_from_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfAddress**](MFfAddress.md) |  |
**package_dimensions** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfPackageDimensions**](MFfPackageDimensions.md) |  |
**weight** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfWeight**](MFfWeight.md) |  |
**must_arrive_by_date** | **\DateTime** |  | [optional]
**ship_date** | **\DateTime** |  | [optional]
**shipping_service_options** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfShippingServiceOptions**](MFfShippingServiceOptions.md) |  |
**label_customization** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfLabelCustomization**](MFfLabelCustomization.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
