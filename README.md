# OpenAPIClient-php

The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.

For more information, please visit [https://sellercentral.amazon.com/gp/mws/contactus.html](https://sellercentral.amazon.com/gp/mws/contactus.html).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchase_order_number = 'purchase_order_number_example'; // string | Purchase order number of the shipment for which to return the invoice.

try {
    $result = $apiInstance->getCustomerInvoice($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->getCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomerInvoicesApi* | [**getCustomerInvoice**](docs/Api/CustomerInvoicesApi.md#getcustomerinvoice) | **GET** /vendor/directFulfillment/shipping/v1/customerInvoices/{purchaseOrderNumber} | 
*CustomerInvoicesApi* | [**getCustomerInvoices**](docs/Api/CustomerInvoicesApi.md#getcustomerinvoices) | **GET** /vendor/directFulfillment/shipping/v1/customerInvoices | 
*VendorShippingApi* | [**getPackingSlip**](docs/Api/VendorShippingApi.md#getpackingslip) | **GET** /vendor/directFulfillment/shipping/v1/packingSlips/{purchaseOrderNumber} | 
*VendorShippingApi* | [**getPackingSlips**](docs/Api/VendorShippingApi.md#getpackingslips) | **GET** /vendor/directFulfillment/shipping/v1/packingSlips | 
*VendorShippingApi* | [**submitShipmentConfirmations**](docs/Api/VendorShippingApi.md#submitshipmentconfirmations) | **POST** /vendor/directFulfillment/shipping/v1/shipmentConfirmations | 
*VendorShippingApi* | [**submitShipmentStatusUpdates**](docs/Api/VendorShippingApi.md#submitshipmentstatusupdates) | **POST** /vendor/directFulfillment/shipping/v1/shipmentStatusUpdates | 
*VendorShippingLabelsApi* | [**getShippingLabel**](docs/Api/VendorShippingLabelsApi.md#getshippinglabel) | **GET** /vendor/directFulfillment/shipping/v1/shippingLabels/{purchaseOrderNumber} | 
*VendorShippingLabelsApi* | [**getShippingLabels**](docs/Api/VendorShippingLabelsApi.md#getshippinglabels) | **GET** /vendor/directFulfillment/shipping/v1/shippingLabels | 
*VendorShippingLabelsApi* | [**submitShippingLabelRequest**](docs/Api/VendorShippingLabelsApi.md#submitshippinglabelrequest) | **POST** /vendor/directFulfillment/shipping/v1/shippingLabels | 

## Models

- [Address](docs/Model/Address.md)
- [Container](docs/Model/Container.md)
- [CustomerInvoice](docs/Model/CustomerInvoice.md)
- [CustomerInvoiceList](docs/Model/CustomerInvoiceList.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Error](docs/Model/Error.md)
- [GetCustomerInvoiceResponse](docs/Model/GetCustomerInvoiceResponse.md)
- [GetCustomerInvoicesResponse](docs/Model/GetCustomerInvoicesResponse.md)
- [GetPackingSlipListResponse](docs/Model/GetPackingSlipListResponse.md)
- [GetPackingSlipResponse](docs/Model/GetPackingSlipResponse.md)
- [GetShippingLabelListResponse](docs/Model/GetShippingLabelListResponse.md)
- [GetShippingLabelResponse](docs/Model/GetShippingLabelResponse.md)
- [Item](docs/Model/Item.md)
- [ItemQuantity](docs/Model/ItemQuantity.md)
- [LabelData](docs/Model/LabelData.md)
- [Package](docs/Model/Package.md)
- [PackedItem](docs/Model/PackedItem.md)
- [PackingSlip](docs/Model/PackingSlip.md)
- [PackingSlipList](docs/Model/PackingSlipList.md)
- [Pagination](docs/Model/Pagination.md)
- [PartyIdentification](docs/Model/PartyIdentification.md)
- [ShipmentConfirmation](docs/Model/ShipmentConfirmation.md)
- [ShipmentDetails](docs/Model/ShipmentDetails.md)
- [ShipmentStatusUpdate](docs/Model/ShipmentStatusUpdate.md)
- [ShippingLabel](docs/Model/ShippingLabel.md)
- [ShippingLabelList](docs/Model/ShippingLabelList.md)
- [ShippingLabelRequest](docs/Model/ShippingLabelRequest.md)
- [StatusUpdateDetails](docs/Model/StatusUpdateDetails.md)
- [StatusUpdateDetailsShipmentSchedule](docs/Model/StatusUpdateDetailsShipmentSchedule.md)
- [SubmitShipmentConfirmationsRequest](docs/Model/SubmitShipmentConfirmationsRequest.md)
- [SubmitShipmentConfirmationsResponse](docs/Model/SubmitShipmentConfirmationsResponse.md)
- [SubmitShipmentStatusUpdatesRequest](docs/Model/SubmitShipmentStatusUpdatesRequest.md)
- [SubmitShipmentStatusUpdatesResponse](docs/Model/SubmitShipmentStatusUpdatesResponse.md)
- [SubmitShippingLabelsRequest](docs/Model/SubmitShippingLabelsRequest.md)
- [SubmitShippingLabelsResponse](docs/Model/SubmitShippingLabelsResponse.md)
- [TaxRegistrationDetails](docs/Model/TaxRegistrationDetails.md)
- [TransactionReference](docs/Model/TransactionReference.md)
- [Weight](docs/Model/Weight.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
