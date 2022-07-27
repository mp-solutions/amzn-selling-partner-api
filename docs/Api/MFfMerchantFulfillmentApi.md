# MPSolutions\AmznSellingPartnerApi\MFfMerchantFulfillmentApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment()**](MFfMerchantFulfillmentApi.md#cancelShipment) | **DELETE** /mfn/v0/shipments/{shipmentId} | 
[**cancelShipmentOld()**](MFfMerchantFulfillmentApi.md#cancelShipmentOld) | **PUT** /mfn/v0/shipments/{shipmentId}/cancel | 
[**createShipment()**](MFfMerchantFulfillmentApi.md#createShipment) | **POST** /mfn/v0/shipments | 
[**getAdditionalSellerInputs()**](MFfMerchantFulfillmentApi.md#getAdditionalSellerInputs) | **POST** /mfn/v0/additionalSellerInputs | 
[**getAdditionalSellerInputsOld()**](MFfMerchantFulfillmentApi.md#getAdditionalSellerInputsOld) | **POST** /mfn/v0/sellerInputs | 
[**getEligibleShipmentServices()**](MFfMerchantFulfillmentApi.md#getEligibleShipmentServices) | **POST** /mfn/v0/eligibleShippingServices | 
[**getEligibleShipmentServicesOld()**](MFfMerchantFulfillmentApi.md#getEligibleShipmentServicesOld) | **POST** /mfn/v0/eligibleServices | 
[**getShipment()**](MFfMerchantFulfillmentApi.md#getShipment) | **GET** /mfn/v0/shipments/{shipmentId} | 


## `cancelShipment()`

```php
cancelShipment($shipment_id): \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCancelShipmentResponse
```



Cancel the shipment indicated by the specified shipment identifier.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MFfMerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFfMerchantFulfillmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment to cancel. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCancelShipmentResponse**](../Model/MFfCancelShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelShipmentOld()`

```php
cancelShipmentOld($shipment_id): \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCancelShipmentResponse
```



Cancel the shipment indicated by the specified shipment identifer.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MFfMerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipmentOld($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFfMerchantFulfillmentApi->cancelShipmentOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment to cancel. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCancelShipmentResponse**](../Model/MFfCancelShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShipment()`

```php
createShipment($body): \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCreateShipmentResponse
```



Create a shipment with the information provided.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MFfMerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCreateShipmentRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCreateShipmentRequest

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFfMerchantFulfillmentApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCreateShipmentRequest**](../Model/MFfCreateShipmentRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfCreateShipmentResponse**](../Model/MFfCreateShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdditionalSellerInputs()`

```php
getAdditionalSellerInputs($body): \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsResponse
```



Gets a list of additional seller inputs required for a ship method. This is generally used for international shipping.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MFfMerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsRequest

try {
    $result = $apiInstance->getAdditionalSellerInputs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFfMerchantFulfillmentApi->getAdditionalSellerInputs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsRequest**](../Model/MFfGetAdditionalSellerInputsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsResponse**](../Model/MFfGetAdditionalSellerInputsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdditionalSellerInputsOld()`

```php
getAdditionalSellerInputsOld($body): \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsResponse
```



Get a list of additional seller inputs required for a ship method. This is generally used for international shipping.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MFfMerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsRequest

try {
    $result = $apiInstance->getAdditionalSellerInputsOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFfMerchantFulfillmentApi->getAdditionalSellerInputsOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsRequest**](../Model/MFfGetAdditionalSellerInputsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetAdditionalSellerInputsResponse**](../Model/MFfGetAdditionalSellerInputsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEligibleShipmentServices()`

```php
getEligibleShipmentServices($body): \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesResponse
```



Returns a list of shipping service offers that satisfy the specified shipment request details.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MFfMerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesRequest

try {
    $result = $apiInstance->getEligibleShipmentServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFfMerchantFulfillmentApi->getEligibleShipmentServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesRequest**](../Model/MFfGetEligibleShipmentServicesRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesResponse**](../Model/MFfGetEligibleShipmentServicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEligibleShipmentServicesOld()`

```php
getEligibleShipmentServicesOld($body): \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesResponse
```



Returns a list of shipping service offers that satisfy the specified shipment request details.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MFfMerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesRequest

try {
    $result = $apiInstance->getEligibleShipmentServicesOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFfMerchantFulfillmentApi->getEligibleShipmentServicesOld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesRequest**](../Model/MFfGetEligibleShipmentServicesRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetEligibleShipmentServicesResponse**](../Model/MFfGetEligibleShipmentServicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipment()`

```php
getShipment($shipment_id): \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetShipmentResponse
```



Returns the shipment information for an existing shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MFfMerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The Amazon-defined shipment identifier for the shipment.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFfMerchantFulfillmentApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfGetShipmentResponse**](../Model/MFfGetShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
