# MPSolutions\AmznSellingPartnerApi\MsgMessagingApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmCustomizationDetails()**](MsgMessagingApi.md#confirmCustomizationDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmCustomizationDetails | 
[**createAmazonMotors()**](MsgMessagingApi.md#createAmazonMotors) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/amazonMotors | 
[**createConfirmDeliveryDetails()**](MsgMessagingApi.md#createConfirmDeliveryDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmDeliveryDetails | 
[**createConfirmOrderDetails()**](MsgMessagingApi.md#createConfirmOrderDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmOrderDetails | 
[**createConfirmServiceDetails()**](MsgMessagingApi.md#createConfirmServiceDetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmServiceDetails | 
[**createDigitalAccessKey()**](MsgMessagingApi.md#createDigitalAccessKey) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/digitalAccessKey | 
[**createLegalDisclosure()**](MsgMessagingApi.md#createLegalDisclosure) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure | 
[**createNegativeFeedbackRemoval()**](MsgMessagingApi.md#createNegativeFeedbackRemoval) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/negativeFeedbackRemoval | 
[**createUnexpectedProblem()**](MsgMessagingApi.md#createUnexpectedProblem) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/unexpectedProblem | 
[**createWarranty()**](MsgMessagingApi.md#createWarranty) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/warranty | 
[**getAttributes()**](MsgMessagingApi.md#getAttributes) | **GET** /messaging/v1/orders/{amazonOrderId}/attributes | 
[**getMessagingActionsForOrder()**](MsgMessagingApi.md#getMessagingActionsForOrder) | **GET** /messaging/v1/orders/{amazonOrderId} | 
[**sendInvoice()**](MsgMessagingApi.md#sendInvoice) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/invoice | 


## `confirmCustomizationDetails()`

```php
confirmCustomizationDetails($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmCustomizationDetailsResponse
```



Sends a message asking a buyer to provide or verify customization details such as name spelling, images, initials, etc.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmCustomizationDetailsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmCustomizationDetailsRequest

try {
    $result = $apiInstance->confirmCustomizationDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->confirmCustomizationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmCustomizationDetailsRequest**](../Model/MsgCreateConfirmCustomizationDetailsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmCustomizationDetailsResponse**](../Model/MsgCreateConfirmCustomizationDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAmazonMotors()`

```php
createAmazonMotors($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateAmazonMotorsResponse
```



Sends a message to a buyer to provide details about an Amazon Motors order. This message can only be sent by Amazon Motors sellers.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateAmazonMotorsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateAmazonMotorsRequest

try {
    $result = $apiInstance->createAmazonMotors($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createAmazonMotors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateAmazonMotorsRequest**](../Model/MsgCreateAmazonMotorsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateAmazonMotorsResponse**](../Model/MsgCreateAmazonMotorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConfirmDeliveryDetails()`

```php
createConfirmDeliveryDetails($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmDeliveryDetailsResponse
```



Sends a message to a buyer to arrange a delivery or to confirm contact information for making a delivery.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmDeliveryDetailsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmDeliveryDetailsRequest

try {
    $result = $apiInstance->createConfirmDeliveryDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createConfirmDeliveryDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmDeliveryDetailsRequest**](../Model/MsgCreateConfirmDeliveryDetailsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmDeliveryDetailsResponse**](../Model/MsgCreateConfirmDeliveryDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConfirmOrderDetails()`

```php
createConfirmOrderDetails($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmOrderDetailsResponse
```



Sends a message to ask a buyer an order-related question prior to shipping their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmOrderDetailsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmOrderDetailsRequest

try {
    $result = $apiInstance->createConfirmOrderDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createConfirmOrderDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmOrderDetailsRequest**](../Model/MsgCreateConfirmOrderDetailsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmOrderDetailsResponse**](../Model/MsgCreateConfirmOrderDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConfirmServiceDetails()`

```php
createConfirmServiceDetails($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmServiceDetailsResponse
```



Sends a message to contact a Home Service customer to arrange a service call or to gather information prior to a service call.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmServiceDetailsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmServiceDetailsRequest

try {
    $result = $apiInstance->createConfirmServiceDetails($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createConfirmServiceDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmServiceDetailsRequest**](../Model/MsgCreateConfirmServiceDetailsRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateConfirmServiceDetailsResponse**](../Model/MsgCreateConfirmServiceDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDigitalAccessKey()`

```php
createDigitalAccessKey($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateDigitalAccessKeyResponse
```



Sends a message to a buyer to share a digital access key needed to utilize digital content in their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateDigitalAccessKeyRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateDigitalAccessKeyRequest

try {
    $result = $apiInstance->createDigitalAccessKey($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createDigitalAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateDigitalAccessKeyRequest**](../Model/MsgCreateDigitalAccessKeyRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateDigitalAccessKeyResponse**](../Model/MsgCreateDigitalAccessKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLegalDisclosure()`

```php
createLegalDisclosure($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateLegalDisclosureResponse
```



Sends a critical message that contains documents that a seller is legally obligated to provide to the buyer. This message should only be used to deliver documents that are required by law.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateLegalDisclosureRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateLegalDisclosureRequest

try {
    $result = $apiInstance->createLegalDisclosure($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createLegalDisclosure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateLegalDisclosureRequest**](../Model/MsgCreateLegalDisclosureRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateLegalDisclosureResponse**](../Model/MsgCreateLegalDisclosureResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNegativeFeedbackRemoval()`

```php
createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateNegativeFeedbackRemovalResponse
```



Sends a non-critical message that asks a buyer to remove their negative feedback. This message should only be sent after the seller has resolved the buyer's problem.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createNegativeFeedbackRemoval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateNegativeFeedbackRemovalResponse**](../Model/MsgCreateNegativeFeedbackRemovalResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUnexpectedProblem()`

```php
createUnexpectedProblem($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateUnexpectedProblemResponse
```



Sends a critical message to a buyer that an unexpected problem was encountered affecting the completion of the order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateUnexpectedProblemRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateUnexpectedProblemRequest

try {
    $result = $apiInstance->createUnexpectedProblem($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createUnexpectedProblem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateUnexpectedProblemRequest**](../Model/MsgCreateUnexpectedProblemRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateUnexpectedProblemResponse**](../Model/MsgCreateUnexpectedProblemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWarranty()`

```php
createWarranty($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateWarrantyResponse
```



Sends a message to a buyer to provide details about warranty information on a purchase in their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateWarrantyRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateWarrantyRequest

try {
    $result = $apiInstance->createWarranty($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->createWarranty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateWarrantyRequest**](../Model/MsgCreateWarrantyRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgCreateWarrantyResponse**](../Model/MsgCreateWarrantyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributes()`

```php
getAttributes($amazon_order_id, $marketplace_ids): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgGetAttributesResponse
```



Returns a response containing attributes related to an order. This includes buyer preferences.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getAttributes($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgGetAttributesResponse**](../Model/MsgGetAttributesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagingActionsForOrder()`

```php
getMessagingActionsForOrder($amazon_order_id, $marketplace_ids): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgGetMessagingActionsForOrderResponse
```



Returns a list of message types that are available for an order that you specify. A message type is represented by an actions object, which contains a path and query parameter(s). You can use the path and parameter(s) to call an operation that sends a message.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which you want a list of available message types.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getMessagingActionsForOrder($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->getMessagingActionsForOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which you want a list of available message types. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgGetMessagingActionsForOrderResponse**](../Model/MsgGetMessagingActionsForOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInvoice()`

```php
sendInvoice($amazon_order_id, $marketplace_ids, $body): \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgInvoiceResponse
```



Sends a message providing the buyer an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\MsgMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = 'amazon_order_id_example'; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgInvoiceRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgInvoiceRequest

try {
    $result = $apiInstance->sendInvoice($amazon_order_id, $marketplace_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MsgMessagingApi->sendInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgInvoiceRequest**](../Model/MsgInvoiceRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Messaging\MsgInvoiceResponse**](../Model/MsgInvoiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
