# # FnnRetrochargeEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retrocharge_event_type** | **string** | The type of event.  Possible values:  * Retrocharge  * RetrochargeReversal | [optional]
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**posted_date** | **\DateTime** |  | [optional]
**base_tax** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**shipping_tax** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**marketplace_name** | **string** | The name of the marketplace where the retrocharge event occurred. | [optional]
**retrocharge_tax_withheld_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnTaxWithheldComponent[]**](FnnTaxWithheldComponent.md) | A list of information about taxes withheld. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
