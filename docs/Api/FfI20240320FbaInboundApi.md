# MPSolutions\AmznSellingPartnerApi\FfI20240320FbaInboundApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelInboundPlan()**](FfI20240320FbaInboundApi.md#cancelInboundPlan) | **PUT** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/cancellation | 
[**cancelSelfShipAppointment()**](FfI20240320FbaInboundApi.md#cancelSelfShipAppointment) | **PUT** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentCancellation | 
[**confirmDeliveryWindowOptions()**](FfI20240320FbaInboundApi.md#confirmDeliveryWindowOptions) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryWindowOptions/{deliveryWindowOptionId}/confirmation | 
[**confirmPackingOption()**](FfI20240320FbaInboundApi.md#confirmPackingOption) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions/{packingOptionId}/confirmation | 
[**confirmPlacementOption()**](FfI20240320FbaInboundApi.md#confirmPlacementOption) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/placementOptions/{placementOptionId}/confirmation | 
[**confirmShipmentContentUpdatePreview()**](FfI20240320FbaInboundApi.md#confirmShipmentContentUpdatePreview) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/contentUpdatePreviews/{contentUpdatePreviewId}/confirmation | 
[**confirmTransportationOptions()**](FfI20240320FbaInboundApi.md#confirmTransportationOptions) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/transportationOptions/confirmation | 
[**createInboundPlan()**](FfI20240320FbaInboundApi.md#createInboundPlan) | **POST** /inbound/fba/2024-03-20/inboundPlans | 
[**createMarketplaceItemLabels()**](FfI20240320FbaInboundApi.md#createMarketplaceItemLabels) | **POST** /inbound/fba/2024-03-20/items/labels | 
[**generateDeliveryWindowOptions()**](FfI20240320FbaInboundApi.md#generateDeliveryWindowOptions) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryWindowOptions | 
[**generatePackingOptions()**](FfI20240320FbaInboundApi.md#generatePackingOptions) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions | 
[**generatePlacementOptions()**](FfI20240320FbaInboundApi.md#generatePlacementOptions) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/placementOptions | 
[**generateSelfShipAppointmentSlots()**](FfI20240320FbaInboundApi.md#generateSelfShipAppointmentSlots) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots | 
[**generateShipmentContentUpdatePreviews()**](FfI20240320FbaInboundApi.md#generateShipmentContentUpdatePreviews) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/contentUpdatePreviews | 
[**generateTransportationOptions()**](FfI20240320FbaInboundApi.md#generateTransportationOptions) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/transportationOptions | 
[**getDeliveryChallanDocument()**](FfI20240320FbaInboundApi.md#getDeliveryChallanDocument) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryChallanDocument | 
[**getInboundOperationStatus()**](FfI20240320FbaInboundApi.md#getInboundOperationStatus) | **GET** /inbound/fba/2024-03-20/operations/{operationId} | 
[**getInboundPlan()**](FfI20240320FbaInboundApi.md#getInboundPlan) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId} | 
[**getSelfShipAppointmentSlots()**](FfI20240320FbaInboundApi.md#getSelfShipAppointmentSlots) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots | 
[**getShipment()**](FfI20240320FbaInboundApi.md#getShipment) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId} | 
[**getShipmentContentUpdatePreview()**](FfI20240320FbaInboundApi.md#getShipmentContentUpdatePreview) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/contentUpdatePreviews/{contentUpdatePreviewId} | 
[**listDeliveryWindowOptions()**](FfI20240320FbaInboundApi.md#listDeliveryWindowOptions) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryWindowOptions | 
[**listInboundPlanBoxes()**](FfI20240320FbaInboundApi.md#listInboundPlanBoxes) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/boxes | 
[**listInboundPlanItems()**](FfI20240320FbaInboundApi.md#listInboundPlanItems) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/items | 
[**listInboundPlanPallets()**](FfI20240320FbaInboundApi.md#listInboundPlanPallets) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/pallets | 
[**listInboundPlans()**](FfI20240320FbaInboundApi.md#listInboundPlans) | **GET** /inbound/fba/2024-03-20/inboundPlans | 
[**listItemComplianceDetails()**](FfI20240320FbaInboundApi.md#listItemComplianceDetails) | **GET** /inbound/fba/2024-03-20/items/compliance | 
[**listPackingGroupBoxes()**](FfI20240320FbaInboundApi.md#listPackingGroupBoxes) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingGroups/{packingGroupId}/boxes | 
[**listPackingGroupItems()**](FfI20240320FbaInboundApi.md#listPackingGroupItems) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingGroups/{packingGroupId}/items | 
[**listPackingOptions()**](FfI20240320FbaInboundApi.md#listPackingOptions) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions | 
[**listPlacementOptions()**](FfI20240320FbaInboundApi.md#listPlacementOptions) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/placementOptions | 
[**listPrepDetails()**](FfI20240320FbaInboundApi.md#listPrepDetails) | **GET** /inbound/fba/2024-03-20/items/prepDetails | 
[**listShipmentBoxes()**](FfI20240320FbaInboundApi.md#listShipmentBoxes) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/boxes | 
[**listShipmentContentUpdatePreviews()**](FfI20240320FbaInboundApi.md#listShipmentContentUpdatePreviews) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/contentUpdatePreviews | 
[**listShipmentItems()**](FfI20240320FbaInboundApi.md#listShipmentItems) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/items | 
[**listShipmentPallets()**](FfI20240320FbaInboundApi.md#listShipmentPallets) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/pallets | 
[**listTransportationOptions()**](FfI20240320FbaInboundApi.md#listTransportationOptions) | **GET** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/transportationOptions | 
[**scheduleSelfShipAppointment()**](FfI20240320FbaInboundApi.md#scheduleSelfShipAppointment) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots/{slotId}/schedule | 
[**setPackingInformation()**](FfI20240320FbaInboundApi.md#setPackingInformation) | **POST** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingInformation | 
[**setPrepDetails()**](FfI20240320FbaInboundApi.md#setPrepDetails) | **POST** /inbound/fba/2024-03-20/items/prepDetails | 
[**updateInboundPlanName()**](FfI20240320FbaInboundApi.md#updateInboundPlanName) | **PUT** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/name | 
[**updateItemComplianceDetails()**](FfI20240320FbaInboundApi.md#updateItemComplianceDetails) | **PUT** /inbound/fba/2024-03-20/items/compliance | 
[**updateShipmentName()**](FfI20240320FbaInboundApi.md#updateShipmentName) | **PUT** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/name | 
[**updateShipmentSourceAddress()**](FfI20240320FbaInboundApi.md#updateShipmentSourceAddress) | **PUT** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/sourceAddress | 
[**updateShipmentTrackingDetails()**](FfI20240320FbaInboundApi.md#updateShipmentTrackingDetails) | **PUT** /inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/trackingDetails | 


## `cancelInboundPlan()`

```php
cancelInboundPlan($inbound_plan_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CancelInboundPlanResponse
```



Cancels an Inbound Plan. Charges may apply if the cancellation is performed outside of a void window. The window for Amazon Partnered Carriers is 24 hours for Small Parcel Delivery (SPD) and one hour for Less-Than-Truckload (LTL) carrier shipments.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.

try {
    $result = $apiInstance->cancelInboundPlan($inbound_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->cancelInboundPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CancelInboundPlanResponse**](../Model/FfI20240320CancelInboundPlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelSelfShipAppointment()`

```php
cancelSelfShipAppointment($inbound_plan_id, $shipment_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CancelSelfShipAppointmentResponse
```



Cancels a self-ship appointment slot against a shipment. Only available in the following [marketplaces](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids): MX, BR, EG, SA, AE, IN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CancelSelfShipAppointmentRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CancelSelfShipAppointmentRequest | The body of the request to `cancelSelfShipAppointment`.

try {
    $result = $apiInstance->cancelSelfShipAppointment($inbound_plan_id, $shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->cancelSelfShipAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CancelSelfShipAppointmentRequest**](../Model/FfI20240320CancelSelfShipAppointmentRequest.md)| The body of the request to &#x60;cancelSelfShipAppointment&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CancelSelfShipAppointmentResponse**](../Model/FfI20240320CancelSelfShipAppointmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmDeliveryWindowOptions()`

```php
confirmDeliveryWindowOptions($inbound_plan_id, $shipment_id, $delivery_window_option_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmDeliveryWindowOptionsResponse
```



Confirms the delivery window option for chosen shipment within an inbound plan. A placement option must be confirmed prior to use of this API. Once confirmed, new delivery window options cannot be generated, but the chosen delivery window option can be updated before shipment closure. The window is used to provide the expected time when a shipment will arrive at the warehouse. All transportation options which have the program `CONFIRMED_DELIVERY_WINDOW` require a delivery window to be confirmed prior to transportation option confirmation.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | The shipment to confirm the delivery window option for.
$delivery_window_option_id = 'delivery_window_option_id_example'; // string | The id of the delivery window option to be confirmed.

try {
    $result = $apiInstance->confirmDeliveryWindowOptions($inbound_plan_id, $shipment_id, $delivery_window_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->confirmDeliveryWindowOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| The shipment to confirm the delivery window option for. |
 **delivery_window_option_id** | **string**| The id of the delivery window option to be confirmed. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmDeliveryWindowOptionsResponse**](../Model/FfI20240320ConfirmDeliveryWindowOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPackingOption()`

```php
confirmPackingOption($inbound_plan_id, $packing_option_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmPackingOptionResponse
```



Confirms the packing option for an inbound plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$packing_option_id = 'packing_option_id_example'; // string | Identifier of a packing option.

try {
    $result = $apiInstance->confirmPackingOption($inbound_plan_id, $packing_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->confirmPackingOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **packing_option_id** | **string**| Identifier of a packing option. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmPackingOptionResponse**](../Model/FfI20240320ConfirmPackingOptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPlacementOption()`

```php
confirmPlacementOption($inbound_plan_id, $placement_option_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmPlacementOptionResponse
```



Confirms the placement option for an inbound plan. Once confirmed, it cannot be changed for the Inbound Plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$placement_option_id = 'placement_option_id_example'; // string | The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.

try {
    $result = $apiInstance->confirmPlacementOption($inbound_plan_id, $placement_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->confirmPlacementOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **placement_option_id** | **string**| The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmPlacementOptionResponse**](../Model/FfI20240320ConfirmPlacementOptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmShipmentContentUpdatePreview()`

```php
confirmShipmentContentUpdatePreview($inbound_plan_id, $shipment_id, $content_update_preview_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmShipmentContentUpdatePreviewResponse
```



Confirm a shipment content update preview and accept the changes in transportation cost.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$content_update_preview_id = 'content_update_preview_id_example'; // string | Identifier of a content update preview.

try {
    $result = $apiInstance->confirmShipmentContentUpdatePreview($inbound_plan_id, $shipment_id, $content_update_preview_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->confirmShipmentContentUpdatePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **content_update_preview_id** | **string**| Identifier of a content update preview. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmShipmentContentUpdatePreviewResponse**](../Model/FfI20240320ConfirmShipmentContentUpdatePreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmTransportationOptions()`

```php
confirmTransportationOptions($inbound_plan_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmTransportationOptionsResponse
```



Confirms all the transportation options for an inbound plan. A placement option must be confirmed prior to use of this API. Once confirmed, new transportation options can not be generated or confirmed for the Inbound Plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmTransportationOptionsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmTransportationOptionsRequest | The body of the request to `confirmTransportationOptions`.

try {
    $result = $apiInstance->confirmTransportationOptions($inbound_plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->confirmTransportationOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmTransportationOptionsRequest**](../Model/FfI20240320ConfirmTransportationOptionsRequest.md)| The body of the request to &#x60;confirmTransportationOptions&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ConfirmTransportationOptionsResponse**](../Model/FfI20240320ConfirmTransportationOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInboundPlan()`

```php
createInboundPlan($body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateInboundPlanResponse
```



Creates an inbound plan. An inbound plan contains all the necessary information to send shipments into Amazon's fufillment network.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateInboundPlanRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateInboundPlanRequest | The body of the request to `createInboundPlan`.

try {
    $result = $apiInstance->createInboundPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->createInboundPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateInboundPlanRequest**](../Model/FfI20240320CreateInboundPlanRequest.md)| The body of the request to &#x60;createInboundPlan&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateInboundPlanResponse**](../Model/FfI20240320CreateInboundPlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMarketplaceItemLabels()`

```php
createMarketplaceItemLabels($body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateMarketplaceItemLabelsResponse
```



For a given marketplace - creates labels for a list of MSKUs.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateMarketplaceItemLabelsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateMarketplaceItemLabelsRequest | The body of the request to `createMarketplaceItemLabels`.

try {
    $result = $apiInstance->createMarketplaceItemLabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->createMarketplaceItemLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateMarketplaceItemLabelsRequest**](../Model/FfI20240320CreateMarketplaceItemLabelsRequest.md)| The body of the request to &#x60;createMarketplaceItemLabels&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CreateMarketplaceItemLabelsResponse**](../Model/FfI20240320CreateMarketplaceItemLabelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateDeliveryWindowOptions()`

```php
generateDeliveryWindowOptions($inbound_plan_id, $shipment_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateDeliveryWindowOptionsResponse
```



Generates available delivery window options for a given shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | The shipment to generate delivery window options for.

try {
    $result = $apiInstance->generateDeliveryWindowOptions($inbound_plan_id, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->generateDeliveryWindowOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| The shipment to generate delivery window options for. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateDeliveryWindowOptionsResponse**](../Model/FfI20240320GenerateDeliveryWindowOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePackingOptions()`

```php
generatePackingOptions($inbound_plan_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GeneratePackingOptionsResponse
```



Generates available packing options for the inbound plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.

try {
    $result = $apiInstance->generatePackingOptions($inbound_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->generatePackingOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GeneratePackingOptionsResponse**](../Model/FfI20240320GeneratePackingOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePlacementOptions()`

```php
generatePlacementOptions($inbound_plan_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GeneratePlacementOptionsResponse
```



Generates placement options for the inbound plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GeneratePlacementOptionsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GeneratePlacementOptionsRequest | The body of the request to `generatePlacementOptions`.

try {
    $result = $apiInstance->generatePlacementOptions($inbound_plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->generatePlacementOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GeneratePlacementOptionsRequest**](../Model/FfI20240320GeneratePlacementOptionsRequest.md)| The body of the request to &#x60;generatePlacementOptions&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GeneratePlacementOptionsResponse**](../Model/FfI20240320GeneratePlacementOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSelfShipAppointmentSlots()`

```php
generateSelfShipAppointmentSlots($inbound_plan_id, $shipment_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateSelfShipAppointmentSlotsResponse
```



Initiates the process of generating the appointment slots list. Only available in the following [marketplaces](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids): MX, BR, EG, SA, AE, IN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateSelfShipAppointmentSlotsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateSelfShipAppointmentSlotsRequest | The body of the request to `generateSelfShipAppointmentSlots`.

try {
    $result = $apiInstance->generateSelfShipAppointmentSlots($inbound_plan_id, $shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->generateSelfShipAppointmentSlots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateSelfShipAppointmentSlotsRequest**](../Model/FfI20240320GenerateSelfShipAppointmentSlotsRequest.md)| The body of the request to &#x60;generateSelfShipAppointmentSlots&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateSelfShipAppointmentSlotsResponse**](../Model/FfI20240320GenerateSelfShipAppointmentSlotsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShipmentContentUpdatePreviews()`

```php
generateShipmentContentUpdatePreviews($inbound_plan_id, $shipment_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateShipmentContentUpdatePreviewsResponse
```



Generate a shipment content update preview given a set of intended boxes and/or items for a shipment with a confirmed carrier. The shipment content update preview will be viewable with the updated costs and contents prior to confirmation.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateShipmentContentUpdatePreviewsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateShipmentContentUpdatePreviewsRequest | The body of the request to `generateShipmentContentUpdatePreviews`.

try {
    $result = $apiInstance->generateShipmentContentUpdatePreviews($inbound_plan_id, $shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->generateShipmentContentUpdatePreviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateShipmentContentUpdatePreviewsRequest**](../Model/FfI20240320GenerateShipmentContentUpdatePreviewsRequest.md)| The body of the request to &#x60;generateShipmentContentUpdatePreviews&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateShipmentContentUpdatePreviewsResponse**](../Model/FfI20240320GenerateShipmentContentUpdatePreviewsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateTransportationOptions()`

```php
generateTransportationOptions($inbound_plan_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateTransportationOptionsResponse
```



Generates available transportation options for a given placement option.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateTransportationOptionsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateTransportationOptionsRequest | The body of the request to `generateTransportationOptions`.

try {
    $result = $apiInstance->generateTransportationOptions($inbound_plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->generateTransportationOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateTransportationOptionsRequest**](../Model/FfI20240320GenerateTransportationOptionsRequest.md)| The body of the request to &#x60;generateTransportationOptions&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GenerateTransportationOptionsResponse**](../Model/FfI20240320GenerateTransportationOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryChallanDocument()`

```php
getDeliveryChallanDocument($inbound_plan_id, $shipment_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GetDeliveryChallanDocumentResponse
```



Provide delivery challan document for PCP transportation in IN marketplace.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.

try {
    $result = $apiInstance->getDeliveryChallanDocument($inbound_plan_id, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->getDeliveryChallanDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GetDeliveryChallanDocumentResponse**](../Model/FfI20240320GetDeliveryChallanDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundOperationStatus()`

```php
getInboundOperationStatus($operation_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320InboundOperationStatus
```



Gets the status of the processing of an asynchronous API call.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$operation_id = 'operation_id_example'; // string | Identifier of an asynchronous operation.

try {
    $result = $apiInstance->getInboundOperationStatus($operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->getInboundOperationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_id** | **string**| Identifier of an asynchronous operation. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320InboundOperationStatus**](../Model/FfI20240320InboundOperationStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundPlan()`

```php
getInboundPlan($inbound_plan_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320InboundPlan
```



Fetches the top level information about an inbound plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.

try {
    $result = $apiInstance->getInboundPlan($inbound_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->getInboundPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320InboundPlan**](../Model/FfI20240320InboundPlan.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSelfShipAppointmentSlots()`

```php
getSelfShipAppointmentSlots($inbound_plan_id, $shipment_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GetSelfShipAppointmentSlotsResponse
```



Retrieves a list of available self-ship appointment slots used to drop off a shipment at a warehouse. Only available in the following [marketplaces](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids): MX, BR, EG, SA, AE, IN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$page_size = 10; // int | The number of self ship appointment slots to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->getSelfShipAppointmentSlots($inbound_plan_id, $shipment_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->getSelfShipAppointmentSlots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **page_size** | **int**| The number of self ship appointment slots to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320GetSelfShipAppointmentSlotsResponse**](../Model/FfI20240320GetSelfShipAppointmentSlotsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipment()`

```php
getShipment($inbound_plan_id, $shipment_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320Shipment
```



Provides the full details for a specific shipment within an inbound plan. The `transportationOptionId` inside `acceptedTransportationSelection` can be used to retrieve the transportation details for the shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.

try {
    $result = $apiInstance->getShipment($inbound_plan_id, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320Shipment**](../Model/FfI20240320Shipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipmentContentUpdatePreview()`

```php
getShipmentContentUpdatePreview($inbound_plan_id, $shipment_id, $content_update_preview_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ContentUpdatePreview
```



Retrieve a shipment content update preview which provides a summary of the requested shipment content changes along with the transportation cost implications of the change that can only be confirmed prior to the expiry date specified.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$content_update_preview_id = 'content_update_preview_id_example'; // string | Identifier of a content update preview.

try {
    $result = $apiInstance->getShipmentContentUpdatePreview($inbound_plan_id, $shipment_id, $content_update_preview_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->getShipmentContentUpdatePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **content_update_preview_id** | **string**| Identifier of a content update preview. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ContentUpdatePreview**](../Model/FfI20240320ContentUpdatePreview.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDeliveryWindowOptions()`

```php
listDeliveryWindowOptions($inbound_plan_id, $shipment_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListDeliveryWindowOptionsResponse
```



Retrieves all delivery window options for a shipment. Delivery window options must first be generated by the `generateDeliveryWindowOptions` operation before becoming available.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | The shipment to get delivery window options for.
$page_size = 10; // int | The number of delivery window options to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listDeliveryWindowOptions($inbound_plan_id, $shipment_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listDeliveryWindowOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| The shipment to get delivery window options for. |
 **page_size** | **int**| The number of delivery window options to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListDeliveryWindowOptionsResponse**](../Model/FfI20240320ListDeliveryWindowOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboundPlanBoxes()`

```php
listInboundPlanBoxes($inbound_plan_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListInboundPlanBoxesResponse
```



Provides a paginated list of box packages in an inbound plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$page_size = 10; // int | The number of boxes to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listInboundPlanBoxes($inbound_plan_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listInboundPlanBoxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **page_size** | **int**| The number of boxes to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListInboundPlanBoxesResponse**](../Model/FfI20240320ListInboundPlanBoxesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboundPlanItems()`

```php
listInboundPlanItems($inbound_plan_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListInboundPlanItemsResponse
```



Provides a paginated list of item packages in an inbound plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$page_size = 10; // int | The number of items to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listInboundPlanItems($inbound_plan_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listInboundPlanItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **page_size** | **int**| The number of items to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListInboundPlanItemsResponse**](../Model/FfI20240320ListInboundPlanItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboundPlanPallets()`

```php
listInboundPlanPallets($inbound_plan_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListInboundPlanPalletsResponse
```



Provides a paginated list of pallet packages in an inbound plan. An inbound plan will have pallets when the related details are provided after generating Less-Than-Truckload (LTL) carrier shipments.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$page_size = 10; // int | The number of pallets to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listInboundPlanPallets($inbound_plan_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listInboundPlanPallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **page_size** | **int**| The number of pallets to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListInboundPlanPalletsResponse**](../Model/FfI20240320ListInboundPlanPalletsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboundPlans()`

```php
listInboundPlans($page_size, $pagination_token, $status, $sort_by, $sort_order): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListInboundPlansResponse
```



Provides a list of inbound plans with minimal information.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 10; // int | The number of inbound plans to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
$status = 'status_example'; // string | The status of an inbound plan.
$sort_by = 'sort_by_example'; // string | Sort by field.
$sort_order = 'sort_order_example'; // string | The sort order.

try {
    $result = $apiInstance->listInboundPlans($page_size, $pagination_token, $status, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listInboundPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of inbound plans to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]
 **status** | **string**| The status of an inbound plan. | [optional]
 **sort_by** | **string**| Sort by field. | [optional]
 **sort_order** | **string**| The sort order. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListInboundPlansResponse**](../Model/FfI20240320ListInboundPlansResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listItemComplianceDetails()`

```php
listItemComplianceDetails($mskus, $marketplace_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListItemComplianceDetailsResponse
```



List the inbound compliance details for MSKUs in a given marketplace.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mskus = array('mskus_example'); // string[] | A list of merchant SKUs, a merchant-supplied identifier of a specific SKU.
$marketplace_id = 'marketplace_id_example'; // string | The Marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).

try {
    $result = $apiInstance->listItemComplianceDetails($mskus, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listItemComplianceDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mskus** | [**string[]**](../Model/string.md)| A list of merchant SKUs, a merchant-supplied identifier of a specific SKU. |
 **marketplace_id** | **string**| The Marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids). |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListItemComplianceDetailsResponse**](../Model/FfI20240320ListItemComplianceDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPackingGroupBoxes()`

```php
listPackingGroupBoxes($inbound_plan_id, $packing_group_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPackingGroupBoxesResponse
```



Retrieves a page of boxes from a given packing group. These boxes were previously provided through the `setPackingInformation` operation. This API is used for workflows where boxes are packed before Amazon determines shipment splits.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$packing_group_id = 'packing_group_id_example'; // string | Identifier of a packing group.
$page_size = 10; // int | The number of packing group boxes to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listPackingGroupBoxes($inbound_plan_id, $packing_group_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listPackingGroupBoxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **packing_group_id** | **string**| Identifier of a packing group. |
 **page_size** | **int**| The number of packing group boxes to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPackingGroupBoxesResponse**](../Model/FfI20240320ListPackingGroupBoxesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPackingGroupItems()`

```php
listPackingGroupItems($inbound_plan_id, $packing_group_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPackingGroupItemsResponse
```



Retrieves a page of items in a given packing group. Packing options must first be generated by the corresponding operation before packing group items can be listed.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$packing_group_id = 'packing_group_id_example'; // string | Identifier of a packing group.
$page_size = 10; // int | The number of packing group items to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listPackingGroupItems($inbound_plan_id, $packing_group_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listPackingGroupItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **packing_group_id** | **string**| Identifier of a packing group. |
 **page_size** | **int**| The number of packing group items to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPackingGroupItemsResponse**](../Model/FfI20240320ListPackingGroupItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPackingOptions()`

```php
listPackingOptions($inbound_plan_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPackingOptionsResponse
```



Retrieves a list of all packing options for an inbound plan. Packing options must first be generated by the corresponding operation before becoming available.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$page_size = 10; // int | The number of packing options to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listPackingOptions($inbound_plan_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listPackingOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **page_size** | **int**| The number of packing options to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPackingOptionsResponse**](../Model/FfI20240320ListPackingOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlacementOptions()`

```php
listPlacementOptions($inbound_plan_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPlacementOptionsResponse
```



Provides a list of all placement options for an inbound plan. Placement options must first be generated by the corresponding operation before becoming available.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$page_size = 10; // int | The number of placement options to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listPlacementOptions($inbound_plan_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listPlacementOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **page_size** | **int**| The number of placement options to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPlacementOptionsResponse**](../Model/FfI20240320ListPlacementOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPrepDetails()`

```php
listPrepDetails($marketplace_id, $mskus): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPrepDetailsResponse
```



Get preparation details for a list of MSKUs in a specified marketplace.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | The marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
$mskus = array('mskus_example'); // string[] | A list of merchant SKUs, a merchant-supplied identifier of a specific SKU.

try {
    $result = $apiInstance->listPrepDetails($marketplace_id, $mskus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listPrepDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids). |
 **mskus** | [**string[]**](../Model/string.md)| A list of merchant SKUs, a merchant-supplied identifier of a specific SKU. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListPrepDetailsResponse**](../Model/FfI20240320ListPrepDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShipmentBoxes()`

```php
listShipmentBoxes($inbound_plan_id, $shipment_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListShipmentBoxesResponse
```



Provides a paginated list of box packages in a shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$page_size = 10; // int | The number of boxes to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listShipmentBoxes($inbound_plan_id, $shipment_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listShipmentBoxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **page_size** | **int**| The number of boxes to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListShipmentBoxesResponse**](../Model/FfI20240320ListShipmentBoxesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShipmentContentUpdatePreviews()`

```php
listShipmentContentUpdatePreviews($inbound_plan_id, $shipment_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListShipmentContentUpdatePreviewsResponse
```



Retrieve a paginated list of shipment content update previews for a given shipment. The shipment content update preview is a summary of the requested shipment content changes along with the transportation cost implications of the change that can only be confirmed prior to the expiry date specified.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$page_size = 10; // int | The number of content update previews to return.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listShipmentContentUpdatePreviews($inbound_plan_id, $shipment_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listShipmentContentUpdatePreviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **page_size** | **int**| The number of content update previews to return. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListShipmentContentUpdatePreviewsResponse**](../Model/FfI20240320ListShipmentContentUpdatePreviewsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShipmentItems()`

```php
listShipmentItems($inbound_plan_id, $shipment_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListShipmentItemsResponse
```



Provides a paginated list of item packages in a shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$page_size = 10; // int | The number of items to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listShipmentItems($inbound_plan_id, $shipment_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listShipmentItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **page_size** | **int**| The number of items to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListShipmentItemsResponse**](../Model/FfI20240320ListShipmentItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShipmentPallets()`

```php
listShipmentPallets($inbound_plan_id, $shipment_id, $page_size, $pagination_token): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListShipmentPalletsResponse
```



Provides a paginated list of pallet packages in a shipment. A palletized shipment will have pallets when the related details are provided after generating Less-Than-Truckload (LTL) carrier shipments.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$page_size = 10; // int | The number of pallets to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.

try {
    $result = $apiInstance->listShipmentPallets($inbound_plan_id, $shipment_id, $page_size, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listShipmentPallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **page_size** | **int**| The number of pallets to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListShipmentPalletsResponse**](../Model/FfI20240320ListShipmentPalletsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransportationOptions()`

```php
listTransportationOptions($inbound_plan_id, $page_size, $pagination_token, $placement_option_id, $shipment_id): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListTransportationOptionsResponse
```



Retrieves all transportation options for a shipment. Transportation options must first be generated by the `generateTransportationOptions` operation before becoming available.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$page_size = 10; // int | The number of transportation options to return in the response matching the given query.
$pagination_token = 'pagination_token_example'; // string | A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
$placement_option_id = 'placement_option_id_example'; // string | The placement option to get transportation options for. Either `placementOptionId` or `shipmentId` must be specified.
$shipment_id = 'shipment_id_example'; // string | The shipment to get transportation options for. Either `placementOptionId` or `shipmentId` must be specified.

try {
    $result = $apiInstance->listTransportationOptions($inbound_plan_id, $page_size, $pagination_token, $placement_option_id, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->listTransportationOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **page_size** | **int**| The number of transportation options to return in the response matching the given query. | [optional] [default to 10]
 **pagination_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. | [optional]
 **placement_option_id** | **string**| The placement option to get transportation options for. Either &#x60;placementOptionId&#x60; or &#x60;shipmentId&#x60; must be specified. | [optional]
 **shipment_id** | **string**| The shipment to get transportation options for. Either &#x60;placementOptionId&#x60; or &#x60;shipmentId&#x60; must be specified. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ListTransportationOptionsResponse**](../Model/FfI20240320ListTransportationOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleSelfShipAppointment()`

```php
scheduleSelfShipAppointment($inbound_plan_id, $shipment_id, $slot_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ScheduleSelfShipAppointmentResponse
```



Confirms or reschedules a self-ship appointment slot against a shipment. Only available in the following [marketplaces](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids): MX, BR, EG, SA, AE, IN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$slot_id = 'slot_id_example'; // string | An identifier to a self-ship appointment slot.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ScheduleSelfShipAppointmentRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ScheduleSelfShipAppointmentRequest | The body of the request to `scheduleSelfShipAppointment`.

try {
    $result = $apiInstance->scheduleSelfShipAppointment($inbound_plan_id, $shipment_id, $slot_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->scheduleSelfShipAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **slot_id** | **string**| An identifier to a self-ship appointment slot. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ScheduleSelfShipAppointmentRequest**](../Model/FfI20240320ScheduleSelfShipAppointmentRequest.md)| The body of the request to &#x60;scheduleSelfShipAppointment&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320ScheduleSelfShipAppointmentResponse**](../Model/FfI20240320ScheduleSelfShipAppointmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPackingInformation()`

```php
setPackingInformation($inbound_plan_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPackingInformationResponse
```



Sets packing information for an inbound plan. This should be called after an inbound plan is created to populate the box level information required for planning and transportation estimates.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPackingInformationRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPackingInformationRequest | The body of the request to `setPackingInformation`.

try {
    $result = $apiInstance->setPackingInformation($inbound_plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->setPackingInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPackingInformationRequest**](../Model/FfI20240320SetPackingInformationRequest.md)| The body of the request to &#x60;setPackingInformation&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPackingInformationResponse**](../Model/FfI20240320SetPackingInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPrepDetails()`

```php
setPrepDetails($body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPrepDetailsResponse
```



Set the preparation details for a list of MSKUs in a specified marketplace.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPrepDetailsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPrepDetailsRequest | The body of the request to `setPrepDetails`.

try {
    $result = $apiInstance->setPrepDetails($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->setPrepDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPrepDetailsRequest**](../Model/FfI20240320SetPrepDetailsRequest.md)| The body of the request to &#x60;setPrepDetails&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320SetPrepDetailsResponse**](../Model/FfI20240320SetPrepDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInboundPlanName()`

```php
updateInboundPlanName($inbound_plan_id, $body)
```



Updates the name of an existing inbound plan.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateInboundPlanNameRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateInboundPlanNameRequest | The body of the request to `updateInboundPlanName`.

try {
    $apiInstance->updateInboundPlanName($inbound_plan_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->updateInboundPlanName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateInboundPlanNameRequest**](../Model/FfI20240320UpdateInboundPlanNameRequest.md)| The body of the request to &#x60;updateInboundPlanName&#x60;. |

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

## `updateItemComplianceDetails()`

```php
updateItemComplianceDetails($marketplace_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateItemComplianceDetailsResponse
```



Update compliance details for a list of MSKUs. The details provided here are only used for the India (IN - A21TJRUUN4KGV) marketplace compliance validation.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 6 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | The Marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateItemComplianceDetailsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateItemComplianceDetailsRequest | The body of the request to `updateItemComplianceDetails`.

try {
    $result = $apiInstance->updateItemComplianceDetails($marketplace_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->updateItemComplianceDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The Marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids). |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateItemComplianceDetailsRequest**](../Model/FfI20240320UpdateItemComplianceDetailsRequest.md)| The body of the request to &#x60;updateItemComplianceDetails&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateItemComplianceDetailsResponse**](../Model/FfI20240320UpdateItemComplianceDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShipmentName()`

```php
updateShipmentName($inbound_plan_id, $shipment_id, $body)
```



Updates the name of an existing shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentNameRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentNameRequest | The body of the request to `updateShipmentName`.

try {
    $apiInstance->updateShipmentName($inbound_plan_id, $shipment_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->updateShipmentName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentNameRequest**](../Model/FfI20240320UpdateShipmentNameRequest.md)| The body of the request to &#x60;updateShipmentName&#x60;. |

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

## `updateShipmentSourceAddress()`

```php
updateShipmentSourceAddress($inbound_plan_id, $shipment_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentSourceAddressResponse
```



Updates the source address of an existing shipment. The shipment source address can only be updated prior to the confirmation of the shipment carriers. As a result of the updated source address, existing transportation options will be invalidated and will need to be regenerated to capture the potential difference in transportation options and quotes due to the new source address.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentSourceAddressRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentSourceAddressRequest | The body of the request to `updateShipmentSourceAddress`.

try {
    $result = $apiInstance->updateShipmentSourceAddress($inbound_plan_id, $shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->updateShipmentSourceAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentSourceAddressRequest**](../Model/FfI20240320UpdateShipmentSourceAddressRequest.md)| The body of the request to &#x60;updateShipmentSourceAddress&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentSourceAddressResponse**](../Model/FfI20240320UpdateShipmentSourceAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShipmentTrackingDetails()`

```php
updateShipmentTrackingDetails($inbound_plan_id, $shipment_id, $body): \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentTrackingDetailsResponse
```



Updates a shipment's tracking details.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 2 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\FfI20240320FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_plan_id = 'inbound_plan_id_example'; // string | Identifier of an inbound plan.
$shipment_id = 'shipment_id_example'; // string | Identifier of a shipment. A shipment contains the boxes and units being inbounded.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentTrackingDetailsRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentTrackingDetailsRequest | The body of the request to `updateShipmentTrackingDetails`.

try {
    $result = $apiInstance->updateShipmentTrackingDetails($inbound_plan_id, $shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FfI20240320FbaInboundApi->updateShipmentTrackingDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_plan_id** | **string**| Identifier of an inbound plan. |
 **shipment_id** | **string**| Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentTrackingDetailsRequest**](../Model/FfI20240320UpdateShipmentTrackingDetailsRequest.md)| The body of the request to &#x60;updateShipmentTrackingDetails&#x60;. |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UpdateShipmentTrackingDetailsResponse**](../Model/FfI20240320UpdateShipmentTrackingDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
