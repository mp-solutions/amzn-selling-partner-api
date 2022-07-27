# # MFfShippingService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_service_name** | **string** | A plain text representation of a carrier&#39;s shipping service. For example, \&quot;UPS Ground\&quot; or \&quot;FedEx Standard Overnight\&quot;. |
**carrier_name** | **string** | The name of the carrier. |
**shipping_service_id** | **string** | An Amazon-defined shipping service identifier. |
**shipping_service_offer_id** | **string** | An Amazon-defined shipping service offer identifier. |
**ship_date** | **\DateTime** |  |
**earliest_estimated_delivery_date** | **\DateTime** |  | [optional]
**latest_estimated_delivery_date** | **\DateTime** |  | [optional]
**rate** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCurrencyAmount**](MFfCurrencyAmount.md) |  |
**shipping_service_options** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfShippingServiceOptions**](MFfShippingServiceOptions.md) |  |
**available_shipping_service_options** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfAvailableShippingServiceOptions**](MFfAvailableShippingServiceOptions.md) |  | [optional]
**available_label_formats** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfLabelFormat[]**](MFfLabelFormat.md) | List of label formats. | [optional]
**available_format_options_for_label** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfLabelFormatOption[]**](MFfLabelFormatOption.md) | The available label formats. | [optional]
**requires_additional_seller_inputs** | **bool** | When true, additional seller inputs are required. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
