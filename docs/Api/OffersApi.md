# Odditt\ApiClient\OffersApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AffiliatesDealsPost()**](OffersApi.md#v1AffiliatesDealsPost) | **POST** /v1/affiliates/deals | Paginated client deals |
| [**v1AffiliatesOffersPost()**](OffersApi.md#v1AffiliatesOffersPost) | **POST** /v1/affiliates/offers | Client offer cards for a geography |


## `v1AffiliatesDealsPost()`

```php
v1AffiliatesDealsPost($v1_affiliates_deals_post_request): object
```

Paginated client deals

Paginated client deals (carousel/featured/list), optionally enriched with operator reviews. Scoped to the authenticated client.

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


$apiInstance = new Odditt\ApiClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_affiliates_deals_post_request = new \Odditt\ApiClient\Model\V1AffiliatesDealsPostRequest(); // \Odditt\ApiClient\Model\V1AffiliatesDealsPostRequest

try {
    $result = $apiInstance->v1AffiliatesDealsPost($v1_affiliates_deals_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->v1AffiliatesDealsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_affiliates_deals_post_request** | [**\Odditt\ApiClient\Model\V1AffiliatesDealsPostRequest**](../Model/V1AffiliatesDealsPostRequest.md)|  | [optional] |

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

## `v1AffiliatesOffersPost()`

```php
v1AffiliatesOffersPost($v1_affiliates_offers_post_request): object
```

Client offer cards for a geography

Returns the calling client's best operator offer card per operator for a geography. The core offers read the widget cart renders.

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


$apiInstance = new Odditt\ApiClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_affiliates_offers_post_request = new \Odditt\ApiClient\Model\V1AffiliatesOffersPostRequest(); // \Odditt\ApiClient\Model\V1AffiliatesOffersPostRequest

try {
    $result = $apiInstance->v1AffiliatesOffersPost($v1_affiliates_offers_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->v1AffiliatesOffersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_affiliates_offers_post_request** | [**\Odditt\ApiClient\Model\V1AffiliatesOffersPostRequest**](../Model/V1AffiliatesOffersPostRequest.md)|  | [optional] |

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
