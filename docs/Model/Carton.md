# # Carton

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carton_identifiers** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorShipments\ContainerIdentification[]**](ContainerIdentification.md) | A list of carton identifiers. | [optional]
**carton_sequence_number** | **string** | Carton sequence number for the carton. The first carton will be 001, the second 002, and so on. This number is used as a reference to refer to this carton from the pallet level. |
**dimensions** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorShipments\Dimensions**](Dimensions.md) |  | [optional]
**weight** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorShipments\Weight**](Weight.md) |  | [optional]
**tracking_number** | **string** | This is required to be provided for every carton in the small parcel shipments. | [optional]
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorShipments\ContainerItem[]**](ContainerItem.md) | A list of container item details. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
