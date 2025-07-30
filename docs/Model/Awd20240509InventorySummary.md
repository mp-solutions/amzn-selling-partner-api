# # Awd20240509InventorySummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiration_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509ExpirationDetails[]**](Awd20240509ExpirationDetails.md) | The expiration details of the inventory. This object will only appear if the &#x60;details&#x60; parameter in the request is set to &#x60;SHOW&#x60;. | [optional]
**inventory_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InventoryDetails**](Awd20240509InventoryDetails.md) |  | [optional]
**sku** | **string** | The seller or merchant SKU. |
**total_inbound_quantity** | **int** | Total quantity that is in-transit from the seller and has not yet been received at an AWD Distribution Center | [optional]
**total_onhand_quantity** | **int** | Total quantity that is present in AWD distribution centers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
