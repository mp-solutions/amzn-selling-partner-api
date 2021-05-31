# MPSolutions\AmznSellingPartnerApi\ReportsApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReport()**](ReportsApi.md#cancelReport) | **DELETE** /reports/2020-09-04/reports/{reportId} | 
[**cancelReportSchedule()**](ReportsApi.md#cancelReportSchedule) | **DELETE** /reports/2020-09-04/schedules/{reportScheduleId} | 
[**createReport()**](ReportsApi.md#createReport) | **POST** /reports/2020-09-04/reports | 
[**createReportSchedule()**](ReportsApi.md#createReportSchedule) | **POST** /reports/2020-09-04/schedules | 
[**getReport()**](ReportsApi.md#getReport) | **GET** /reports/2020-09-04/reports/{reportId} | 
[**getReportDocument()**](ReportsApi.md#getReportDocument) | **GET** /reports/2020-09-04/documents/{reportDocumentId} | 
[**getReportSchedule()**](ReportsApi.md#getReportSchedule) | **GET** /reports/2020-09-04/schedules/{reportScheduleId} | 
[**getReportSchedules()**](ReportsApi.md#getReportSchedules) | **GET** /reports/2020-09-04/schedules | 
[**getReports()**](ReportsApi.md#getReports) | **GET** /reports/2020-09-04/reports | 


## `cancelReport()`

```php
cancelReport($report_id): \MPSolutions\AmznSellingPartnerApi\Models\Reports\CancelReportResponse
```



Cancels the report that you specify. Only reports with processingStatus=IN_QUEUE can be cancelled. Cancelled reports are returned in subsequent calls to the getReport and getReports operations.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 'report_id_example'; // string | The identifier for the report. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->cancelReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->cancelReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The identifier for the report. This identifier is unique only in combination with a seller ID. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\CancelReportResponse**](../Model/CancelReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelReportSchedule()`

```php
cancelReportSchedule($report_schedule_id): \MPSolutions\AmznSellingPartnerApi\Models\Reports\CancelReportScheduleResponse
```



Cancels the report schedule that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_schedule_id = 'report_schedule_id_example'; // string | The identifier for the report schedule. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->cancelReportSchedule($report_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->cancelReportSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_schedule_id** | **string**| The identifier for the report schedule. This identifier is unique only in combination with a seller ID. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\CancelReportScheduleResponse**](../Model/CancelReportScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReport()`

```php
createReport($body): \MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportResponse
```



Creates a report.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0167 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportSpecification(); // \MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportSpecification

try {
    $result = $apiInstance->createReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->createReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportSpecification**](../Model/CreateReportSpecification.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportResponse**](../Model/CreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReportSchedule()`

```php
createReportSchedule($body): \MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportScheduleResponse
```



Creates a report schedule. If a report schedule with the same report type and marketplace IDs already exists, it will be cancelled and replaced with this one.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportScheduleSpecification(); // \MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportScheduleSpecification

try {
    $result = $apiInstance->createReportSchedule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->createReportSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportScheduleSpecification**](../Model/CreateReportScheduleSpecification.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\CreateReportScheduleResponse**](../Model/CreateReportScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReport()`

```php
getReport($report_id): \MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportResponse
```



Returns report details (including the reportDocumentId, if available) for the report that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2.0 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 'report_id_example'; // string | The identifier for the report. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->getReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The identifier for the report. This identifier is unique only in combination with a seller ID. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportResponse**](../Model/GetReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportDocument()`

```php
getReportDocument($report_document_id): \MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportDocumentResponse
```



Returns the information required for retrieving a report document's contents. This includes a presigned URL for the report document as well as the information required to decrypt the document's contents.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0167 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_document_id = 'report_document_id_example'; // string | The identifier for the report document.

try {
    $result = $apiInstance->getReportDocument($report_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_document_id** | **string**| The identifier for the report document. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportDocumentResponse**](../Model/GetReportDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportSchedule()`

```php
getReportSchedule($report_schedule_id): \MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportScheduleResponse
```



Returns report schedule details for the report schedule that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_schedule_id = 'report_schedule_id_example'; // string | The identifier for the report schedule. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->getReportSchedule($report_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_schedule_id** | **string**| The identifier for the report schedule. This identifier is unique only in combination with a seller ID. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportScheduleResponse**](../Model/GetReportScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportSchedules()`

```php
getReportSchedules($report_types): \MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportSchedulesResponse
```



Returns report schedule details that match the filters that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_types = array('report_types_example'); // string[] | A list of report types used to filter report schedules.

try {
    $result = $apiInstance->getReportSchedules($report_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_types** | [**string[]**](../Model/string.md)| A list of report types used to filter report schedules. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportSchedulesResponse**](../Model/GetReportSchedulesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReports()`

```php
getReports($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token): \MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportsResponse
```



Returns report details for the reports that match the filters that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_types = array('report_types_example'); // string[] | A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required.
$processing_statuses = array('processing_statuses_example'); // string[] | A list of processing statuses used to filter reports.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify.
$page_size = 10; // int | The maximum number of reports to return in a single call.
$created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days.
$created_until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now.
$next_token = 'next_token_example'; // string | A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail.

try {
    $result = $apiInstance->getReports($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_types** | [**string[]**](../Model/string.md)| A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. | [optional]
 **processing_statuses** | [**string[]**](../Model/string.md)| A list of processing statuses used to filter reports. | [optional]
 **marketplace_ids** | [**string[]**](../Model/string.md)| A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. | [optional]
 **page_size** | **int**| The maximum number of reports to return in a single call. | [optional] [default to 10]
 **created_since** | **\DateTime**| The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. | [optional]
 **created_until** | **\DateTime**| The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. | [optional]
 **next_token** | **string**| A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Reports\GetReportsResponse**](../Model/GetReportsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
