# # SKUPrepInstructions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. | [optional]
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | [optional]
**barcode_instruction** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\BarcodeInstruction**](BarcodeInstruction.md) |  | [optional]
**prep_guidance** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\PrepGuidance**](PrepGuidance.md) |  | [optional]
**prep_instruction_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\PrepInstruction[]**](PrepInstruction.md) | A list of preparation instructions to help with item sourcing decisions. | [optional]
**amazon_prep_fees_details_list** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound\AmazonPrepFeesDetails[]**](AmazonPrepFeesDetails.md) | A list of preparation instructions and fees for Amazon to prep goods for shipment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
