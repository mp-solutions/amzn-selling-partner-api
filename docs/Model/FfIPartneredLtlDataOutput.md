# # FfIPartneredLtlDataOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIContact**](FfIContact.md) |  |
**box_count** | **int** |  |
**seller_freight_class** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfISellerFreightClass**](FfISellerFreightClass.md) |  | [optional]
**freight_ready_date** | [**\DateTime**](\DateTime.md) |  |
**pallet_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIPallet[]**](FfIPallet.md) | A list of pallet information. |
**total_weight** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIWeight**](FfIWeight.md) |  |
**seller_declared_value** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIAmount**](FfIAmount.md) |  | [optional]
**amazon_calculated_value** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIAmount**](FfIAmount.md) |  | [optional]
**preview_pickup_date** | [**\DateTime**](\DateTime.md) |  |
**preview_delivery_date** | [**\DateTime**](\DateTime.md) |  |
**preview_freight_class** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfISellerFreightClass**](FfISellerFreightClass.md) |  |
**amazon_reference_id** | **string** | A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment. |
**is_bill_of_lading_available** | **bool** | Indicates whether the bill of lading for the shipment is available. |
**partnered_estimate** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIPartneredEstimate**](FfIPartneredEstimate.md) |  | [optional]
**carrier_name** | **string** | The carrier for the inbound shipment. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
