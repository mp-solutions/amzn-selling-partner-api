# # FfI20240320PackingOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**discounts** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320Incentive[]**](FfI20240320Incentive.md) | Discount for the offered option. |
**expiration** | **\DateTime** | The time at which this packing option is no longer valid. In [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) datetime format with pattern &#x60;yyyy-MM-ddTHH:mm:ss.sssZ&#x60;. | [optional]
**fees** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320Incentive[]**](FfI20240320Incentive.md) | Fee for the offered option. |
**packing_groups** | **string[]** | Packing group IDs. |
**packing_option_id** | **string** | Identifier of a packing option. |
**status** | **string** | The status of the packing option. Possible values: &#x60;OFFERED&#x60;, &#x60;ACCEPTED&#x60;, &#x60;EXPIRED&#x60;. |
**supported_configurations** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320PackingConfiguration[]**](FfI20240320PackingConfiguration.md) | A list of possible configurations for this option. |
**supported_shipping_configurations** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ShippingConfiguration[]**](FfI20240320ShippingConfiguration.md) | **This field is deprecated**. Use the &#x60;shippingRequirements&#x60; property under &#x60;supportedConfigurations&#x60; instead. List of supported shipping modes. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
