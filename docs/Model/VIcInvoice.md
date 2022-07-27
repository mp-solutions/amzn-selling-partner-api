# # VIcInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_type** | **string** | Identifies the type of invoice. |
**id** | **string** | Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection. |
**reference_number** | **string** | An additional unique reference number used for regulatory or other purposes. | [optional]
**date** | **\DateTime** | Defines a date and time according to ISO8601. |
**remit_to_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcPartyIdentification**](VIcPartyIdentification.md) |  |
**ship_to_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcPartyIdentification**](VIcPartyIdentification.md) |  | [optional]
**ship_from_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcPartyIdentification**](VIcPartyIdentification.md) |  | [optional]
**bill_to_party** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcPartyIdentification**](VIcPartyIdentification.md) |  | [optional]
**payment_terms** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcPaymentTerms**](VIcPaymentTerms.md) |  | [optional]
**invoice_total** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcMoney**](VIcMoney.md) |  |
**tax_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcTaxDetails[]**](VIcTaxDetails.md) | Total tax amount details for all line items. | [optional]
**additional_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcAdditionalDetails[]**](VIcAdditionalDetails.md) | Additional details provided by the selling party, for tax related or other purposes. | [optional]
**charge_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcChargeDetails[]**](VIcChargeDetails.md) | Total charge amount details for all line items. | [optional]
**allowance_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcAllowanceDetails[]**](VIcAllowanceDetails.md) | Total allowance amount details for all line items. | [optional]
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\VendorInvoices\VIcInvoiceItem[]**](VIcInvoiceItem.md) | The list of invoice items. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
