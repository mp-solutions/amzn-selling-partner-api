# # SIcShipmentDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse_id** | **string** | The Amazon-defined identifier for the warehouse. | [optional]
**amazon_order_id** | **string** | The Amazon-defined identifier for the order. | [optional]
**amazon_shipment_id** | **string** | The Amazon-defined identifier for the shipment. | [optional]
**purchase_date** | [**\DateTime**](\DateTime.md) | The date and time when the order was created. | [optional]
**shipping_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\ShipmentInvoicing\SIcAddress**](SIcAddress.md) |  | [optional]
**payment_method_details** | **string[]** | The list of payment method details. | [optional]
**marketplace_id** | **string** | The identifier for the marketplace where the order was placed. | [optional]
**seller_id** | **string** | The seller identifier. | [optional]
**buyer_name** | **string** | The name of the buyer. | [optional]
**buyer_county** | **string** | The county of the buyer. | [optional]
**buyer_tax_info** | [**\MPSolutions\AmznSellingPartnerApi\Models\ShipmentInvoicing\SIcBuyerTaxInfo**](SIcBuyerTaxInfo.md) |  | [optional]
**marketplace_tax_info** | [**\MPSolutions\AmznSellingPartnerApi\Models\ShipmentInvoicing\SIcMarketplaceTaxInfo**](SIcMarketplaceTaxInfo.md) |  | [optional]
**seller_display_name** | **string** | The seller’s friendly name registered in the marketplace. | [optional]
**shipment_items** | [**\MPSolutions\AmznSellingPartnerApi\Models\ShipmentInvoicing\SIcShipmentItem[]**](SIcShipmentItem.md) | A list of shipment items. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
