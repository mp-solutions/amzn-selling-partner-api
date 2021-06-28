# MPSolutions\AmznSellingPartnerApi\VDSVendorShippingApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPackingSlip()**](VDSVendorShippingApi.md#getPackingSlip) | **GET** /vendor/directFulfillment/shipping/v1/packingSlips/{purchaseOrderNumber} | 
[**getPackingSlips()**](VDSVendorShippingApi.md#getPackingSlips) | **GET** /vendor/directFulfillment/shipping/v1/packingSlips | 
[**submitShipmentConfirmations()**](VDSVendorShippingApi.md#submitShipmentConfirmations) | **POST** /vendor/directFulfillment/shipping/v1/shipmentConfirmations | 
[**submitShipmentStatusUpdates()**](VDSVendorShippingApi.md#submitShipmentStatusUpdates) | **POST** /vendor/directFulfillment/shipping/v1/shipmentStatusUpdates | 


## `getPackingSlip()`

```php
getPackingSlip($purchase_order_number): \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSGetPackingSlipResponse
```



Returns a packing slip based on the purchaseOrderNumber that you specify.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\VDSVendorShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchase_order_number = 'purchase_order_number_example'; // string | The purchaseOrderNumber for the packing slip you want.

try {
    $result = $apiInstance->getPackingSlip($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VDSVendorShippingApi->getPackingSlip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The purchaseOrderNumber for the packing slip you want. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSGetPackingSlipResponse**](../Model/VDSGetPackingSlipResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPackingSlips()`

```php
getPackingSlips($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token): \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSGetPackingSlipListResponse
```



Returns a list of packing slips for the purchase orders that match the criteria specified. Date range to search must not be more than 7 days.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\VDSVendorShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = 'ship_from_party_id_example'; // string | The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses.
$limit = 56; // int | The limit to the number of records returned
$sort_order = 'ASC'; // string | Sort ASC or DESC by packing slip creation date.
$next_token = 'next_token_example'; // string | Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call.

try {
    $result = $apiInstance->getPackingSlips($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VDSVendorShippingApi->getPackingSlips: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **\DateTime**| Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **\DateTime**| Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses. | [optional]
 **limit** | **int**| The limit to the number of records returned | [optional]
 **sort_order** | **string**| Sort ASC or DESC by packing slip creation date. | [optional] [default to &#39;ASC&#39;]
 **next_token** | **string**| Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSGetPackingSlipListResponse**](../Model/VDSGetPackingSlipListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitShipmentConfirmations()`

```php
submitShipmentConfirmations($body): \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentConfirmationsResponse
```



Submits one or more shipment confirmations for vendor orders.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\VDSVendorShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentConfirmationsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentConfirmationsRequest

try {
    $result = $apiInstance->submitShipmentConfirmations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VDSVendorShippingApi->submitShipmentConfirmations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentConfirmationsRequest**](../Model/VDSSubmitShipmentConfirmationsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentConfirmationsResponse**](../Model/VDSSubmitShipmentConfirmationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitShipmentStatusUpdates()`

```php
submitShipmentStatusUpdates($body): \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentStatusUpdatesResponse
```



This API call is only to be used by Vendor-Own-Carrier (VOC) vendors. Calling this API will submit a shipment status update for the package that a vendor has shipped. It will provide the Amazon customer visibility on their order, when the package is outside of Amazon Network visibility.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\VDSVendorShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentStatusUpdatesRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentStatusUpdatesRequest

try {
    $result = $apiInstance->submitShipmentStatusUpdates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VDSVendorShippingApi->submitShipmentStatusUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentStatusUpdatesRequest**](../Model/VDSSubmitShipmentStatusUpdatesRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\VendorDirectFulfillmentShipping\VDSSubmitShipmentStatusUpdatesResponse**](../Model/VDSSubmitShipmentStatusUpdatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
