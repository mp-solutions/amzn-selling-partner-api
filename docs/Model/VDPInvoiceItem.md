# # VDPInvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**buyer_product_identifier** | **string** | Buyer&#39;s standard identification number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**invoiced_quantity** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentPayments\VDPItemQuantity**](VDPItemQuantity.md) |  |
**net_cost** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentPayments\VDPMoney**](VDPMoney.md) |  |
**purchase_order_number** | **string** | The purchase order number for this order. Formatting Notes: 8-character alpha-numeric code. |
**vendor_order_number** | **string** | The vendor&#39;s order number for this order. | [optional]
**hsn_code** | **string** | HSN tax code. The HSN number cannot contain alphabets. | [optional]
**tax_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentPayments\VDPTaxDetail[]**](VDPTaxDetail.md) | Individual tax details per line item. | [optional]
**charge_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentPayments\VDPChargeDetails[]**](VDPChargeDetails.md) | Individual charge details per line item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
