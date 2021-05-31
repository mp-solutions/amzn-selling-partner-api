# # GetRatesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_to** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Address**](Address.md) |  |
**ship_from** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Address**](Address.md) |  |
**service_types** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ServiceType[]**](ServiceType.md) | A list of service types that can be used to send the shipment. |
**ship_date** | [**\DateTime**](\DateTime.md) | The start date and time. This defaults to the current date and time. | [optional]
**container_specifications** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ContainerSpecification[]**](ContainerSpecification.md) | A list of container specifications. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
