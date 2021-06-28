# # FnnShipmentItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. The seller SKU is qualified by the seller&#39;s seller ID, which is included with every call to the Selling Partner API. | [optional]
**order_item_id** | **string** | An Amazon-defined order item identifier. | [optional]
**order_adjustment_item_id** | **string** | An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events. | [optional]
**quantity_shipped** | **int** | The number of items shipped. | [optional]
**item_charge_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnChargeComponent[]**](FnnChargeComponent.md) | A list of charge information on the seller&#39;s account. | [optional]
**item_charge_adjustment_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnChargeComponent[]**](FnnChargeComponent.md) | A list of charge information on the seller&#39;s account. | [optional]
**item_fee_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnFeeComponent[]**](FnnFeeComponent.md) | A list of fee component information. | [optional]
**item_fee_adjustment_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnFeeComponent[]**](FnnFeeComponent.md) | A list of fee component information. | [optional]
**item_tax_withheld_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnTaxWithheldComponent[]**](FnnTaxWithheldComponent.md) | A list of information about taxes withheld. | [optional]
**promotion_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnPromotion[]**](FnnPromotion.md) | A list of promotions. | [optional]
**promotion_adjustment_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnPromotion[]**](FnnPromotion.md) | A list of promotions. | [optional]
**cost_of_points_granted** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]
**cost_of_points_returned** | [**\MPSolutions\AmznSellingPartnerApi\Models\Finances\FnnCurrency**](FnnCurrency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
