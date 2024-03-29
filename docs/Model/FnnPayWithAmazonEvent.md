# # FnnPayWithAmazonEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_order_id** | **string** | An order identifier that is specified by the seller. | [optional]
**transaction_posted_date** | **\DateTime** |  | [optional]
**business_object_type** | **string** | The type of business object. | [optional]
**sales_channel** | **string** | The sales channel for the transaction. | [optional]
**charge** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnChargeComponent**](FnnChargeComponent.md) |  | [optional]
**fee_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnFeeComponent[]**](FnnFeeComponent.md) | A list of fee component information. | [optional]
**payment_amount_type** | **string** | The type of payment.  Possible values:  * Sales | [optional]
**amount_description** | **string** | A short description of this payment event. | [optional]
**fulfillment_channel** | **string** | The fulfillment channel.  Possible values:  * AFN - Amazon Fulfillment Network (Fulfillment by Amazon)  * MFN - Merchant Fulfillment Network (self-fulfilled) | [optional]
**store_name** | **string** | The store name where the event occurred. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
