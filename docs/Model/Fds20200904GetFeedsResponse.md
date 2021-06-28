# # Fds20200904GetFeedsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payload** | [**\MPSolutions\AmznSellingPartnerApi\Models\Feeds20200904\Fds20200904Feed[]**](Fds20200904Feed.md) |  | [optional]
**next_token** | **string** | Returned when the number of results exceeds pageSize. To get the next page of results, call the getFeeds operation with this token as the only parameter. | [optional]
**errors** | [**\MPSolutions\AmznSellingPartnerApi\Models\Feeds20200904\Fds20200904Error[]**](Fds20200904Error.md) | A list of error responses returned when a request is unsuccessful. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
