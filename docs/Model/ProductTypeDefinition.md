# # ProductTypeDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta_schema** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductTypeDefinitions\SchemaLink**](SchemaLink.md) |  | [optional]
**schema** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductTypeDefinitions\SchemaLink**](SchemaLink.md) |  |
**requirements** | **string** | Name of the requirements set represented in this product type definition. |
**requirements_enforced** | **string** | Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all of the required attributes being present (such as for partial updates). |
**property_groups** | [**array<string,\MPSolutions\AmznSellingPartnerApi\Models\ProductTypeDefinitions\PropertyGroup>**](PropertyGroup.md) | Mapping of property group names to property groups. Property groups represent logical groupings of schema properties that can be used for display or informational purposes. |
**locale** | **string** | Locale of the display elements contained in the product type definition. |
**marketplace_ids** | **string[]** | Amazon marketplace identifiers for which the product type definition is applicable. |
**product_type** | **string** | The name of the Amazon product type that this product type definition applies to. |
**product_type_version** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductTypeDefinitions\ProductTypeVersion**](ProductTypeVersion.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
