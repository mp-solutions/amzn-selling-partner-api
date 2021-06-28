# MPSolutions\AmznSellingPartnerApi\FIEFbaInboundApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemEligibilityPreview()**](FIEFbaInboundApi.md#getItemEligibilityPreview) | **GET** /fba/inbound/v1/eligibility/itemPreview | 


## `getItemEligibilityPreview()`

```php
getItemEligibilityPreview($asin, $program, $marketplace_ids): \MPSolutions\AmznSellingPartnerApi\Models\FbaInboundEligibility\FIEGetItemEligibilityPreviewResponse
```



This operation gets an eligibility preview for an item that you specify. You can specify the type of eligibility preview that you want (INBOUND or COMMINGLING). For INBOUND previews, you can specify the marketplace in which you want to determine the item's eligibility.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FIEFbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asin = 'asin_example'; // string | The ASIN of the item for which you want an eligibility preview.
$program = 'program_example'; // string | The program that you want to check eligibility against.
$marketplace_ids = array('marketplace_ids_example'); // string[] | The identifier for the marketplace in which you want to determine eligibility. Required only when program=INBOUND.

try {
    $result = $apiInstance->getItemEligibilityPreview($asin, $program, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FIEFbaInboundApi->getItemEligibilityPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The ASIN of the item for which you want an eligibility preview. |
 **program** | **string**| The program that you want to check eligibility against. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FbaInboundEligibility\FIEGetItemEligibilityPreviewResponse**](../Model/FIEGetItemEligibilityPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `ItemEligibilityPreview`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
