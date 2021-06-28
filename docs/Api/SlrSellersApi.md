# MPSolutions\AmznSellingPartnerApi\SlrSellersApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceParticipations()**](SlrSellersApi.md#getMarketplaceParticipations) | **GET** /sellers/v1/marketplaceParticipations | 


## `getMarketplaceParticipations()`

```php
getMarketplaceParticipations(): \MPSolutions\AmznSellingPartnerApi\Models\Sellers\SlrGetMarketplaceParticipationsResponse
```



Returns a list of marketplaces that the seller submitting the request can sell in and information about the seller's participation in those marketplaces.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | .016 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\SlrSellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SlrSellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\Sellers\SlrGetMarketplaceParticipationsResponse**](../Model/SlrGetMarketplaceParticipationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
