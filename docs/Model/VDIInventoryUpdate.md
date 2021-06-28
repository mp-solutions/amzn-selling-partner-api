# # VDIInventoryUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**selling_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentInventory\VDIPartyIdentification**](VDIPartyIdentification.md) |  |
**is_full_update** | **bool** | When true, this request contains a full feed. Otherwise, this request contains a partial feed. When sending a full feed, you must send information about all items in the warehouse. Any items not in the full feed are updated as not available. When sending a partial feed, only include the items that need an update to inventory. The status of other items will remain unchanged. |
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentInventory\VDIItemDetails[]**](VDIItemDetails.md) | A list of inventory items with updated details, including quantity available. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
