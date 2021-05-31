# # ShipmentConfirmation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | Purchase order number corresponding to the shipment. |
**shipment_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\ShipmentDetails**](ShipmentDetails.md) |  |
**selling_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\PartyIdentification**](PartyIdentification.md) |  |
**ship_from_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\PartyIdentification**](PartyIdentification.md) |  |
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\Item[]**](Item.md) | Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package. |
**containers** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\Container[]**](Container.md) | Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
