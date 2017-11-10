# Swagger\Client\InteractionsApi

All URIs are relative to *http://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInteractions**](InteractionsApi.md#getInteractions) | **GET** /prospects/interactions | 


# **getInteractions**
> \Swagger\Client\Model\Interactions getInteractions($format, $agent, $status, $created_after, $start, $created_before, $end)



Returns a filterable list of interactions

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

$api_instance = new Swagger\Client\Api\InteractionsApi();
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$agent = "agent_example"; // string | The id of the agent to filter
$status = "status_example"; // string | The status to filter
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter interactions by their creation date
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter)
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter interactions by their creation date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdBefore The end date to filter interactions by their creation date (alias of createdBefore)

try {
    $result = $api_instance->getInteractions($format, $agent, $status, $created_after, $start, $created_before, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->getInteractions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]
 **agent** | **string**| The id of the agent to filter | [optional]
 **status** | **string**| The status to filter | [optional]
 **created_after** | **\DateTime**| The start date to filter interactions by their creation date | [optional]
 **start** | **\DateTime**| @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter) | [optional]
 **created_before** | **\DateTime**| The end date to filter interactions by their creation date | [optional]
 **end** | **\DateTime**| @deprecated - use createdBefore The end date to filter interactions by their creation date (alias of createdBefore) | [optional]

### Return type

[**\Swagger\Client\Model\Interactions**](../Model/Interactions.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

