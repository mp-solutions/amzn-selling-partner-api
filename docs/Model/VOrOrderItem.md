# # VOrOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**amazon_product_identifier** | **string** | Amazon Standard Identification Number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**ordered_quantity** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorOrders\VOrItemQuantity**](VOrItemQuantity.md) |  |
**is_back_order_allowed** | **bool** | When true, we will accept backorder confirmations for this item. |
**net_cost** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorOrders\VOrMoney**](VOrMoney.md) |  | [optional]
**list_price** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorOrders\VOrMoney**](VOrMoney.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
