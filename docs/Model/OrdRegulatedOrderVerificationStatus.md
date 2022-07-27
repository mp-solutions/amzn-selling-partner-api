# # OrdRegulatedOrderVerificationStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdVerificationStatus**](OrdVerificationStatus.md) |  |
**requires_merchant_action** | **bool** | When true, the regulated information provided in the order requires a review by the merchant. |
**valid_rejection_reasons** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdRejectionReason[]**](OrdRejectionReason.md) | A list of valid rejection reasons that may be used to reject the order&#39;s regulated information. |
**rejection_reason** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdRejectionReason**](OrdRejectionReason.md) |  | [optional]
**review_date** | **string** | The date the order was reviewed. In ISO 8601 date time format. | [optional]
**external_reviewer_id** | **string** | The identifier for the order&#39;s regulated information reviewer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
