<?php
/**
 * RecipientsApi
 * PHP version 5
 *
 * @category Class
 * @package  PaymentRails\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Payment Rails API
 *
 * No descripton provided (generated by PaymentRails Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.31.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PaymentRails\Client\Api;

use \PaymentRails\Client\Configuration;
use \PaymentRails\Client\ApiClient;
use \PaymentRails\Client\ApiException;
use \PaymentRails\Client\ObjectSerializer;

/**
 * RecipientsApi Class Doc Comment
 *
 * @category Class
 * @package  PaymentRails\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecipientsApi
{

    /**
     * API Client
     *
     * @var \PaymentRails\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \PaymentRails\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\PaymentRails\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.paymentrails.com/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \PaymentRails\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \PaymentRails\Client\ApiClient $apiClient set the API client
     *
     * @return RecipientsApi
     */
    public function setApiClient(\PaymentRails\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createRecipient
     *
     * 
     *
     * @param \PaymentRails\Client\Model\RecipientPost $body  (optional)
     * @return \PaymentRails\Client\Model\InlineResponse2003
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function createRecipient($body = null)
    {
        list($response) = $this->createRecipientWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createRecipientWithHttpInfo
     *
     * 
     *
     * @param \PaymentRails\Client\Model\RecipientPost $body  (optional)
     * @return Array of \PaymentRails\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function createRecipientWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/recipients";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\PaymentRails\Client\Model\InlineResponse2003',
                '/recipients'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\PaymentRails\Client\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PaymentRails\Client\Model\InlineResponse2003', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteRecipients
     *
     * 
     *
     * @param \PaymentRails\Client\Model\DeleteIds $ids an array of valid recipient&#39;s id (optional)
     * @return void
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function deleteRecipients($ids = null)
    {
        list($response) = $this->deleteRecipientsWithHttpInfo($ids);
        return $response;
    }

    /**
     * Operation deleteRecipientsWithHttpInfo
     *
     * 
     *
     * @param \PaymentRails\Client\Model\DeleteIds $ids an array of valid recipient&#39;s id (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function deleteRecipientsWithHttpInfo($ids = null)
    {
        // parse inputs
        $resourcePath = "/recipients";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($ids)) {
            $_tempBody = $ids;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/recipients'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation exportRecipientCsv
     *
     * 
     *
     * @param int $page page number default 1 (optional)
     * @param int $page_size page size default 100 (optional)
     * @param string $start_date filter recipients list by creation date from start date format YYYY-MM-DD (optional)
     * @param string $end_date filter recipients list by creation date to end date format YYYY-MM-DD (optional)
     * @param string $status filter recipients list by status (optional)
     * @param string $compliance_status filter recipients list by compliance status (optional)
     * @param string $payout_method filter recipients list by payout methods (optional)
     * @param string $payout_currency filter recipients list by payout currency 3 letters ISO code (optional)
     * @param string $country filter recipients list by country (optional)
     * @return void
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function exportRecipientCsv($page = null, $page_size = null, $start_date = null, $end_date = null, $status = null, $compliance_status = null, $payout_method = null, $payout_currency = null, $country = null)
    {
        list($response) = $this->exportRecipientCsvWithHttpInfo($page, $page_size, $start_date, $end_date, $status, $compliance_status, $payout_method, $payout_currency, $country);
        return $response;
    }

    /**
     * Operation exportRecipientCsvWithHttpInfo
     *
     * 
     *
     * @param int $page page number default 1 (optional)
     * @param int $page_size page size default 100 (optional)
     * @param string $start_date filter recipients list by creation date from start date format YYYY-MM-DD (optional)
     * @param string $end_date filter recipients list by creation date to end date format YYYY-MM-DD (optional)
     * @param string $status filter recipients list by status (optional)
     * @param string $compliance_status filter recipients list by compliance status (optional)
     * @param string $payout_method filter recipients list by payout methods (optional)
     * @param string $payout_currency filter recipients list by payout currency 3 letters ISO code (optional)
     * @param string $country filter recipients list by country (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function exportRecipientCsvWithHttpInfo($page = null, $page_size = null, $start_date = null, $end_date = null, $status = null, $compliance_status = null, $payout_method = null, $payout_currency = null, $country = null)
    {
        // parse inputs
        $resourcePath = "/recipients/exports.csv";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('text/csv'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($compliance_status !== null) {
            $queryParams['complianceStatus'] = $this->apiClient->getSerializer()->toQueryValue($compliance_status);
        }
        // query params
        if ($payout_method !== null) {
            $queryParams['payoutMethod'] = $this->apiClient->getSerializer()->toQueryValue($payout_method);
        }
        // query params
        if ($payout_currency !== null) {
            $queryParams['payoutCurrency'] = $this->apiClient->getSerializer()->toQueryValue($payout_currency);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = $this->apiClient->getSerializer()->toQueryValue($country);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/recipients/exports.csv'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation queryRecipients
     *
     * 
     *
     * @param int $page page number default 1 (optional)
     * @param int $page_size page size default 100 (optional)
     * @param string $start_date filter recipients list by creation date from start date format YYYY-MM-DD (optional)
     * @param string $end_date filter recipients list by creation date to end date format YYYY-MM-DD (optional)
     * @param string $status filter recipients list by status multiple values separated by coma (optional)
     * @param string $compliance_status filter recipients list by compliance status multiple values separated by comas (optional)
     * @param string $payout_method filter recipients list by payout methods multiple values separated by comas (optional)
     * @param string $payout_currency filter recipients list by payout currency 3 letters ISO code, multiple values separated by comas (optional)
     * @param string $country filter recipients list by country multiple values separated by comas (optional)
     * @return \PaymentRails\Client\Model\InlineResponse2002
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function queryRecipients($page = null, $page_size = null, $start_date = null, $end_date = null, $status = null, $compliance_status = null, $payout_method = null, $payout_currency = null, $country = null)
    {
        list($response) = $this->queryRecipientsWithHttpInfo($page, $page_size, $start_date, $end_date, $status, $compliance_status, $payout_method, $payout_currency, $country);
        return $response;
    }

    /**
     * Operation queryRecipientsWithHttpInfo
     *
     * 
     *
     * @param int $page page number default 1 (optional)
     * @param int $page_size page size default 100 (optional)
     * @param string $start_date filter recipients list by creation date from start date format YYYY-MM-DD (optional)
     * @param string $end_date filter recipients list by creation date to end date format YYYY-MM-DD (optional)
     * @param string $status filter recipients list by status multiple values separated by coma (optional)
     * @param string $compliance_status filter recipients list by compliance status multiple values separated by comas (optional)
     * @param string $payout_method filter recipients list by payout methods multiple values separated by comas (optional)
     * @param string $payout_currency filter recipients list by payout currency 3 letters ISO code, multiple values separated by comas (optional)
     * @param string $country filter recipients list by country multiple values separated by comas (optional)
     * @return Array of \PaymentRails\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function queryRecipientsWithHttpInfo($page = null, $page_size = null, $start_date = null, $end_date = null, $status = null, $compliance_status = null, $payout_method = null, $payout_currency = null, $country = null)
    {
        // parse inputs
        $resourcePath = "/recipients";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($compliance_status !== null) {
            $queryParams['complianceStatus'] = $this->apiClient->getSerializer()->toQueryValue($compliance_status);
        }
        // query params
        if ($payout_method !== null) {
            $queryParams['payoutMethod'] = $this->apiClient->getSerializer()->toQueryValue($payout_method);
        }
        // query params
        if ($payout_currency !== null) {
            $queryParams['payoutCurrency'] = $this->apiClient->getSerializer()->toQueryValue($payout_currency);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = $this->apiClient->getSerializer()->toQueryValue($country);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\PaymentRails\Client\Model\InlineResponse2002',
                '/recipients'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\PaymentRails\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PaymentRails\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation uploadRecipientCsv
     *
     * 
     *
     * @param \SplFileObject $file the csv file (required)
     * @return void
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function uploadRecipientCsv($file)
    {
        list($response) = $this->uploadRecipientCsvWithHttpInfo($file);
        return $response;
    }

    /**
     * Operation uploadRecipientCsvWithHttpInfo
     *
     * 
     *
     * @param \SplFileObject $file the csv file (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \PaymentRails\Client\ApiException on non-2xx response
     */
    public function uploadRecipientCsvWithHttpInfo($file)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling uploadRecipientCsv');
        }
        // parse inputs
        $resourcePath = "/recipients/upload";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($file !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
            } else {
                $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
            }
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/recipients/upload'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}