# # NtfEventFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregation_settings** | [**\MPSolutions\AmznSellingPartnerApi\Models\Notifications\NtfAggregationSettings**](NtfAggregationSettings.md) |  | [optional]
**marketplace_ids** | **string[]** | A list of marketplace identifiers to subscribe to (e.g. ATVPDKIKX0DER). To receive notifications in every marketplace, do not provide this list. | [optional]
**event_filter_type** | **string** | An eventFilterType value that is supported by the specific notificationType. This is used by the subscription service to determine the type of event filter. Refer to the section of the [Notifications Use Case Guide](doc:notifications-api-v1-use-case-guide) that describes the specific notificationType to determine if an eventFilterType is supported. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
