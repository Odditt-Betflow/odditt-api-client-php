# Odditt\ApiClient\AffiliatesApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AffiliatesEventPositionPost()**](AffiliatesApi.md#v1AffiliatesEventPositionPost) | **POST** /v1/affiliates/event-position | Single-bet cart for affiliate mode |
| [**v1AffiliatesParlayPost()**](AffiliatesApi.md#v1AffiliatesParlayPost) | **POST** /v1/affiliates/parlay | Parlay cart for affiliate mode |


## `v1AffiliatesEventPositionPost()`

```php
v1AffiliatesEventPositionPost($v1_affiliates_event_position_post_request): object
```

Single-bet cart for affiliate mode

Returns live odds across operators for a single event betting market position, overlaid with the calling client's best affiliate offer per operator. Powers the widget's \"Bet Now\" cart for a single selection. Results are scoped to the authenticated client; operators can be gated with operator_ids / operator_keys.

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


$apiInstance = new Odditt\ApiClient\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_affiliates_event_position_post_request = {"country_code":"US","event_betting_market_position_id":351558937,"operator_ids":[1,2],"subnational_region_code":"NJ"}; // \Odditt\ApiClient\Model\V1AffiliatesEventPositionPostRequest

try {
    $result = $apiInstance->v1AffiliatesEventPositionPost($v1_affiliates_event_position_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->v1AffiliatesEventPositionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_affiliates_event_position_post_request** | [**\Odditt\ApiClient\Model\V1AffiliatesEventPositionPostRequest**](../Model/V1AffiliatesEventPositionPostRequest.md)|  | |

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

## `v1AffiliatesParlayPost()`

```php
v1AffiliatesParlayPost($v1_affiliates_parlay_post_request): object
```

Parlay cart for affiliate mode

Returns combined parlay odds per operator, the per-leg single bets, and the calling client's best affiliate offer per operator, with combo deeplinks generated per operator. Powers the widget's \"Bet Now\" cart for a multi-leg bet. Results are scoped to the authenticated client; operators can be gated with operator_ids / operator_keys.

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


$apiInstance = new Odditt\ApiClient\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_affiliates_parlay_post_request = {"country_code":"US","event_betting_market_position_ids":[351558937,351558940],"operator_ids":[1,2],"subnational_region_code":"NJ"}; // \Odditt\ApiClient\Model\V1AffiliatesParlayPostRequest

try {
    $result = $apiInstance->v1AffiliatesParlayPost($v1_affiliates_parlay_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->v1AffiliatesParlayPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_affiliates_parlay_post_request** | [**\Odditt\ApiClient\Model\V1AffiliatesParlayPostRequest**](../Model/V1AffiliatesParlayPostRequest.md)|  | |

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
