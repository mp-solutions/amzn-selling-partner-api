# MPSolutions\AmznSellingPartnerApi\VendorPaymentsApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInvoices()**](VendorPaymentsApi.md#submitInvoices) | **POST** /vendor/payments/v1/invoices | 


## `submitInvoices()`

```php
submitInvoices($body): \MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\SubmitInvoicesResponse
```



Submit new invoices to Amazon.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\VendorPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\SubmitInvoicesRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\SubmitInvoicesRequest

try {
    $result = $apiInstance->submitInvoices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorPaymentsApi->submitInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\SubmitInvoicesRequest**](../Model/SubmitInvoicesRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\SubmitInvoicesResponse**](../Model/SubmitInvoicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
