# # OrdOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item. |
**seller_sku** | **string** | The seller stock keeping unit (SKU) of the item. | [optional]
**order_item_id** | **string** | An Amazon-defined order item identifier. |
**title** | **string** | The name of the item. | [optional]
**quantity_ordered** | **int** | The number of items in the order. |
**quantity_shipped** | **int** | The number of items shipped. | [optional]
**product_info** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdProductInfoDetail**](OrdProductInfoDetail.md) |  | [optional]
**points_granted** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdPointsGrantedDetail**](OrdPointsGrantedDetail.md) |  | [optional]
**item_price** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**shipping_price** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**item_tax** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**shipping_tax** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**shipping_discount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**shipping_discount_tax** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**promotion_discount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**promotion_discount_tax** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**promotion_ids** | **string[]** | A list of promotion identifiers provided by the seller when the promotions were created. | [optional]
**cod_fee** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**cod_fee_discount** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdMoney**](OrdMoney.md) |  | [optional]
**is_gift** | **bool** | When true, the item is a gift. | [optional]
**condition_note** | **string** | The condition of the item as described by the seller. | [optional]
**condition_id** | **string** | The condition of the item.  Possible values: New, Used, Collectible, Refurbished, Preorder, Club. | [optional]
**condition_subtype_id** | **string** | The subcondition of the item.  Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, Any, Other. | [optional]
**scheduled_delivery_start_date** | **string** | The start date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format. | [optional]
**scheduled_delivery_end_date** | **string** | The end date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format. | [optional]
**price_designation** | **string** | Indicates that the selling price is a special price that is available only for Amazon Business orders. For more information about the Amazon Business Seller Program, see the [Amazon Business website](https://www.amazon.com/b2b/info/amazon-business).   Possible values: BusinessPrice - A special price that is available only for Amazon Business orders. | [optional]
**tax_collection** | [**\MPSolutions\AmznSellingPartnerApi\Models\Orders\OrdTaxCollection**](OrdTaxCollection.md) |  | [optional]
**serial_number_required** | **bool** | When true, the product type for this item has a serial number.  Returned only for Amazon Easy Ship orders. | [optional]
**is_transparency** | **bool** | When true, transparency codes are required. | [optional]
**ioss_number** | **string** | The IOSS number of the seller. Sellers selling in the EU will be assigned a unique IOSS number that must be listed on all packages sent to the EU. | [optional]
**store_chain_store_id** | **string** | The store chain store identifier. Linked to a specific store in a store chain. | [optional]
**deemed_reseller_category** | **string** | The category of deemed reseller. This applies to selling partners that are not based in the EU and is used to help them meet the VAT Deemed Reseller tax laws in the EU and UK. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
