# # FnnSellerDealPaymentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | **\DateTime** |  | [optional]
**deal_id** | **string** | The unique identifier of the deal. | [optional]
**deal_description** | **string** | The internal description of the deal. | [optional]
**event_type** | **string** | The type of event: SellerDealComplete. | [optional]
**fee_type** | **string** | The type of fee: RunLightningDealFee. | [optional]
**fee_amount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**tax_amount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**total_amount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
