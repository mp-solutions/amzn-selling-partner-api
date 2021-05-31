# MPSolutions\AmznSellingPartnerApi\VendorShippingLabelsApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShippingLabel()**](VendorShippingLabelsApi.md#getShippingLabel) | **GET** /vendor/directFulfillment/shipping/v1/shippingLabels/{purchaseOrderNumber} | 
[**getShippingLabels()**](VendorShippingLabelsApi.md#getShippingLabels) | **GET** /vendor/directFulfillment/shipping/v1/shippingLabels | 
[**submitShippingLabelRequest()**](VendorShippingLabelsApi.md#submitShippingLabelRequest) | **POST** /vendor/directFulfillment/shipping/v1/shippingLabels | 


## `getShippingLabel()`

```php
getShippingLabel($purchase_order_number): \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\GetShippingLabelResponse
```



Returns a shipping label for the purchaseOrderNumber that you specify.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\VendorShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order.

try {
    $result = $apiInstance->getShippingLabel($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorShippingLabelsApi->getShippingLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\GetShippingLabelResponse**](../Model/GetShippingLabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingLabels()`

```php
getShippingLabels($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token): \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\GetShippingLabelListResponse
```



Returns a list of shipping labels created during the time frame that you specify. You define that time frame using the createdAfter and createdBefore parameters. You must use both of these parameters. The date range to search must not be more than 7 days.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\VendorShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
$limit = 56; // int | The limit to the number of records returned.
$sort_order = 'ASC'; // string | Sort ASC or DESC by order creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call.

try {
    $result = $apiInstance->getShippingLabels($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorShippingLabelsApi->getShippingLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **\DateTime**| Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **\DateTime**| Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. | [optional]
 **limit** | **int**| The limit to the number of records returned. | [optional]
 **sort_order** | **string**| Sort ASC or DESC by order creation date. | [optional] [default to &#39;ASC&#39;]
 **next_token** | **string**| Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\GetShippingLabelListResponse**](../Model/GetShippingLabelListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitShippingLabelRequest()`

```php
submitShippingLabelRequest($body): \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\SubmitShippingLabelsResponse
```



Creates a shipping label for a purchase order and returns a transactionId for reference.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\VendorShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest

try {
    $result = $apiInstance->submitShippingLabelRequest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorShippingLabelsApi->submitShippingLabelRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest**](../Model/SubmitShippingLabelsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\SubmitShippingLabelsResponse**](../Model/SubmitShippingLabelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
