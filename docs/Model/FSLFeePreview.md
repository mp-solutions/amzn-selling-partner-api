# # FSLFeePreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN) value used to identify the item. | [optional]
**price** | [**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\FSLMoneyType**](FSLMoneyType.md) |  | [optional]
**fee_breakdown** | [**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\FSLFeeLineItem[]**](FSLFeeLineItem.md) | A list of the Small and Light fees for the item. | [optional]
**total_fees** | [**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\FSLMoneyType**](FSLMoneyType.md) |  | [optional]
**errors** | [**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\FSLError[]**](FSLError.md) | One or more unexpected errors occurred during the getSmallAndLightFeePreview operation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
