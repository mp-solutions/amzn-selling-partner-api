# # VDSPackage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package_identifier** | **string** | Package identifier for the package. The first package will be 001, the second 002, and so on. This number is used as a reference to refer to this package from the pallet level. |
**tracking_number** | **string** | This is required to be provided for every package in the small parcel shipments. | [optional]
**manifest_id** | **string** | Carrier manifest Id (Applicable for LTL shipments). | [optional]
**manifest_date** | [**\DateTime**](\DateTime.md) | Carrier manifest Date (Applicable for LTL shipments). | [optional]
**ship_method** | **string** | Shipment method. | [optional]
**weight** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSWeight**](VDSWeight.md) |  |
**dimensions** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSDimensions**](VDSDimensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
