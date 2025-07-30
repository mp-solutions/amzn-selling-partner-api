# MPSolutions\AmznSellingPartnerApi\Awd20240509AwdApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelInbound()**](Awd20240509AwdApi.md#cancelInbound) | **POST** /awd/2024-05-09/inboundOrders/{orderId}/cancellation | 
[**checkInboundEligibility()**](Awd20240509AwdApi.md#checkInboundEligibility) | **POST** /awd/2024-05-09/inboundEligibility | 
[**confirmInbound()**](Awd20240509AwdApi.md#confirmInbound) | **POST** /awd/2024-05-09/inboundOrders/{orderId}/confirmation | 
[**createInbound()**](Awd20240509AwdApi.md#createInbound) | **POST** /awd/2024-05-09/inboundOrders | 
[**getInbound()**](Awd20240509AwdApi.md#getInbound) | **GET** /awd/2024-05-09/inboundOrders/{orderId} | 
[**getInboundShipment()**](Awd20240509AwdApi.md#getInboundShipment) | **GET** /awd/2024-05-09/inboundShipments/{shipmentId} | 
[**getInboundShipmentLabels()**](Awd20240509AwdApi.md#getInboundShipmentLabels) | **GET** /awd/2024-05-09/inboundShipments/{shipmentId}/labels | 
[**listInboundShipments()**](Awd20240509AwdApi.md#listInboundShipments) | **GET** /awd/2024-05-09/inboundShipments | 
[**listInventory()**](Awd20240509AwdApi.md#listInventory) | **GET** /awd/2024-05-09/inventory | 
[**updateInbound()**](Awd20240509AwdApi.md#updateInbound) | **PUT** /awd/2024-05-09/inboundOrders/{orderId} | 
[**updateInboundShipmentTransportDetails()**](Awd20240509AwdApi.md#updateInboundShipmentTransportDetails) | **PUT** /awd/2024-05-09/inboundShipments/{shipmentId}/transport | 


## `cancelInbound()`

```php
cancelInbound($order_id)
```



Cancels an AWD Inbound order and its associated shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The ID of the inbound order you want to cancel.

try {
    $apiInstance->cancelInbound($order_id);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->cancelInbound: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The ID of the inbound order you want to cancel. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkInboundEligibility()`

```php
checkInboundEligibility($body): \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundEligibility
```



Determines if the packages you specify are eligible for an AWD inbound order and contains error details for ineligible packages.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundPackages(); // \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundPackages | Represents the packages you want to inbound.

try {
    $result = $apiInstance->checkInboundEligibility($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->checkInboundEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundPackages**](../Model/Awd20240509InboundPackages.md)| Represents the packages you want to inbound. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundEligibility**](../Model/Awd20240509InboundEligibility.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmInbound()`

```php
confirmInbound($order_id)
```



Confirms an AWD inbound order in `DRAFT` status.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The ID of the inbound order that you want to confirm.

try {
    $apiInstance->confirmInbound($order_id);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->confirmInbound: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The ID of the inbound order that you want to confirm. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInbound()`

```php
createInbound($body): \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrderReference
```



Creates a draft AWD inbound order with a list of packages for inbound shipment. The operation creates one shipment per order.   **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrderCreationData(); // \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrderCreationData | Payload for creating an inbound order.

try {
    $result = $apiInstance->createInbound($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->createInbound: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrderCreationData**](../Model/Awd20240509InboundOrderCreationData.md)| Payload for creating an inbound order. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrderReference**](../Model/Awd20240509InboundOrderReference.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInbound()`

```php
getInbound($order_id): \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrder
```



Retrieves an AWD inbound order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The ID of the inbound order that you want to retrieve.

try {
    $result = $apiInstance->getInbound($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->getInbound: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The ID of the inbound order that you want to retrieve. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrder**](../Model/Awd20240509InboundOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundShipment()`

```php
getInboundShipment($shipment_id, $sku_quantities): \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundShipment
```



Retrieves an AWD inbound shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | ID for the shipment. A shipment contains the cases being inbounded.
$sku_quantities = SHOW; // string | If equal to `SHOW`, the response includes the shipment SKU quantity details.  Defaults to `HIDE`, in which case the response does not contain SKU quantities

try {
    $result = $apiInstance->getInboundShipment($shipment_id, $sku_quantities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->getInboundShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| ID for the shipment. A shipment contains the cases being inbounded. |
 **sku_quantities** | **string**| If equal to &#x60;SHOW&#x60;, the response includes the shipment SKU quantity details.  Defaults to &#x60;HIDE&#x60;, in which case the response does not contain SKU quantities | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundShipment**](../Model/Awd20240509InboundShipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundShipmentLabels()`

```php
getInboundShipmentLabels($shipment_id, $page_type, $format_type): \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509ShipmentLabels
```



Retrieves the box labels for a shipment ID that you specify. This is an asynchronous operation. If the label status is `GENERATED`, then the label URL is available.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | ID for the shipment.
$page_type = PLAIN_PAPER; // string | Page type for the generated labels. The default is `PLAIN_PAPER`.
$format_type = PDF; // string | The format type of the output file that contains your labels. The default format type is `PDF`.

try {
    $result = $apiInstance->getInboundShipmentLabels($shipment_id, $page_type, $format_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->getInboundShipmentLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| ID for the shipment. |
 **page_type** | **string**| Page type for the generated labels. The default is &#x60;PLAIN_PAPER&#x60;. | [optional]
 **format_type** | **string**| The format type of the output file that contains your labels. The default format type is &#x60;PDF&#x60;. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509ShipmentLabels**](../Model/Awd20240509ShipmentLabels.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboundShipments()`

```php
listInboundShipments($sort_by, $sort_order, $shipment_status, $updated_after, $updated_before, $max_results, $next_token): \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509ShipmentListing
```



Retrieves a summary of all the inbound AWD shipments associated with a merchant, with the ability to apply optional filters.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Field to sort results by. By default, the response will be sorted by UPDATED_AT.
$sort_order = ASCENDING; // string | Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order.
$shipment_status = CREATED; // string | Filter by inbound shipment status.
$updated_after = 2023-01-12T10:00:00.000Z; // \DateTime | List the inbound shipments that were updated after a certain time (inclusive). The date must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
$updated_before = 2023-01-12T10:00:00.000Z; // \DateTime | List the inbound shipments that were updated before a certain time (inclusive). The date must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
$max_results = 10; // int | Maximum number of results to return.
$next_token = SampleToken; // string | A token that is used to retrieve the next page of results. The response includes `nextToken` when the number of results exceeds the specified `maxResults` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.

try {
    $result = $apiInstance->listInboundShipments($sort_by, $sort_order, $shipment_status, $updated_after, $updated_before, $max_results, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->listInboundShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Field to sort results by. By default, the response will be sorted by UPDATED_AT. | [optional]
 **sort_order** | **string**| Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order. | [optional]
 **shipment_status** | **string**| Filter by inbound shipment status. | [optional]
 **updated_after** | **\DateTime**| List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. | [optional]
 **updated_before** | **\DateTime**| List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. | [optional]
 **max_results** | **int**| Maximum number of results to return. | [optional] [default to 25]
 **next_token** | **string**| A token that is used to retrieve the next page of results. The response includes &#x60;nextToken&#x60; when the number of results exceeds the specified &#x60;maxResults&#x60; value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until &#x60;nextToken&#x60; is null. Note that this operation can return empty pages. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509ShipmentListing**](../Model/Awd20240509ShipmentListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInventory()`

```php
listInventory($sku, $sort_order, $details, $next_token, $max_results): \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InventoryListing
```



Lists AWD inventory associated with a merchant with the ability to apply optional filters.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = TestSKU; // string | Filter by seller or merchant SKU for the item.
$sort_order = 'sort_order_example'; // string | Sort the response in `ASCENDING` or `DESCENDING` order.
$details = SHOW; // string | Set to `SHOW` to return summaries with additional inventory details. Defaults to `HIDE,` which returns only inventory summary totals.
$next_token = SampleToken; // string | A token that is used to retrieve the next page of results. The response includes `nextToken` when the number of results exceeds the specified `maxResults` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
$max_results = 10; // int | Maximum number of results to return.

try {
    $result = $apiInstance->listInventory($sku, $sort_order, $details, $next_token, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->listInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| Filter by seller or merchant SKU for the item. | [optional]
 **sort_order** | **string**| Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. | [optional]
 **details** | **string**| Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. | [optional]
 **next_token** | **string**| A token that is used to retrieve the next page of results. The response includes &#x60;nextToken&#x60; when the number of results exceeds the specified &#x60;maxResults&#x60; value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until &#x60;nextToken&#x60; is null. Note that this operation can return empty pages. | [optional]
 **max_results** | **int**| Maximum number of results to return. | [optional] [default to 25]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InventoryListing**](../Model/Awd20240509InventoryListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInbound()`

```php
updateInbound($order_id, $body)
```



Updates an AWD inbound order that is in `DRAFT` status and not yet confirmed. Use this operation to update the `packagesToInbound`, `originAddress` and `preferences` attributes.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The ID of the inbound order that you want to update.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrder(); // \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrder | Represents an AWD inbound order.

try {
    $apiInstance->updateInbound($order_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->updateInbound: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The ID of the inbound order that you want to update. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundOrder**](../Model/Awd20240509InboundOrder.md)| Represents an AWD inbound order. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInboundShipmentTransportDetails()`

```php
updateInboundShipmentTransportDetails($shipment_id, $body)
```



Updates transport details for an AWD shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Awd20240509AwdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The shipment ID.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509TransportationDetails(); // \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509TransportationDetails | Transportation details for the shipment.

try {
    $apiInstance->updateInboundShipmentTransportDetails($shipment_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling Awd20240509AwdApi->updateInboundShipmentTransportDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The shipment ID. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509TransportationDetails**](../Model/Awd20240509TransportationDetails.md)| Transportation details for the shipment. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
