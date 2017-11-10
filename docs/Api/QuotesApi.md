# Swagger\Client\QuotesApi

All URIs are relative to *http://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProspectQuotes**](QuotesApi.md#getProspectQuotes) | **GET** /prospect/{prospectId}/quotes | 
[**getQuoteById**](QuotesApi.md#getQuoteById) | **GET** /prospect/{prospectId}/quote/{quoteId} | 
[**getQuotes**](QuotesApi.md#getQuotes) | **GET** /prospects/quotes | 
[**newProspectQuote**](QuotesApi.md#newProspectQuote) | **POST** /prospect/{prospectId}/quotes | 
[**updateProspectQuote**](QuotesApi.md#updateProspectQuote) | **PUT** /prospect/{prospectId}/quote/{quoteId} | 


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

$api_instance = new Swagger\Client\Api\QuotesApi();
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
    echo 'Exception when calling QuotesApi->getProspectQuotes: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\QuotesApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$quote_id = "quote_id_example"; // string | The id of the quote
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->getQuoteById($prospect_id, $quote_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getQuoteById: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\QuotesApi();
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
    echo 'Exception when calling QuotesApi->getQuotes: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\QuotesApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$quote = new \Swagger\Client\Model\NewQuote(); // \Swagger\Client\Model\NewQuote | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->newProspectQuote($prospect_id, $quote, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->newProspectQuote: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Swagger\Client\Api\QuotesApi();
$prospect_id = "prospect_id_example"; // string | The id of the prospect
$quote_id = "quote_id_example"; // string | The id of the quote
$quote = new \Swagger\Client\Model\UpdateQuote(); // \Swagger\Client\Model\UpdateQuote | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->updateProspectQuote($prospect_id, $quote_id, $quote, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->updateProspectQuote: ', $e->getMessage(), PHP_EOL;
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

