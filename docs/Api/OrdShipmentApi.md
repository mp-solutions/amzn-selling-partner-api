# MPSolutions\AmznSellingPartnerApi\OrdShipmentApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateShipmentStatus()**](OrdShipmentApi.md#updateShipmentStatus) | **POST** /orders/v0/orders/{orderId}/shipment | 


## `updateShipmentStatus()`

```php
updateShipmentStatus($order_id, $payload)
```



Update the shipment status for an order that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\OrdShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$payload = new \MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdUpdateShipmentStatusRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdUpdateShipmentStatusRequest | The request body for the updateShipmentStatus operation.

try {
    $apiInstance->updateShipmentStatus($order_id, $payload);
} catch (Exception $e) {
    echo 'Exception when calling OrdShipmentApi->updateShipmentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| An Amazon-defined order identifier, in 3-7-7 format. |
 **payload** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdUpdateShipmentStatusRequest**](../Model/OrdUpdateShipmentStatusRequest.md)| The request body for the updateShipmentStatus operation. |

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
