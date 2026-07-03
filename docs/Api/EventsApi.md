# Odditt\ApiClient\EventsApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1EventsUpcomingEventsPost()**](EventsApi.md#v1EventsUpcomingEventsPost) | **POST** /v1/events/upcoming-events | Get upcoming events |


## `v1EventsUpcomingEventsPost()`

```php
v1EventsUpcomingEventsPost($v1_events_upcoming_events_post_request): object
```

Get upcoming events

Returns upcoming events with optional sport and league filters, timezone support, and pagination.

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


$apiInstance = new Odditt\ApiClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_events_upcoming_events_post_request = {"event_date":"2026-04-09","league_id":null,"page":1,"page_size":20,"sport_id":2,"timezone":"UTC"}; // \Odditt\ApiClient\Model\V1EventsUpcomingEventsPostRequest

try {
    $result = $apiInstance->v1EventsUpcomingEventsPost($v1_events_upcoming_events_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->v1EventsUpcomingEventsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_events_upcoming_events_post_request** | [**\Odditt\ApiClient\Model\V1EventsUpcomingEventsPostRequest**](../Model/V1EventsUpcomingEventsPostRequest.md)|  | |

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
