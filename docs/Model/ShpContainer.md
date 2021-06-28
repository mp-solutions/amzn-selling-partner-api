# # ShpContainer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_type** | **string** | The type of physical container being used. (always &#39;PACKAGE&#39;) | [optional]
**container_reference_id** | **string** | An identifier for the container. This must be unique within all the containers in the same shipment. |
**value** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ShpCurrency**](ShpCurrency.md) |  |
**dimensions** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ShpDimensions**](ShpDimensions.md) |  |
**items** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ShpContainerItem[]**](ShpContainerItem.md) | A list of the items in the container. |
**weight** | [**\MPSolutions\AmznSellingPartnerApi\Models\Shipping\ShpWeight**](ShpWeight.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
