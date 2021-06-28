# # SrvServiceJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create_time** | [**\DateTime**](\DateTime.md) | The date and time of the creation of the job, in ISO 8601 format. | [optional]
**service_job_id** | **string** | Amazon identifier for the service job. | [optional]
**service_job_status** | **string** | The status of the service job. | [optional]
**scope_of_work** | [**\MPSolutions\AmznSellingPartnerApi\Models\Services\SrvScopeOfWork**](SrvScopeOfWork.md) |  | [optional]
**seller** | [**\MPSolutions\AmznSellingPartnerApi\Models\Services\SrvSeller**](SrvSeller.md) |  | [optional]
**service_job_provider** | [**\MPSolutions\AmznSellingPartnerApi\Models\Services\SrvServiceJobProvider**](SrvServiceJobProvider.md) |  | [optional]
**preferred_appointment_times** | [**\MPSolutions\AmznSellingPartnerApi\Models\Services\SrvAppointmentTime[]**](SrvAppointmentTime.md) | A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order. | [optional]
**appointments** | [**\MPSolutions\AmznSellingPartnerApi\Models\Services\SrvAppointment[]**](SrvAppointment.md) | A list of appointments. | [optional]
**service_order_id** | **string** | The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format. | [optional]
**marketplace_id** | **string** | The marketplace identifier. | [optional]
**buyer** | [**\MPSolutions\AmznSellingPartnerApi\Models\Services\SrvBuyer**](SrvBuyer.md) |  | [optional]
**associated_items** | [**\MPSolutions\AmznSellingPartnerApi\Models\Services\SrvAssociatedItem[]**](SrvAssociatedItem.md) | A list of items associated with the service job. | [optional]
**service_location** | [**\MPSolutions\AmznSellingPartnerApi\Models\Services\SrvServiceLocation**](SrvServiceLocation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
