# Odditt\ApiClient\TelemetryApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AffiliatesEventsPost()**](TelemetryApi.md#v1AffiliatesEventsPost) | **POST** /v1/affiliates/events | Log an impression or click |


## `v1AffiliatesEventsPost()`

```php
v1AffiliatesEventsPost($v1_affiliates_events_post_request)
```

Log an impression or click

Fire-and-forget telemetry. Records one impression (card render) or click (deeplink tap). Returns 202 on accept; never blocks the widget's click-out.

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


$apiInstance = new Odditt\ApiClient\Api\TelemetryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_affiliates_events_post_request = new \Odditt\ApiClient\Model\V1AffiliatesEventsPostRequest(); // \Odditt\ApiClient\Model\V1AffiliatesEventsPostRequest

try {
    $apiInstance->v1AffiliatesEventsPost($v1_affiliates_events_post_request);
} catch (Exception $e) {
    echo 'Exception when calling TelemetryApi->v1AffiliatesEventsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_affiliates_events_post_request** | [**\Odditt\ApiClient\Model\V1AffiliatesEventsPostRequest**](../Model/V1AffiliatesEventsPostRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
