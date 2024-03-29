# # FfIInboundShipmentInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The shipment identifier submitted in the request. | [optional]
**shipment_name** | **string** | The name for the inbound shipment. | [optional]
**ship_from_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIAddress**](FfIAddress.md) |  |
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. | [optional]
**shipment_status** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIShipmentStatus**](FfIShipmentStatus.md) |  | [optional]
**label_prep_type** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfILabelPrepType**](FfILabelPrepType.md) |  | [optional]
**are_cases_required** | **bool** | Indicates whether or not an inbound shipment contains case-packed boxes. When AreCasesRequired &#x3D; true for an inbound shipment, all items in the inbound shipment must be case packed. |
**confirmed_need_by_date** | **\DateTime** |  | [optional]
**box_contents_source** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIBoxContentsSource**](FfIBoxContentsSource.md) |  | [optional]
**estimated_box_contents_fee** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIBoxContentsFeeDetails**](FfIBoxContentsFeeDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
