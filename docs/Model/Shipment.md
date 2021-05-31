# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The unique shipment identifier. |
**client_reference_id** | **string** | Client reference id. |
**ship_from** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Address**](Address.md) |  |
**ship_to** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Address**](Address.md) |  |
**accepted_rate** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\AcceptedRate**](AcceptedRate.md) |  | [optional]
**shipper** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Party**](Party.md) |  | [optional]
**containers** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Container[]**](Container.md) | A list of container. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
