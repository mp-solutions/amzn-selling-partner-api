# # PurchaseShipmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_reference_id** | **string** | Client reference id. |
**ship_to** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Address**](Address.md) |  |
**ship_from** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Address**](Address.md) |  |
**ship_date** | [**\DateTime**](\DateTime.md) | The start date and time. This defaults to the current date and time. | [optional]
**service_type** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ServiceType**](ServiceType.md) |  |
**containers** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\Container[]**](Container.md) | A list of container. |
**label_specification** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\LabelSpecification**](LabelSpecification.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
