# # ShpGetRatesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_to** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ShpAddress**](ShpAddress.md) |  |
**ship_from** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ShpAddress**](ShpAddress.md) |  |
**service_types** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ShpServiceType[]**](ShpServiceType.md) | A list of service types that can be used to send the shipment. |
**ship_date** | [**\DateTime**](\DateTime.md) | The start date and time. This defaults to the current date and time. | [optional]
**container_specifications** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ShpContainerSpecification[]**](ShpContainerSpecification.md) | A list of container specifications. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
