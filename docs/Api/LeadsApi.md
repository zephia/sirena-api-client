# Swagger\Client\LeadsApi

All URIs are relative to *http://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategories**](LeadsApi.md#getCategories) | **GET** /leads/categories | 
[**getDefaults**](LeadsApi.md#getDefaults) | **GET** /leads/defaults | 
[**newInsuranceLead**](LeadsApi.md#newInsuranceLead) | **POST** /lead/insurance | 
[**newRetailLead**](LeadsApi.md#newRetailLead) | **POST** /lead/retail | 
[**newSavingPlanLead**](LeadsApi.md#newSavingPlanLead) | **POST** /lead/saving-plan | 
[**newVehicleLead**](LeadsApi.md#newVehicleLead) | **POST** /lead/vehicle | 


# **getCategories**
> \Swagger\Client\Model\CategoriesByIndustry getCategories()



Returns information about the lead categories available for lead creation in each industry. The response includes the name and other details about each category. The default category is returned first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure OAuth2 access token for authorization: OAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadsApi();

try {
    $result = $api_instance->getCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CategoriesByIndustry**](../Model/CategoriesByIndustry.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDefaults**
> \Swagger\Client\Model\Defaults getDefaults()



Returns information about the applicable defaults for lead creation. These defaults are only used if no value is specified when creating a lead. The response includes the default currency and category (by industry). Note that the default category can also be found using the Categories endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure OAuth2 access token for authorization: OAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadsApi();

try {
    $result = $api_instance->getDefaults();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Defaults**](../Model/Defaults.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newInsuranceLead**
> \Swagger\Client\Model\Prospect newInsuranceLead($lead, $format)



Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure OAuth2 access token for authorization: OAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->newInsuranceLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newInsuranceLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\Product**](../Model/Product.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newRetailLead**
> \Swagger\Client\Model\Prospect newRetailLead($lead, $format)



Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure OAuth2 access token for authorization: OAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead = new \Swagger\Client\Model\Lead(); // \Swagger\Client\Model\Lead | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->newRetailLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newRetailLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\Lead**](../Model/Lead.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newSavingPlanLead**
> \Swagger\Client\Model\Prospect newSavingPlanLead($lead, $format)



Saving plan industry only. Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure OAuth2 access token for authorization: OAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead = new \Swagger\Client\Model\SavingPlanLead(); // \Swagger\Client\Model\SavingPlanLead | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->newSavingPlanLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newSavingPlanLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\SavingPlanLead**](../Model/SavingPlanLead.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newVehicleLead**
> \Swagger\Client\Model\Prospect newVehicleLead($lead, $format)



Vehicle industry only. Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure OAuth2 access token for authorization: OAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead = new \Swagger\Client\Model\VehicleLead(); // \Swagger\Client\Model\VehicleLead | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->newVehicleLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newVehicleLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\VehicleLead**](../Model/VehicleLead.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

