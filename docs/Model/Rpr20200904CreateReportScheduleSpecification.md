# # Rpr20200904CreateReportScheduleSpecification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_type** | **string** | The report type. |
**marketplace_ids** | **string[]** | A list of marketplace identifiers for the report schedule. |
**report_options** | **array<string,string>** | Additional information passed to reports. This varies by report type. | [optional]
**period** | **string** | One of a set of predefined ISO 8601 periods that specifies how often a report should be created. |
**next_report_creation_time** | **\DateTime** | The date and time when the schedule will create its next report, in ISO 8601 date time format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
