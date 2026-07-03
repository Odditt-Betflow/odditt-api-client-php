# Odditt\ApiClient\HistoricalApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1HistoricalEventsGet()**](HistoricalApi.md#v1HistoricalEventsGet) | **GET** /v1/historical/events | List historical odds events (paginated) |
| [**v1HistoricalOddsEventIdExtGet()**](HistoricalApi.md#v1HistoricalOddsEventIdExtGet) | **GET** /v1/historical/odds/{event_id}.{ext} | Download a per-event historical odds file |


## `v1HistoricalEventsGet()`

```php
v1HistoricalEventsGet($schema_version, $sport_id, $league_id, $team_id, $start_date, $end_date, $page, $page_size): object
```

List historical odds events (paginated)

Returns a paginated catalog of per-event historical odds files the authenticated client has access to. Each result entry carries pre-baked download URLs for the JSON and CSV payloads; clients GET those URLs directly. Results are scoped to the authenticated client; callers without a client association receive `403 Forbidden`.

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


$apiInstance = new Odditt\ApiClient\Api\HistoricalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schema_version = 'v1'; // string | Payload schema version. Defaults to `v1` when omitted. Unknown versions are rejected.
$sport_id = 56; // int
$league_id = 56; // int
$team_id = 56; // int | Filter to events involving this team as either home or away.
$start_date = 'start_date_example'; // string | Inclusive lower bound on the event/affiliation date, ISO format YYYY-MM-DD.
$end_date = 'end_date_example'; // string | Inclusive upper bound on the event/affiliation date, ISO format YYYY-MM-DD.
$page = 1; // int
$page_size = 20; // int

try {
    $result = $apiInstance->v1HistoricalEventsGet($schema_version, $sport_id, $league_id, $team_id, $start_date, $end_date, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->v1HistoricalEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schema_version** | **string**| Payload schema version. Defaults to &#x60;v1&#x60; when omitted. Unknown versions are rejected. | [optional] [default to &#39;v1&#39;] |
| **sport_id** | **int**|  | [optional] |
| **league_id** | **int**|  | [optional] |
| **team_id** | **int**| Filter to events involving this team as either home or away. | [optional] |
| **start_date** | **string**| Inclusive lower bound on the event/affiliation date, ISO format YYYY-MM-DD. | [optional] |
| **end_date** | **string**| Inclusive upper bound on the event/affiliation date, ISO format YYYY-MM-DD. | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |

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

## `v1HistoricalOddsEventIdExtGet()`

```php
v1HistoricalOddsEventIdExtGet($event_id, $ext, $schema_version): object
```

Download a per-event historical odds file

Resolves the requested per-event file for the authenticated client and streams the JSON or CSV payload back. The response body is the raw file content (not the manifest envelope); the API takes care of fetching the bytes from the underlying CDN so callers see a single HTTP call per file.  The `sha256` of the bytes-at-rest is exposed as a strong `ETag`. Clients can short-circuit with `If-None-Match` to receive `304 Not Modified`. `Range` requests are forwarded upstream and `206 Partial Content` responses are relayed unchanged — useful for resuming multi-MB CSV downloads.

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


$apiInstance = new Odditt\ApiClient\Api\HistoricalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 56; // int | Canonical event identifier.
$ext = 'ext_example'; // string | File format. `json` returns `application/json`; `csv` returns `text/csv`.
$schema_version = 'v1'; // string | Payload schema version. Defaults to `v1` when omitted.

try {
    $result = $apiInstance->v1HistoricalOddsEventIdExtGet($event_id, $ext, $schema_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->v1HistoricalOddsEventIdExtGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| Canonical event identifier. | |
| **ext** | **string**| File format. &#x60;json&#x60; returns &#x60;application/json&#x60;; &#x60;csv&#x60; returns &#x60;text/csv&#x60;. | |
| **schema_version** | **string**| Payload schema version. Defaults to &#x60;v1&#x60; when omitted. | [optional] [default to &#39;v1&#39;] |

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
