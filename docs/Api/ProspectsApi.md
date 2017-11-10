# Swagger\Client\ProspectsApi

All URIs are relative to *http://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProspect**](ProspectsApi.md#deleteProspect) | **DELETE** /prospect/{prospectId} | 
[**getInteractionById**](ProspectsApi.md#getInteractionById) | **GET** /prospect/{prospectId}/interaction/{interactionId} | 
[**getInteractions**](ProspectsApi.md#getInteractions) | **GET** /prospects/interactions | 
[**getProspectById**](ProspectsApi.md#getProspectById) | **GET** /prospect/{prospectId} | 
[**getProspectInteractions**](ProspectsApi.md#getProspectInteractions) | **GET** /prospect/{prospectId}/interactions | 
[**getProspectQuotes**](ProspectsApi.md#getProspectQuotes) | **GET** /prospect/{prospectId}/quotes | 
[**getProspects**](ProspectsApi.md#getProspects) | **GET** /prospects | 
[**getQuoteById**](ProspectsApi.md#getQuoteById) | **GET** /prospect/{prospectId}/quote/{quoteId} | 
[**getQuotes**](ProspectsApi.md#getQuotes) | **GET** /prospects/quotes | 
[**newProspectQuote**](ProspectsApi.md#newProspectQuote) | **POST** /prospect/{prospectId}/quotes | 
[**updateProspectQuote**](ProspectsApi.md#updateProspectQuote) | **PUT** /prospect/{prospectId}/quote/{quoteId} | 


# **deleteProspect**
> \Swagger\Client\Model\Prospect deleteProspect($prospect_id, $format)



Delete a prospect

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->deleteProspect($prospect_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->deleteProspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInteractionById**
> \Swagger\Client\Model\Interaction getInteractionById($prospect_id, $interaction_id, $format)



Returns an interaction by its prospect and interaction IDs

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$interaction_id = "interaction_id_example"; // string | The id of the interaction
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->getInteractionById($prospect_id, $interaction_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getInteractionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect |
 **interaction_id** | **string**| The id of the interaction |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Interaction**](../Model/Interaction.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
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
    echo 'Exception when calling ProspectsApi->getInteractions: ', $e->getMessage(), PHP_EOL;
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

# **getProspectById**
> \Swagger\Client\Model\Prospect getProspectById($prospect_id, $format)



Returns an specific prospect by its ID

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->getProspectById($prospect_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspectById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProspectInteractions**
> \Swagger\Client\Model\Interactions getProspectInteractions($prospect_id, $format, $status, $created_after, $start, $created_before, $end)



Returns a filterable list of interactions related to a prospect

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$status = "status_example"; // string | The status to filter interactions
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter interactions by their creation date
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter)
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdBefore The end date to filter interactions by their creation date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter interactions by their creation date (alias of createdBefore)

try {
    $result = $api_instance->getProspectInteractions($prospect_id, $format, $status, $created_after, $start, $created_before, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspectInteractions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]
 **status** | **string**| The status to filter interactions | [optional]
 **created_after** | **\DateTime**| The start date to filter interactions by their creation date | [optional]
 **start** | **\DateTime**| @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter) | [optional]
 **created_before** | **\DateTime**| @deprecated - use createdBefore The end date to filter interactions by their creation date | [optional]
 **end** | **\DateTime**| The end date to filter interactions by their creation date (alias of createdBefore) | [optional]

### Return type

[**\Swagger\Client\Model\Interactions**](../Model/Interactions.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProspectQuotes**
> \Swagger\Client\Model\Quotes getProspectQuotes($prospect_id, $format, $status, $created_before, $created_after, $accepted_before, $accepted_after, $rejected_before, $rejected_after)



Returns a filterable list of quotes related to a prospect

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$status = "status_example"; // string | The status to filter
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their creation date
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their creation date
$accepted_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their accepted date
$accepted_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their accepted date
$rejected_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their rejected date
$rejected_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their rejected date

try {
    $result = $api_instance->getProspectQuotes($prospect_id, $format, $status, $created_before, $created_after, $accepted_before, $accepted_after, $rejected_before, $rejected_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspectQuotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]
 **status** | **string**| The status to filter | [optional]
 **created_before** | **\DateTime**| The start date to filter quotes by their creation date | [optional]
 **created_after** | **\DateTime**| The end date to filter quotes by their creation date | [optional]
 **accepted_before** | **\DateTime**| The start date to filter quotes by their accepted date | [optional]
 **accepted_after** | **\DateTime**| The end date to filter quotes by their accepted date | [optional]
 **rejected_before** | **\DateTime**| The start date to filter quotes by their rejected date | [optional]
 **rejected_after** | **\DateTime**| The end date to filter quotes by their rejected date | [optional]

### Return type

[**\Swagger\Client\Model\Quotes**](../Model/Quotes.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProspects**
> \Swagger\Client\Model\Prospects getProspects($format, $search, $category, $status, $agent, $created_after, $start, $created_before, $end, $claimed_after, $claim_start, $claimed_before, $claim_end, $additional_data)



Returns a filterable list of prospects

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$search = "search_example"; // string | A search string to filter prospects. It can be a phone number, an email address or a name.
$category = "category_example"; // string | The category to filter prospects
$status = "status_example"; // string | The status to filter prospects
$agent = "agent_example"; // string | The id of an agent to filter prospects
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter prospects by their creation date
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdAfter The start date to filter prospects by their creation date (alias of createdAfter)
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter prospects by their creation date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdBefore The end date to filter prospects by their creation date (alias of createdBefore)
$claimed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter prospects by their claim date
$claim_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter prospects by their claim date (alias of claimAfter)
$claimed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter prospects by their claim date
$claim_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter prospects by their claim date (alias of claimBefore)
$additional_data = array("additional_data_example"); // string[] | List of filters for additionalData on format `[FIELD][OPERATOR][VALUE]` * FIELD: Can be any additional data field * OPERATOR: Can be =, >=, >, <=, < or ~ (contains) * VALUE\\: Any string  `/prospects?api-key{API_KEY}&additionalData[]=finance=1` Filter all prospect that have additionalData.finance and is equal to `1`  `/prospects?api-key{API_KEY}&additionalData[]=birthdate<01/01/2000&additionalData[]=birthdate>=01/01/1990` Filter all prospect that have additionalData.birthdate, is greater or equal than `01/01/1990` and lower than `01/01/2000`   `/prospects?api-key{API_KEY}&additionalData[]=style~blue` Filter all prospect that have additionalData.style and contains `blue` string

try {
    $result = $api_instance->getProspects($format, $search, $category, $status, $agent, $created_after, $start, $created_before, $end, $claimed_after, $claim_start, $claimed_before, $claim_end, $additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]
 **search** | **string**| A search string to filter prospects. It can be a phone number, an email address or a name. | [optional]
 **category** | **string**| The category to filter prospects | [optional]
 **status** | **string**| The status to filter prospects | [optional]
 **agent** | **string**| The id of an agent to filter prospects | [optional]
 **created_after** | **\DateTime**| The start date to filter prospects by their creation date | [optional]
 **start** | **\DateTime**| @deprecated - use createdAfter The start date to filter prospects by their creation date (alias of createdAfter) | [optional]
 **created_before** | **\DateTime**| The end date to filter prospects by their creation date | [optional]
 **end** | **\DateTime**| @deprecated - use createdBefore The end date to filter prospects by their creation date (alias of createdBefore) | [optional]
 **claimed_after** | **\DateTime**| The start date to filter prospects by their claim date | [optional]
 **claim_start** | **\DateTime**| The start date to filter prospects by their claim date (alias of claimAfter) | [optional]
 **claimed_before** | **\DateTime**| The end date to filter prospects by their claim date | [optional]
 **claim_end** | **\DateTime**| The end date to filter prospects by their claim date (alias of claimBefore) | [optional]
 **additional_data** | [**string[]**](../Model/string.md)| List of filters for additionalData on format &#x60;[FIELD][OPERATOR][VALUE]&#x60; * FIELD: Can be any additional data field * OPERATOR: Can be &#x3D;, &gt;&#x3D;, &gt;, &lt;&#x3D;, &lt; or ~ (contains) * VALUE\\: Any string  &#x60;/prospects?api-key{API_KEY}&amp;additionalData[]&#x3D;finance&#x3D;1&#x60; Filter all prospect that have additionalData.finance and is equal to &#x60;1&#x60;  &#x60;/prospects?api-key{API_KEY}&amp;additionalData[]&#x3D;birthdate&lt;01/01/2000&amp;additionalData[]&#x3D;birthdate&gt;&#x3D;01/01/1990&#x60; Filter all prospect that have additionalData.birthdate, is greater or equal than &#x60;01/01/1990&#x60; and lower than &#x60;01/01/2000&#x60;   &#x60;/prospects?api-key{API_KEY}&amp;additionalData[]&#x3D;style~blue&#x60; Filter all prospect that have additionalData.style and contains &#x60;blue&#x60; string | [optional]

### Return type

[**\Swagger\Client\Model\Prospects**](../Model/Prospects.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuoteById**
> \Swagger\Client\Model\Quote getQuoteById($prospect_id, $quote_id, $format)



Returns a quote by its prospect and quote IDs

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$quote_id = "quote_id_example"; // string | The id of the quote
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->getQuoteById($prospect_id, $quote_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getQuoteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect |
 **quote_id** | **string**| The id of the quote |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Quote**](../Model/Quote.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuotes**
> \Swagger\Client\Model\Quotes getQuotes($format, $status, $created_before, $created_after, $accepted_before, $accepted_after, $rejected_before, $rejected_after)



Returns a filterable list of quotes

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$status = "status_example"; // string | The status to filter
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their creation date
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their creation date
$accepted_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their accepted date
$accepted_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their accepted date
$rejected_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their rejected date
$rejected_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their rejected date

try {
    $result = $api_instance->getQuotes($format, $status, $created_before, $created_after, $accepted_before, $accepted_after, $rejected_before, $rejected_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getQuotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]
 **status** | **string**| The status to filter | [optional]
 **created_before** | **\DateTime**| The start date to filter quotes by their creation date | [optional]
 **created_after** | **\DateTime**| The end date to filter quotes by their creation date | [optional]
 **accepted_before** | **\DateTime**| The start date to filter quotes by their accepted date | [optional]
 **accepted_after** | **\DateTime**| The end date to filter quotes by their accepted date | [optional]
 **rejected_before** | **\DateTime**| The start date to filter quotes by their rejected date | [optional]
 **rejected_after** | **\DateTime**| The end date to filter quotes by their rejected date | [optional]

### Return type

[**\Swagger\Client\Model\Quotes**](../Model/Quotes.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newProspectQuote**
> \Swagger\Client\Model\Quote newProspectQuote($prospect_id, $quote, $format)



Create quote for prospect

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$quote = new \Swagger\Client\Model\NewQuote(); // \Swagger\Client\Model\NewQuote | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->newProspectQuote($prospect_id, $quote, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->newProspectQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect |
 **quote** | [**\Swagger\Client\Model\NewQuote**](../Model/NewQuote.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Quote**](../Model/Quote.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProspectQuote**
> \Swagger\Client\Model\Quote updateProspectQuote($prospect_id, $quote_id, $quote, $format)



Update quote for prospect by prospect and quote IDs

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

$api_instance = new Swagger\Client\Api\ProspectsApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$quote_id = "quote_id_example"; // string | The id of the quote
$quote = new \Swagger\Client\Model\UpdateQuote(); // \Swagger\Client\Model\UpdateQuote | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->updateProspectQuote($prospect_id, $quote_id, $quote, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->updateProspectQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect |
 **quote_id** | **string**| The id of the quote |
 **quote** | [**\Swagger\Client\Model\UpdateQuote**](../Model/UpdateQuote.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Quote**](../Model/Quote.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

