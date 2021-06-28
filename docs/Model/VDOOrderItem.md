# # VDOOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**buyer_product_identifier** | **string** | Buyer&#39;s standard identification number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**title** | **string** | Title for the item. | [optional]
**ordered_quantity** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOItemQuantity**](VDOItemQuantity.md) |  |
**scheduled_delivery_shipment** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOScheduledDeliveryShipment**](VDOScheduledDeliveryShipment.md) |  | [optional]
**gift_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOGiftDetails**](VDOGiftDetails.md) |  | [optional]
**net_price** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOMoney**](VDOMoney.md) |  |
**tax_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOOrderItemTaxDetails**](VDOOrderItemTaxDetails.md) |  | [optional]
**total_price** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentOrders\VDOMoney**](VDOMoney.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
