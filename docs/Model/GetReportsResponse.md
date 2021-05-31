# # GetReportsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payload** | [**\MPSolutions\AmznSellingPartnerApi\Models\Reports\Report[]**](Report.md) |  | [optional]
**next_token** | **string** | Returned when the number of results exceeds pageSize. To get the next page of results, call getReports with this token as the only parameter. | [optional]
**errors** | [**\MPSolutions\AmznSellingPartnerApi\Models\Reports\Error[]**](Error.md) | A list of error responses returned when a request is unsuccessful. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
