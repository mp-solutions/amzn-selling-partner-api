# # OrderAcknowledgement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The purchase order number. Formatting Notes: 8-character alpha-numeric code. |
**selling_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorOrders\PartyIdentification**](PartyIdentification.md) |  |
**acknowledgement_date** | [**\DateTime**](\DateTime.md) | The date and time when the purchase order is acknowledged, in ISO-8601 date/time format. |
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorOrders\OrderAcknowledgementItem[]**](OrderAcknowledgementItem.md) | A list of the items being acknowledged with associated details. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
