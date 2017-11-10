# Swagger\Client\NotificationsApi

All URIs are relative to *http://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deactivateSubscription**](NotificationsApi.md#deactivateSubscription) | **DELETE** /notifications/subscription/{subscriptionId} | 
[**getActiveSubscriptionById**](NotificationsApi.md#getActiveSubscriptionById) | **GET** /notifications/subscription/{subscriptionId} | 
[**getActiveSubscriptions**](NotificationsApi.md#getActiveSubscriptions) | **GET** /notifications/subscriptions | 
[**getTopics**](NotificationsApi.md#getTopics) | **GET** /notifications/topics | 
[**newSubscription**](NotificationsApi.md#newSubscription) | **POST** /notifications/subscriptions | 


# **deactivateSubscription**
> \Swagger\Client\Model\Subscription deactivateSubscription($subscription_id, $format)



Deactivates a subscription by its ID

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

$api_instance = new Swagger\Client\Api\NotificationsApi();
$subscription_id = "subscription_id_example"; // string | The id of the subscription
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->deactivateSubscription($subscription_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deactivateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The id of the subscription |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveSubscriptionById**
> \Swagger\Client\Model\Subscription getActiveSubscriptionById($subscription_id, $format)



Returns an active notification subscription by its ID

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

$api_instance = new Swagger\Client\Api\NotificationsApi();
$subscription_id = "subscription_id_example"; // string | The id of the subscription
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->getActiveSubscriptionById($subscription_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getActiveSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The id of the subscription |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveSubscriptions**
> \Swagger\Client\Model\Subscriptions getActiveSubscriptions($format)



Returns the list of active subscriptions. Note that subscriptions are currently limited to one per group.

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

$api_instance = new Swagger\Client\Api\NotificationsApi();
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->getActiveSubscriptions($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getActiveSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Subscriptions**](../Model/Subscriptions.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopics**
> \Swagger\Client\Model\Topics getTopics($format)



Returns information about the available notification topics. Topics can be subscribed to using Subscriptions.

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

$api_instance = new Swagger\Client\Api\NotificationsApi();
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->getTopics($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getTopics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Topics**](../Model/Topics.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newSubscription**
> \Swagger\Client\Model\Subscription newSubscription($subscription, $format)



Subscribe to notification topics. Note that subscriptions are currently limited to one per group, and subscribing twice will result in the first subscription being deactivated.

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

$api_instance = new Swagger\Client\Api\NotificationsApi();
$subscription = new \Swagger\Client\Model\NewSubscription(); // \Swagger\Client\Model\NewSubscription | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $api_instance->newSubscription($subscription, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->newSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription** | [**\Swagger\Client\Model\NewSubscription**](../Model/NewSubscription.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

