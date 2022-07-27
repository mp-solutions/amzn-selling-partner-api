# # VDOOrderAcknowledgementItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The purchase order number for this order. Formatting Notes: alpha-numeric code. |
**vendor_order_number** | **string** | The vendor&#39;s order number for this order. |
**acknowledgement_date** | **\DateTime** | The date and time when the order is acknowledged, in ISO-8601 date/time format. For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 / 2018-07-16T23:00:00-08:00. |
**acknowledgement_status** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOAcknowledgementStatus**](VDOAcknowledgementStatus.md) |  |
**selling_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOPartyIdentification**](VDOPartyIdentification.md) |  |
**ship_from_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOPartyIdentification**](VDOPartyIdentification.md) |  |
**item_acknowledgements** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOOrderItemAcknowledgement[]**](VDOOrderItemAcknowledgement.md) | Item details including acknowledged quantity. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
