# # VDOOrderDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_order_number** | **string** | The customer order number. |
**order_date** | **\DateTime** | The date the order was placed. This field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed. |
**order_status** | **string** | Current status of the order. | [optional]
**shipment_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOShipmentDetails**](VDOShipmentDetails.md) |  |
**tax_total** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOOrderDetailsTaxTotal**](VDOOrderDetailsTaxTotal.md) |  | [optional]
**selling_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOPartyIdentification**](VDOPartyIdentification.md) |  |
**ship_from_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOPartyIdentification**](VDOPartyIdentification.md) |  |
**ship_to_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOAddress**](VDOAddress.md) |  |
**bill_to_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOPartyIdentification**](VDOPartyIdentification.md) |  |
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOOrderItem[]**](VDOOrderItem.md) | A list of items in this purchase order. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
