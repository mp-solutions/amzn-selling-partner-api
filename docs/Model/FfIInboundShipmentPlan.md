# # FfIInboundShipmentPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. |
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. |
**ship_to_address** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIAddress**](FfIAddress.md) |  |
**label_prep_type** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfILabelPrepType**](FfILabelPrepType.md) |  |
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIInboundShipmentPlanItem[]**](FfIInboundShipmentPlanItem.md) | A list of inbound shipment plan item information. |
**estimated_box_contents_fee** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\FfIBoxContentsFeeDetails**](FfIBoxContentsFeeDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
