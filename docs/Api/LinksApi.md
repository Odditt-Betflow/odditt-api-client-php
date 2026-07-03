# Odditt\ApiClient\LinksApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AffiliatesLinksBulkDeactivatePost()**](LinksApi.md#v1AffiliatesLinksBulkDeactivatePost) | **POST** /v1/affiliates/links/bulk-deactivate | Bulk deactivate links by filter |
| [**v1AffiliatesLinksBulkPatch()**](LinksApi.md#v1AffiliatesLinksBulkPatch) | **PATCH** /v1/affiliates/links/bulk | Bulk patch links by filter |
| [**v1AffiliatesLinksBulkPost()**](LinksApi.md#v1AffiliatesLinksBulkPost) | **POST** /v1/affiliates/links/bulk | Bulk create/upsert links (JSON or CSV) |
| [**v1AffiliatesLinksJobsGet()**](LinksApi.md#v1AffiliatesLinksJobsGet) | **GET** /v1/affiliates/links/jobs | List async bulk jobs |
| [**v1AffiliatesLinksJobsJobIdGet()**](LinksApi.md#v1AffiliatesLinksJobsJobIdGet) | **GET** /v1/affiliates/links/jobs/{job_id} | Poll an async bulk job |
| [**v1AffiliatesLinksPost()**](LinksApi.md#v1AffiliatesLinksPost) | **POST** /v1/affiliates/links | Create or upsert a single link |


## `v1AffiliatesLinksBulkDeactivatePost()`

```php
v1AffiliatesLinksBulkDeactivatePost($v1_affiliates_links_bulk_deactivate_post_request): object
```

Bulk deactivate links by filter

Soft-deletes all links matching a filter (e.g. a state goes offline).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_affiliates_links_bulk_deactivate_post_request = new \Odditt\ApiClient\Model\V1AffiliatesLinksBulkDeactivatePostRequest(); // \Odditt\ApiClient\Model\V1AffiliatesLinksBulkDeactivatePostRequest

try {
    $result = $apiInstance->v1AffiliatesLinksBulkDeactivatePost($v1_affiliates_links_bulk_deactivate_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->v1AffiliatesLinksBulkDeactivatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_affiliates_links_bulk_deactivate_post_request** | [**\Odditt\ApiClient\Model\V1AffiliatesLinksBulkDeactivatePostRequest**](../Model/V1AffiliatesLinksBulkDeactivatePostRequest.md)|  | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AffiliatesLinksBulkPatch()`

```php
v1AffiliatesLinksBulkPatch($v1_affiliates_links_bulk_patch_request): object
```

Bulk patch links by filter

Applies a patch to all links matching a filter (e.g. rewrite all FanDuel-NJ URLs on a domain change).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_affiliates_links_bulk_patch_request = new \Odditt\ApiClient\Model\V1AffiliatesLinksBulkPatchRequest(); // \Odditt\ApiClient\Model\V1AffiliatesLinksBulkPatchRequest

try {
    $result = $apiInstance->v1AffiliatesLinksBulkPatch($v1_affiliates_links_bulk_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->v1AffiliatesLinksBulkPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_affiliates_links_bulk_patch_request** | [**\Odditt\ApiClient\Model\V1AffiliatesLinksBulkPatchRequest**](../Model/V1AffiliatesLinksBulkPatchRequest.md)|  | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AffiliatesLinksBulkPost()`

```php
v1AffiliatesLinksBulkPost($request_body, $dry_run, $async): object
```

Bulk create/upsert links (JSON or CSV)

Upserts many links idempotently on the natural key. Accepts a JSON array of row objects or a text/csv body (header row). Per-row errors never fail the batch. Use ?dry_run=true to validate without persisting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(new \stdClass); // object[]
$dry_run = True; // bool | When true, validates the whole batch and returns the per-row report without persisting. Always synchronous.
$async = True; // bool | Force background processing. Batches of 500+ rows are queued automatically regardless of this flag. Queued batches return 202 with a job_id to poll at /v1/affiliates/links/jobs/{job_id}.

try {
    $result = $apiInstance->v1AffiliatesLinksBulkPost($request_body, $dry_run, $async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->v1AffiliatesLinksBulkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**object[]**](../Model/object.md)|  | |
| **dry_run** | **bool**| When true, validates the whole batch and returns the per-row report without persisting. Always synchronous. | [optional] |
| **async** | **bool**| Force background processing. Batches of 500+ rows are queued automatically regardless of this flag. Queued batches return 202 with a job_id to poll at /v1/affiliates/links/jobs/{job_id}. | [optional] |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `text/csv`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AffiliatesLinksJobsGet()`

```php
v1AffiliatesLinksJobsGet(): object
```

List async bulk jobs

Recent async bulk jobs for the authenticated client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AffiliatesLinksJobsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->v1AffiliatesLinksJobsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AffiliatesLinksJobsJobIdGet()`

```php
v1AffiliatesLinksJobsJobIdGet($job_id): object
```

Poll an async bulk job

Status, counts, and per-row errors for one async bulk job. Poll until status is \"completed\" or \"failed\". Scoped to the authenticated client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 'job_id_example'; // string

try {
    $result = $apiInstance->v1AffiliatesLinksJobsJobIdGet($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->v1AffiliatesLinksJobsJobIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **string**|  | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AffiliatesLinksPost()`

```php
v1AffiliatesLinksPost($v1_affiliates_links_post_request): object
```

Create or upsert a single link

Creates a link, or updates the existing one on the natural key (operator + geography + category + campaign + label). Resolves operator, country, and region at write time; unresolvable codes return 422.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_affiliates_links_post_request = new \Odditt\ApiClient\Model\V1AffiliatesLinksPostRequest(); // \Odditt\ApiClient\Model\V1AffiliatesLinksPostRequest

try {
    $result = $apiInstance->v1AffiliatesLinksPost($v1_affiliates_links_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->v1AffiliatesLinksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_affiliates_links_post_request** | [**\Odditt\ApiClient\Model\V1AffiliatesLinksPostRequest**](../Model/V1AffiliatesLinksPostRequest.md)|  | |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
