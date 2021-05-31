# MPSolutions\AmznSellingPartnerApi\SmallAndLightApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSmallAndLightEnrollmentBySellerSKU()**](SmallAndLightApi.md#deleteSmallAndLightEnrollmentBySellerSKU) | **DELETE** /fba/smallAndLight/v1/enrollments/{sellerSKU} | 
[**getSmallAndLightEligibilityBySellerSKU()**](SmallAndLightApi.md#getSmallAndLightEligibilityBySellerSKU) | **GET** /fba/smallAndLight/v1/eligibilities/{sellerSKU} | 
[**getSmallAndLightEnrollmentBySellerSKU()**](SmallAndLightApi.md#getSmallAndLightEnrollmentBySellerSKU) | **GET** /fba/smallAndLight/v1/enrollments/{sellerSKU} | 
[**getSmallAndLightFeePreview()**](SmallAndLightApi.md#getSmallAndLightFeePreview) | **POST** /fba/smallAndLight/v1/feePreviews | 
[**putSmallAndLightEnrollmentBySellerSKU()**](SmallAndLightApi.md#putSmallAndLightEnrollmentBySellerSKU) | **PUT** /fba/smallAndLight/v1/enrollments/{sellerSKU} | 


## `deleteSmallAndLightEnrollmentBySellerSKU()`

```php
deleteSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids)
```



Removes the item indicated by the specified seller SKU from the Small and Light program in the specified marketplace. If the item is not eligible for disenrollment, the ineligibility reasons are returned.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\SmallAndLightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_sku = 'seller_sku_example'; // string | The seller SKU that identifies the item.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only.

try {
    $apiInstance->deleteSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightApi->deleteSmallAndLightEnrollmentBySellerSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU that identifies the item. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. |

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

## `getSmallAndLightEligibilityBySellerSKU()`

```php
getSmallAndLightEligibilityBySellerSKU($seller_sku, $marketplace_ids): \MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightEligibility
```



Returns the Small and Light program eligibility status of the item indicated by the specified seller SKU in the specified marketplace. If the item is not eligible, the ineligibility reasons are returned.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\SmallAndLightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_sku = 'seller_sku_example'; // string | The seller SKU that identifies the item.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only.

try {
    $result = $apiInstance->getSmallAndLightEligibilityBySellerSKU($seller_sku, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightApi->getSmallAndLightEligibilityBySellerSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU that identifies the item. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightEligibility**](../Model/SmallAndLightEligibility.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmallAndLightEnrollmentBySellerSKU()`

```php
getSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids): \MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightEnrollment
```



Returns the Small and Light enrollment status for the item indicated by the specified seller SKU in the specified marketplace.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\SmallAndLightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_sku = 'seller_sku_example'; // string | The seller SKU that identifies the item.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only.

try {
    $result = $apiInstance->getSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightApi->getSmallAndLightEnrollmentBySellerSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU that identifies the item. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightEnrollment**](../Model/SmallAndLightEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmallAndLightFeePreview()`

```php
getSmallAndLightFeePreview($body): \MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightFeePreviews
```



Returns the Small and Light fee estimates for the specified items. You must include a marketplaceId parameter to retrieve the proper fee estimates for items to be sold in that marketplace. The ordering of items in the response will mirror the order of the items in the request. Duplicate ASIN/price combinations are removed.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 3 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\SmallAndLightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightFeePreviewRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightFeePreviewRequest

try {
    $result = $apiInstance->getSmallAndLightFeePreview($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightApi->getSmallAndLightFeePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightFeePreviewRequest**](../Model/SmallAndLightFeePreviewRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightFeePreviews**](../Model/SmallAndLightFeePreviews.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSmallAndLightEnrollmentBySellerSKU()`

```php
putSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids): \MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightEnrollment
```



Enrolls the item indicated by the specified seller SKU in the Small and Light program in the specified marketplace. If the item is not eligible, the ineligibility reasons are returned.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\SmallAndLightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_sku = 'seller_sku_example'; // string | The seller SKU that identifies the item.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The marketplace in which to enroll the item. Note: Accepts a single marketplace only.

try {
    $result = $apiInstance->putSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallAndLightApi->putSmallAndLightEnrollmentBySellerSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU that identifies the item. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| The marketplace in which to enroll the item. Note: Accepts a single marketplace only. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FbaSmallAndLight\SmallAndLightEnrollment**](../Model/SmallAndLightEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
