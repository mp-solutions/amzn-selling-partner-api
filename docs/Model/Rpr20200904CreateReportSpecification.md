# # Rpr20200904CreateReportSpecification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_options** | **array<string,string>** | Additional information passed to reports. This varies by report type. | [optional]
**report_type** | **string** | The report type. |
**data_start_time** | **\DateTime** | The start of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this. | [optional]
**data_end_time** | **\DateTime** | The end of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this. | [optional]
**marketplace_ids** | **string[]** | A list of marketplace identifiers. The report document&#39;s contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
