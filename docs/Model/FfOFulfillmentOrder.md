# # FfOFulfillmentOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_fulfillment_order_id** | **string** | The fulfillment order identifier submitted with the createFulfillmentOrder operation. |
**marketplace_id** | **string** | The identifier for the marketplace the fulfillment order is placed against. |
**displayable_order_id** | **string** | A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip. |
**displayable_order_date** | **\DateTime** |  |
**displayable_order_comment** | **string** | A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip. |
**shipping_speed_category** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOShippingSpeedCategory**](FfOShippingSpeedCategory.md) |  |
**delivery_window** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfODeliveryWindow**](FfODeliveryWindow.md) |  | [optional]
**destination_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOAddress**](FfOAddress.md) |  |
**fulfillment_action** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOFulfillmentAction**](FfOFulfillmentAction.md) |  | [optional]
**fulfillment_policy** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOFulfillmentPolicy**](FfOFulfillmentPolicy.md) |  | [optional]
**cod_settings** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOCODSettings**](FfOCODSettings.md) |  | [optional]
**received_date** | **\DateTime** |  |
**fulfillment_order_status** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOFulfillmentOrderStatus**](FfOFulfillmentOrderStatus.md) |  |
**status_updated_date** | **\DateTime** |  |
**notification_emails** | **string[]** | A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller. | [optional]
**feature_constraints** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOFeatureSettings[]**](FfOFeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
