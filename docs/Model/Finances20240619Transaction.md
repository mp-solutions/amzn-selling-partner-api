# # Finances20240619Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**selling_partner_metadata** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619SellingPartnerMetadata**](Finances20240619SellingPartnerMetadata.md) |  | [optional]
**related_identifiers** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619RelatedIdentifier[]**](Finances20240619RelatedIdentifier.md) | Related business identifiers of the transaction. | [optional]
**transaction_type** | **string** | The type of transaction.  **Possible value:** &#x60;Shipment&#x60; | [optional]
**transaction_id** | **string** | The unique identifier of the transaction. | [optional]
**transaction_status** | **string** | The status of the transaction.  **Possible values:**  * &#x60;DEFERRED&#x60;: the transaction is currently deferred. * &#x60;RELEASED&#x60;: the transaction is currently released. * &#x60;DEFERRED_RELEASED&#x60;: the transaction was deferred in the past, but is now released. The status of a deferred transaction is updated to &#x60;DEFERRED_RELEASED&#x60; when the transaction is released. | [optional]
**description** | **string** | Describes the reasons for the transaction.  **Example:** &#39;Order Payment&#39;, &#39;Refund Order&#39; | [optional]
**posted_date** | **\DateTime** | A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]
**total_amount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619Currency**](Finances20240619Currency.md) |  | [optional]
**marketplace_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619MarketplaceDetails**](Finances20240619MarketplaceDetails.md) |  | [optional]
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619Item[]**](Finances20240619Item.md) | A list of items in the transaction. | [optional]
**contexts** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619Context[]**](Finances20240619Context.md) | A list of additional information about the item. | [optional]
**breakdowns** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619Breakdown[]**](Finances20240619Breakdown.md) | A list of breakdowns that detail how the total amount is calculated for the transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
