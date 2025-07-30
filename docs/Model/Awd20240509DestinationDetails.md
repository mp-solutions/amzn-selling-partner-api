# # Awd20240509DestinationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509Address**](Awd20240509Address.md) |  | [optional]
**destination_region** | **string** | Assigned region where the order will be shipped. This can differ from what was passed as preference. AWD currently supports following region IDs: [us-west, us-east, us-southcentral, us-southeast] | [optional]
**shipment_id** | **string** | Unique ID of the confirmed shipment being shipped to the assigned destination. This will be available only after an inbound order is confirmed and can be used to track the shipment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
