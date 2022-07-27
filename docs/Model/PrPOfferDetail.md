# # PrPOfferDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**my_offer** | **bool** | When true, this is the seller&#39;s offer. | [optional]
**offer_type** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPOfferCustomerType**](PrPOfferCustomerType.md) |  | [optional]
**sub_condition** | **string** | The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other. |
**seller_id** | **string** | The seller identifier for the offer. | [optional]
**condition_notes** | **string** | Information about the condition of the item. | [optional]
**seller_feedback_rating** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPSellerFeedbackType**](PrPSellerFeedbackType.md) |  | [optional]
**shipping_time** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPDetailedShippingTimeType**](PrPDetailedShippingTimeType.md) |  |
**listing_price** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPMoneyType**](PrPMoneyType.md) |  |
**quantity_discount_prices** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPQuantityDiscountPriceType[]**](PrPQuantityDiscountPriceType.md) |  | [optional]
**points** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPPoints**](PrPPoints.md) |  | [optional]
**shipping** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPMoneyType**](PrPMoneyType.md) |  |
**ships_from** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPShipsFromType**](PrPShipsFromType.md) |  | [optional]
**is_fulfilled_by_amazon** | **bool** | When true, the offer is fulfilled by Amazon. |
**prime_information** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPPrimeInformationType**](PrPPrimeInformationType.md) |  | [optional]
**is_buy_box_winner** | **bool** | When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN, one that is eligible for Prime and one that is not eligible for Prime. | [optional]
**is_featured_merchant** | **bool** | When true, the seller of the item is eligible to win the Buy Box. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
