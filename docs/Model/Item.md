# # Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | Amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog. |
**attributes** | **object** | A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes are available only to brand owners and conform to the related product type definitions available in the Selling Partner API for Product Type Definitions. | [optional]
**identifiers** | [**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems\ItemIdentifiersByMarketplace[]**](ItemIdentifiersByMarketplace.md) | Identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers. | [optional]
**images** | [**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems\ItemImagesByMarketplace[]**](ItemImagesByMarketplace.md) | Images for an item in the Amazon catalog. All image variants are provided to brand owners. Otherwise, a thumbnail of the \&quot;MAIN\&quot; image variant is provided. | [optional]
**product_types** | [**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems\ItemProductTypeByMarketplace[]**](ItemProductTypeByMarketplace.md) | Product types associated with the Amazon catalog item. | [optional]
**sales_ranks** | [**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems\ItemSalesRanksByMarketplace[]**](ItemSalesRanksByMarketplace.md) | Sales ranks of an Amazon catalog item. | [optional]
**summaries** | [**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems\ItemSummaryByMarketplace[]**](ItemSummaryByMarketplace.md) | Summary details of an Amazon catalog item. | [optional]
**variations** | [**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems\ItemVariationsByMarketplace[]**](ItemVariationsByMarketplace.md) | Variation details by marketplace for an Amazon catalog item (variation relationships). | [optional]
**vendor_details** | [**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems\ItemVendorDetailsByMarketplace[]**](ItemVendorDetailsByMarketplace.md) | Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
