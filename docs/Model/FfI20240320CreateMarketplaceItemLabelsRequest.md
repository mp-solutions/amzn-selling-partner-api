# # FfI20240320CreateMarketplaceItemLabelsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**height** | **float** | The height of the item label. | [optional]
**label_type** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320LabelPrintType**](FfI20240320LabelPrintType.md) |  |
**locale_code** | **string** | The locale code constructed from ISO 639 language code and ISO 3166-1 alpha-2 standard of country codes separated by an underscore character. | [optional] [default to 'en_US']
**marketplace_id** | **string** | The Marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids). |
**msku_quantities** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320MskuQuantity[]**](FfI20240320MskuQuantity.md) | Represents the quantity of an MSKU to print item labels for. |
**page_type** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ItemLabelPageType**](FfI20240320ItemLabelPageType.md) |  | [optional]
**width** | **float** | The width of the item label. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
