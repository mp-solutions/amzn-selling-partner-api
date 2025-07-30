# # Awd20240509InboundOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date when this order was created. |
**destination_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509DestinationDetails**](Awd20240509DestinationDetails.md) |  | [optional]
**external_reference_id** | **string** | Reference ID that can be used to correlate the order with partner resources. | [optional]
**order_id** | **string** | Inbound order ID. |
**order_status** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundStatus**](Awd20240509InboundStatus.md) |  |
**origin_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509Address**](Awd20240509Address.md) |  |
**packages_to_inbound** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509DistributionPackageQuantity[]**](Awd20240509DistributionPackageQuantity.md) | List of packages to be inbounded. |
**preferences** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundPreferences**](Awd20240509InboundPreferences.md) |  | [optional]
**updated_at** | **\DateTime** | Date when this order was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
