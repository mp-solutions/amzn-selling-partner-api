# # FnnRemovalShipmentItemAdjustment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**removal_shipment_item_id** | **string** | An identifier for an item in a removal shipment. | [optional]
**tax_collection_model** | **string** | The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon. | [optional]
**fulfillment_network_sku** | **string** | The Amazon fulfillment network SKU for the item. | [optional]
**adjusted_quantity** | **int** | Adjusted quantity of removal shipmentItemAdjustment items. | [optional]
**revenue_adjustment** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**tax_amount_adjustment** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**tax_withheld_adjustment** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
