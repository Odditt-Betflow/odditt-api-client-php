# Odditt\ApiClient\OddsApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1OddsUpcomingOddsByEventPost()**](OddsApi.md#v1OddsUpcomingOddsByEventPost) | **POST** /v1/odds/upcoming-odds-by-event | Get upcoming odds by event |


## `v1OddsUpcomingOddsByEventPost()`

```php
v1OddsUpcomingOddsByEventPost($v1_odds_upcoming_odds_by_event_post_request): object
```

Get upcoming odds by event

Returns paginated betting market positions for a specific upcoming event, optionally filtered by operator.

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


$apiInstance = new Odditt\ApiClient\Api\OddsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_odds_upcoming_odds_by_event_post_request = {"event_id":123456,"operator_ids":[1,2,3],"page":1,"page_size":20}; // \Odditt\ApiClient\Model\V1OddsUpcomingOddsByEventPostRequest

try {
    $result = $apiInstance->v1OddsUpcomingOddsByEventPost($v1_odds_upcoming_odds_by_event_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OddsApi->v1OddsUpcomingOddsByEventPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_odds_upcoming_odds_by_event_post_request** | [**\Odditt\ApiClient\Model\V1OddsUpcomingOddsByEventPostRequest**](../Model/V1OddsUpcomingOddsByEventPostRequest.md)|  | |

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
