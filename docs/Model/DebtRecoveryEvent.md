# # DebtRecoveryEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debt_recovery_type** | **string** | The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment | [optional]
**recovery_amount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\Currency**](Currency.md) |  | [optional]
**over_payment_credit** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\Currency**](Currency.md) |  | [optional]
**debt_recovery_item_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\DebtRecoveryItem[]**](DebtRecoveryItem.md) | A list of debt recovery item information. | [optional]
**charge_instrument_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\ChargeInstrument[]**](ChargeInstrument.md) | A list of payment instruments. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
