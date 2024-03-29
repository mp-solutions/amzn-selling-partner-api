# # FnnAffordabilityExpenseEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**posted_date** | **\DateTime** |  | [optional]
**marketplace_id** | **string** | An encrypted, Amazon-defined marketplace identifier. | [optional]
**transaction_type** | **string** | Indicates the type of transaction.   Possible values:  * Charge - For an affordability promotion expense.  * Refund - For an affordability promotion expense reversal. | [optional]
**base_expense** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**tax_type_cgst** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  |
**tax_type_sgst** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  |
**tax_type_igst** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  |
**total_expense** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
