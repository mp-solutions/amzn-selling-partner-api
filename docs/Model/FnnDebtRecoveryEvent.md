# # FnnDebtRecoveryEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debt_recovery_type** | **string** | The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment | [optional]
**recovery_amount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**over_payment_credit** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**debt_recovery_item_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnDebtRecoveryItem[]**](FnnDebtRecoveryItem.md) | A list of debt recovery item information. | [optional]
**charge_instrument_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnChargeInstrument[]**](FnnChargeInstrument.md) | A list of payment instruments. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
