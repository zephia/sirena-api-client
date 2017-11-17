# SwaggerClient-php
Sirena API for lead providers and prospect data manipulation

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.5.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://www.getsirena.com](http://www.getsirena.com)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/zephia/sirena-api-client.git"
    }
  ],
  "require": {
    "zephia/sirena-api-client": "1.*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://api.getsirena.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InteractionsApi* | [**getInteractions**](docs/Api/InteractionsApi.md#getinteractions) | **GET** /prospects/interactions | 
*LeadsApi* | [**getCategories**](docs/Api/LeadsApi.md#getcategories) | **GET** /leads/categories | 
*LeadsApi* | [**getDefaults**](docs/Api/LeadsApi.md#getdefaults) | **GET** /leads/defaults | 
*LeadsApi* | [**newInsuranceLead**](docs/Api/LeadsApi.md#newinsurancelead) | **POST** /lead/insurance | 
*LeadsApi* | [**newRetailLead**](docs/Api/LeadsApi.md#newretaillead) | **POST** /lead/retail | 
*LeadsApi* | [**newSavingPlanLead**](docs/Api/LeadsApi.md#newsavingplanlead) | **POST** /lead/saving-plan | 
*LeadsApi* | [**newVehicleLead**](docs/Api/LeadsApi.md#newvehiclelead) | **POST** /lead/vehicle | 
*NotificationsApi* | [**deactivateSubscription**](docs/Api/NotificationsApi.md#deactivatesubscription) | **DELETE** /notifications/subscription/{subscriptionId} | 
*NotificationsApi* | [**getActiveSubscriptionById**](docs/Api/NotificationsApi.md#getactivesubscriptionbyid) | **GET** /notifications/subscription/{subscriptionId} | 
*NotificationsApi* | [**getActiveSubscriptions**](docs/Api/NotificationsApi.md#getactivesubscriptions) | **GET** /notifications/subscriptions | 
*NotificationsApi* | [**getTopics**](docs/Api/NotificationsApi.md#gettopics) | **GET** /notifications/topics | 
*NotificationsApi* | [**newSubscription**](docs/Api/NotificationsApi.md#newsubscription) | **POST** /notifications/subscriptions | 
*ProspectsApi* | [**deleteProspect**](docs/Api/ProspectsApi.md#deleteprospect) | **DELETE** /prospect/{prospectId} | 
*ProspectsApi* | [**getInteractionById**](docs/Api/ProspectsApi.md#getinteractionbyid) | **GET** /prospect/{prospectId}/interaction/{interactionId} | 
*ProspectsApi* | [**getInteractions**](docs/Api/ProspectsApi.md#getinteractions) | **GET** /prospects/interactions | 
*ProspectsApi* | [**getProspectById**](docs/Api/ProspectsApi.md#getprospectbyid) | **GET** /prospect/{prospectId} | 
*ProspectsApi* | [**getProspectInteractions**](docs/Api/ProspectsApi.md#getprospectinteractions) | **GET** /prospect/{prospectId}/interactions | 
*ProspectsApi* | [**getProspectQuotes**](docs/Api/ProspectsApi.md#getprospectquotes) | **GET** /prospect/{prospectId}/quotes | 
*ProspectsApi* | [**getProspects**](docs/Api/ProspectsApi.md#getprospects) | **GET** /prospects | 
*ProspectsApi* | [**getQuoteById**](docs/Api/ProspectsApi.md#getquotebyid) | **GET** /prospect/{prospectId}/quote/{quoteId} | 
*ProspectsApi* | [**getQuotes**](docs/Api/ProspectsApi.md#getquotes) | **GET** /prospects/quotes | 
*ProspectsApi* | [**newProspectQuote**](docs/Api/ProspectsApi.md#newprospectquote) | **POST** /prospect/{prospectId}/quotes | 
*ProspectsApi* | [**updateProspectQuote**](docs/Api/ProspectsApi.md#updateprospectquote) | **PUT** /prospect/{prospectId}/quote/{quoteId} | 
*QuotesApi* | [**getProspectQuotes**](docs/Api/QuotesApi.md#getprospectquotes) | **GET** /prospect/{prospectId}/quotes | 
*QuotesApi* | [**getQuoteById**](docs/Api/QuotesApi.md#getquotebyid) | **GET** /prospect/{prospectId}/quote/{quoteId} | 
*QuotesApi* | [**getQuotes**](docs/Api/QuotesApi.md#getquotes) | **GET** /prospects/quotes | 
*QuotesApi* | [**newProspectQuote**](docs/Api/QuotesApi.md#newprospectquote) | **POST** /prospect/{prospectId}/quotes | 
*QuotesApi* | [**updateProspectQuote**](docs/Api/QuotesApi.md#updateprospectquote) | **PUT** /prospect/{prospectId}/quote/{quoteId} | 


## Documentation For Models

 - [Agent](docs/Model/Agent.md)
 - [Categories](docs/Model/Categories.md)
 - [CategoriesByIndustry](docs/Model/CategoriesByIndustry.md)
 - [Category](docs/Model/Category.md)
 - [Defaults](docs/Model/Defaults.md)
 - [Error](docs/Model/Error.md)
 - [Finance](docs/Model/Finance.md)
 - [Interaction](docs/Model/Interaction.md)
 - [InteractionMedium](docs/Model/InteractionMedium.md)
 - [InteractionOutput](docs/Model/InteractionOutput.md)
 - [InteractionOutputConversations](docs/Model/InteractionOutputConversations.md)
 - [Interactions](docs/Model/Interactions.md)
 - [Lead](docs/Model/Lead.md)
 - [LeadData](docs/Model/LeadData.md)
 - [MessageMedium](docs/Model/MessageMedium.md)
 - [MessageOutput](docs/Model/MessageOutput.md)
 - [MoneyAmount](docs/Model/MoneyAmount.md)
 - [MoneyAmountEstimate](docs/Model/MoneyAmountEstimate.md)
 - [NewQuote](docs/Model/NewQuote.md)
 - [NewSubscription](docs/Model/NewSubscription.md)
 - [ObjectId](docs/Model/ObjectId.md)
 - [Odometer](docs/Model/Odometer.md)
 - [Product](docs/Model/Product.md)
 - [Proposal](docs/Model/Proposal.md)
 - [ProposalItems](docs/Model/ProposalItems.md)
 - [Prospect](docs/Model/Prospect.md)
 - [Prospects](docs/Model/Prospects.md)
 - [Quote](docs/Model/Quote.md)
 - [QuoteItem](docs/Model/QuoteItem.md)
 - [Quotes](docs/Model/Quotes.md)
 - [Subscription](docs/Model/Subscription.md)
 - [Subscriptions](docs/Model/Subscriptions.md)
 - [Topic](docs/Model/Topic.md)
 - [Topics](docs/Model/Topics.md)
 - [UpdateQuote](docs/Model/UpdateQuote.md)
 - [GeneralLead](docs/Model/GeneralLead.md)
 - [SavingPlanLead](docs/Model/SavingPlanLead.md)
 - [SavingPlanProduct](docs/Model/SavingPlanProduct.md)
 - [VehicleLead](docs/Model/VehicleLead.md)
 - [VehicleProduct](docs/Model/VehicleProduct.md)


## Documentation For Authorization


## ApiKey

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: URL query string

## OAuth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: http://localhost:2000/oauth2/authorization
- **Scopes**: 
 - **leads:write**: Lead Provider
 - **prospects:read**: Read Prospects
 - **prospects:readAdditionalData**: Read Prospects Aditional Data
 - **prospects:write**: Write Prospects
 - **notifications**: Notifications


## Author

it@getsirena.com


