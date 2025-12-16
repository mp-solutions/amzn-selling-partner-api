# # Finances20240619Context

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context_type** | **string** |  |
**store_name** | **string** | The store name associated with the transaction. | [optional]
**order_type** | **string** | The transaction&#39;s order type. | [optional]
**channel** | **string** | Channel details of related transaction. | [optional]
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | [optional]
**sku** | **string** | The Stock Keeping Unit (SKU) of the item. | [optional]
**quantity_shipped** | **int** | The quantity of the item shipped. | [optional]
**fulfillment_network** | **string** | The fulfillment network of the item. | [optional]
**payment_type** | **string** | The type of payment. | [optional]
**payment_method** | **string** | The method of payment. | [optional]
**payment_reference** | **string** | The reference number of the payment. | [optional]
**payment_date** | **\DateTime** | A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]
**deferral_reason** | **string** | The deferral policy applied to the transaction.  **Examples:** &#x60;B2B&#x60; (invoiced orders), &#x60;DD7&#x60; (delivery date policy) | [optional]
**maturity_date** | **\DateTime** | A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]
**start_time** | **\DateTime** | A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]
**end_time** | **\DateTime** | A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
