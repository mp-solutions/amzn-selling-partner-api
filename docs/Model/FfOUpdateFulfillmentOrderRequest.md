# # FfOUpdateFulfillmentOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | [optional]
**displayable_order_id** | **string** | A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier. | [optional]
**displayable_order_date** | **\DateTime** |  | [optional]
**displayable_order_comment** | **string** | Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip. | [optional]
**shipping_speed_category** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOShippingSpeedCategory**](FfOShippingSpeedCategory.md) |  | [optional]
**destination_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOAddress**](FfOAddress.md) |  | [optional]
**fulfillment_action** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOFulfillmentAction**](FfOFulfillmentAction.md) |  | [optional]
**fulfillment_policy** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOFulfillmentPolicy**](FfOFulfillmentPolicy.md) |  | [optional]
**ship_from_country_code** | **string** | The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format. | [optional]
**notification_emails** | **string[]** | A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller. | [optional]
**feature_constraints** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOFeatureSettings[]**](FfOFeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOUpdateFulfillmentOrderItem[]**](FfOUpdateFulfillmentOrderItem.md) | An array of fulfillment order item information for updating a fulfillment order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
