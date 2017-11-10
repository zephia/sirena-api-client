# Lead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | **string** | The source of the lead. It may be the name of the place where the lead was generated, or the name of the provider. | 
**campaign** | **string** | The campaign of the lead. | [optional] 
**medium** | **string** | The contact medium where the lead came from | [optional] 
**provider** | **string** | The name/key to identify the provider of the lead | [optional] 
**lead_id** | **string** | The ID of the lead in the provider *(deprecated, use providerLrseadId)* | [optional] 
**provider_lead_id** | **string** | The ID of the lead in the provider | [optional] 
**first_name** | **string** |  | 
**last_name** | **string** |  | [optional] 
**phones** | **string[]** |  | [optional] 
**emails** | **string[]** |  | [optional] 
**category** | **string** | The category of the lead. Use the Categories endpoint to see the available categories. If skipped, the default category is used. | [optional] 
**address** | **string** | Full street address | [optional] 
**sub_locality** | **string** | County / other sub-division of a locality, such as communes departments, etc | [optional] 
**locality** | **string** | City / Municipality | [optional] 
**region** | **string** | State / Province | [optional] 
**country** | **string** |  | [optional] 
**zip_code** | **string** | Zip Code / Postal Code | [optional] 
**listing_url** | **string** | The URL of the listing page | [optional] 
**comments** | **string** | Any comments worth making to the agent, from the lead or from the acquisition channel. | [optional] 
**store** | **string** | If the lead has an assigned store, indicate it&#39;s name or code | [optional] 
**agent** | **string** | If the lead has an assigned agent, indicate it&#39;s name or code | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


