# # FfI20240320SpdTrackingItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**box_id** | **string** | The ID provided by Amazon that identifies a given box. This ID is comprised of the external shipment ID (which is generated after transportation has been confirmed) and the index of the box. | [optional]
**tracking_id** | **string** | The tracking ID associated with each box in a non-Amazon partnered Small Parcel Delivery (SPD) shipment. | [optional]
**tracking_number_validation_status** | **string** | Whether or not Amazon has validated the tracking number. If more than 24 hours have passed and the status is not yet &#39;VALIDATED&#39;, please verify the number and update if necessary. Possible values: &#x60;VALIDATED&#x60;, &#x60;NOT_VALIDATED&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
