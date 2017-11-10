# Prospect

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\Swagger\Client\Model\ObjectId**](ObjectId.md) |  | 
**created** | [**\DateTime**](\DateTime.md) |  | 
**group** | **string** |  | 
**first_name** | **string** |  | 
**last_name** | **string** |  | [optional] 
**category** | **string** | The unique name identifier of the prospect category | [optional] 
**status** | **string** | The prospect status | 
**phones** | **string[]** |  | [optional] 
**emails** | **string[]** |  | [optional] 
**additional_data** | **object** | Additional and private data of the prospect. Only returned when the scope prospects:readAdditionalData is authorized | [optional] 
**leads** | [**\Swagger\Client\Model\LeadData[]**](LeadData.md) |  | 
**agent** | [**\Swagger\Client\Model\Agent**](Agent.md) |  | [optional] 
**assigned** | [**\DateTime**](\DateTime.md) |  | [optional] 
**next_reminder** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


