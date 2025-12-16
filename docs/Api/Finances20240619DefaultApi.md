# MPSolutions\AmznSellingPartnerApi\Finances20240619DefaultApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTransactions()**](Finances20240619DefaultApi.md#listTransactions) | **GET** /finances/2024-06-19/transactions | 


## `listTransactions()`

```php
listTransactions($posted_after, $posted_before, $marketplace_id, $transaction_status, $related_identifier_name, $related_identifier_value, $next_token): \MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619ListTransactionsResponse
```



Returns transactions for the given parameters. Financial events might not include orders from the last 48 hours.  **Usage plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.5 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Finances20240619DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$posted_after = 2023-01-12; // \DateTime | The response includes financial events posted on or after this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The date-time must be more than two minutes before the time of the request.  This field is required if you do not specify a related identifier.
$posted_before = 2023-02-12; // \DateTime | The response includes financial events posted before (but not on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.  The date-time must be later than `PostedAfter` and more than two minutes before the request was submitted. If `PostedAfter` and `PostedBefore` are more than 180 days apart, the response is empty.  **Default:** Two minutes before the time of the request.
$marketplace_id = ATIV93840DER; // string | The identifier of the marketplace from which you want to retrieve transactions. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
$transaction_status = RELEASED; // string | The status of the transaction.  **Possible values:**  * `DEFERRED`: the transaction is currently deferred. * `RELEASED`: the transaction is currently released. * `DEFERRED_RELEASED`: the transaction was deferred in the past, but is now released. The status of a deferred transaction is updated to `DEFERRED_RELEASED` when the transaction is released.
$related_identifier_name = FINANCIAL_EVENT_GROUP_ID; // string | The name of the `relatedIdentifier`.  **Possible values:**  * `FINANCIAL_EVENT_GROUP_ID`: the financial event group ID associated with the transaction.   **Note:**   FINANCIAL_EVENT_GROUP_ID is the only `relatedIdentifier` with filtering capabilities at the moment. While other `relatedIdentifier` values will be included in the response when available, they cannot be used for filtering purposes.
$related_identifier_value = 8129762527551; // string | The value of the `relatedIdentifier`.
$next_token = jehgri34yo7jr9e8f984tr9i4o; // string | The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.

try {
    $result = $apiInstance->listTransactions($posted_after, $posted_before, $marketplace_id, $transaction_status, $related_identifier_name, $related_identifier_value, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Finances20240619DefaultApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **posted_after** | **\DateTime**| The response includes financial events posted on or after this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The date-time must be more than two minutes before the time of the request.  This field is required if you do not specify a related identifier. | [optional]
 **posted_before** | **\DateTime**| The response includes financial events posted before (but not on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.  The date-time must be later than &#x60;PostedAfter&#x60; and more than two minutes before the request was submitted. If &#x60;PostedAfter&#x60; and &#x60;PostedBefore&#x60; are more than 180 days apart, the response is empty.  **Default:** Two minutes before the time of the request. | [optional]
 **marketplace_id** | **string**| The identifier of the marketplace from which you want to retrieve transactions. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids). | [optional]
 **transaction_status** | **string**| The status of the transaction.  **Possible values:**  * &#x60;DEFERRED&#x60;: the transaction is currently deferred. * &#x60;RELEASED&#x60;: the transaction is currently released. * &#x60;DEFERRED_RELEASED&#x60;: the transaction was deferred in the past, but is now released. The status of a deferred transaction is updated to &#x60;DEFERRED_RELEASED&#x60; when the transaction is released. | [optional]
 **related_identifier_name** | **string**| The name of the &#x60;relatedIdentifier&#x60;.  **Possible values:**  * &#x60;FINANCIAL_EVENT_GROUP_ID&#x60;: the financial event group ID associated with the transaction.   **Note:**   FINANCIAL_EVENT_GROUP_ID is the only &#x60;relatedIdentifier&#x60; with filtering capabilities at the moment. While other &#x60;relatedIdentifier&#x60; values will be included in the response when available, they cannot be used for filtering purposes. | [optional]
 **related_identifier_value** | **string**| The value of the &#x60;relatedIdentifier&#x60;. | [optional]
 **next_token** | **string**| The response includes &#x60;nextToken&#x60; when the number of results exceeds the specified &#x60;pageSize&#x60; value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until &#x60;nextToken&#x60; is null. Note that this operation can return empty pages. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Finances20240619\Finances20240619ListTransactionsResponse**](../Model/Finances20240619ListTransactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
