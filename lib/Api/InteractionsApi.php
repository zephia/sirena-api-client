<?php
/**
 * InteractionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sirena API
 *
 * Sirena API for lead providers and prospect data manipulation
 *
 * OpenAPI spec version: 1.5.0
 * Contact: it@getsirena.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * InteractionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InteractionsApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return InteractionsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getInteractions
     *
     * @param string $format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. (optional)
     * @param string $agent The id of the agent to filter (optional)
     * @param string $status The status to filter (optional)
     * @param \DateTime $created_after The start date to filter interactions by their creation date (optional)
     * @param \DateTime $start @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter) (optional)
     * @param \DateTime $created_before The end date to filter interactions by their creation date (optional)
     * @param \DateTime $end @deprecated - use createdBefore The end date to filter interactions by their creation date (alias of createdBefore) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Interactions
     */
    public function getInteractions($format = null, $agent = null, $status = null, $created_after = null, $start = null, $created_before = null, $end = null)
    {
        list($response) = $this->getInteractionsWithHttpInfo($format, $agent, $status, $created_after, $start, $created_before, $end);
        return $response;
    }

    /**
     * Operation getInteractionsWithHttpInfo
     *
     * @param string $format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. (optional)
     * @param string $agent The id of the agent to filter (optional)
     * @param string $status The status to filter (optional)
     * @param \DateTime $created_after The start date to filter interactions by their creation date (optional)
     * @param \DateTime $start @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter) (optional)
     * @param \DateTime $created_before The end date to filter interactions by their creation date (optional)
     * @param \DateTime $end @deprecated - use createdBefore The end date to filter interactions by their creation date (alias of createdBefore) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Interactions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInteractionsWithHttpInfo($format = null, $agent = null, $status = null, $created_after = null, $start = null, $created_before = null, $end = null)
    {
        // parse inputs
        $resourcePath = "/prospects/interactions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/csv', 'text/plain']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($format !== null) {
            $queryParams['format'] = $this->apiClient->getSerializer()->toQueryValue($format);
        }
        // query params
        if ($agent !== null) {
            $queryParams['agent'] = $this->apiClient->getSerializer()->toQueryValue($agent);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($created_after !== null) {
            $queryParams['createdAfter'] = $this->apiClient->getSerializer()->toQueryValue($created_after);
        }
        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($created_before !== null) {
            $queryParams['createdBefore'] = $this->apiClient->getSerializer()->toQueryValue($created_before);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Interactions',
                '/prospects/interactions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Interactions', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Interactions', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}