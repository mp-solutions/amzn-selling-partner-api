# # FfI20240320TransportationOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320Carrier**](FfI20240320Carrier.md) |  |
**carrier_appointment** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320CarrierAppointment**](FfI20240320CarrierAppointment.md) |  | [optional]
**preconditions** | **string[]** | Identifies a list of preconditions for confirming the transportation option. |
**quote** | [**\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320Quote**](FfI20240320Quote.md) |  | [optional]
**shipment_id** | **string** | Identifier of a shipment. A shipment contains the boxes and units being inbounded. |
**shipping_mode** | **string** | Mode of shipment transportation that this option will provide.  Possible values: &#x60;GROUND_SMALL_PARCEL&#x60;, &#x60;FREIGHT_LTL&#x60;, &#x60;FREIGHT_FTL_PALLET&#x60;, &#x60;FREIGHT_FTL_NONPALLET&#x60;, &#x60;OCEAN_LCL&#x60;, &#x60;OCEAN_FCL&#x60;, &#x60;AIR_SMALL_PARCEL&#x60;, &#x60;AIR_SMALL_PARCEL_EXPRESS&#x60;. |
**shipping_solution** | **string** | Shipping program for the option. Possible values: &#x60;AMAZON_PARTNERED_CARRIER&#x60;, &#x60;USE_YOUR_OWN_CARRIER&#x60;. |
**transportation_option_id** | **string** | Identifier of a transportation option. A transportation option represent one option for how to send a shipment. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
