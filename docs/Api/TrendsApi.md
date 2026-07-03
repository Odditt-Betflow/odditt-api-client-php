# Odditt\ApiClient\TrendsApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TrendsByBettingMarketPositionPost()**](TrendsApi.md#v1TrendsByBettingMarketPositionPost) | **POST** /v1/trends/by-betting-market-position | Get flows by betting market position IDs |
| [**v1TrendsFlowGraphDataFactFlowIdGet()**](TrendsApi.md#v1TrendsFlowGraphDataFactFlowIdGet) | **GET** /v1/trends/flow-graph-data/{fact_flow_id} | Get fact flow graph data |
| [**v1TrendsFlowTooltipFlowTypeFlowIdGet()**](TrendsApi.md#v1TrendsFlowTooltipFlowTypeFlowIdGet) | **GET** /v1/trends/flow-tooltip/{flow_type}/{flow_id} | Get flow tooltip payload |
| [**v1TrendsFlowsByIdPost()**](TrendsApi.md#v1TrendsFlowsByIdPost) | **POST** /v1/trends/flows-by-id | Get flows by ids |
| [**v1TrendsFlowsPost()**](TrendsApi.md#v1TrendsFlowsPost) | **POST** /v1/trends/flows | Get flows (paginated) |
| [**v1TrendsFlowsQuotePost()**](TrendsApi.md#v1TrendsFlowsQuotePost) | **POST** /v1/trends/flows/quote | Quote a batch of flows against the caller&#39;s configured check endpoint |
| [**v1TrendsFlowsQuoteSandboxPost()**](TrendsApi.md#v1TrendsFlowsQuoteSandboxPost) | **POST** /v1/trends/flows/quote-sandbox | Mock operator pricing endpoint — for sandbox / development use |
| [**v1TrendsLeaguesWithAvailableFlowsGet()**](TrendsApi.md#v1TrendsLeaguesWithAvailableFlowsGet) | **GET** /v1/trends/leagues-with-available-flows | Get leagues with available flows |
| [**v1TrendsMixedFlowsPost()**](TrendsApi.md#v1TrendsMixedFlowsPost) | **POST** /v1/trends/mixed-flows | Get mixed flows (paginated) |
| [**v1TrendsWidgetEventPost()**](TrendsApi.md#v1TrendsWidgetEventPost) | **POST** /v1/trends/widget/event | Submit a widget telemetry event |


## `v1TrendsByBettingMarketPositionPost()`

```php
v1TrendsByBettingMarketPositionPost($v1_trends_by_betting_market_position_post_request): object
```

Get flows by betting market position IDs

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


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_trends_by_betting_market_position_post_request = {"event_betting_market_position_ids":[1,2,3]}; // \Odditt\ApiClient\Model\V1TrendsByBettingMarketPositionPostRequest

try {
    $result = $apiInstance->v1TrendsByBettingMarketPositionPost($v1_trends_by_betting_market_position_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsByBettingMarketPositionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_trends_by_betting_market_position_post_request** | [**\Odditt\ApiClient\Model\V1TrendsByBettingMarketPositionPostRequest**](../Model/V1TrendsByBettingMarketPositionPostRequest.md)|  | |

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

## `v1TrendsFlowGraphDataFactFlowIdGet()`

```php
v1TrendsFlowGraphDataFactFlowIdGet($fact_flow_id): object
```

Get fact flow graph data

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


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fact_flow_id = 56; // int | The fact flow ID to get graph data for

try {
    $result = $apiInstance->v1TrendsFlowGraphDataFactFlowIdGet($fact_flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsFlowGraphDataFactFlowIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fact_flow_id** | **int**| The fact flow ID to get graph data for | |

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

## `v1TrendsFlowTooltipFlowTypeFlowIdGet()`

```php
v1TrendsFlowTooltipFlowTypeFlowIdGet($flow_type, $flow_id): object
```

Get flow tooltip payload

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


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_type = 'flow_type_example'; // string | Type of flow (fact or fun)
$flow_id = 56; // int | The flow ID to get tooltip data for

try {
    $result = $apiInstance->v1TrendsFlowTooltipFlowTypeFlowIdGet($flow_type, $flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsFlowTooltipFlowTypeFlowIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_type** | **string**| Type of flow (fact or fun) | |
| **flow_id** | **int**| The flow ID to get tooltip data for | |

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

## `v1TrendsFlowsByIdPost()`

```php
v1TrendsFlowsByIdPost($v1_trends_flows_by_id_post_request): object
```

Get flows by ids

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


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_trends_flows_by_id_post_request = new \Odditt\ApiClient\Model\V1TrendsFlowsByIdPostRequest(); // \Odditt\ApiClient\Model\V1TrendsFlowsByIdPostRequest

try {
    $result = $apiInstance->v1TrendsFlowsByIdPost($v1_trends_flows_by_id_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsFlowsByIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_trends_flows_by_id_post_request** | [**\Odditt\ApiClient\Model\V1TrendsFlowsByIdPostRequest**](../Model/V1TrendsFlowsByIdPostRequest.md)|  | |

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

## `v1TrendsFlowsPost()`

```php
v1TrendsFlowsPost($v1_trends_flows_post_request): object
```

Get flows (paginated)

Same parameters as mixed-flows but returns non-mixed (single-type) flows. Uses the same underlying request model.

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


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_trends_flows_post_request = {"bet_type":"singles","fact_flow_type":"base","flow_type":"fact","league_id":7,"page":1,"page_size":20,"sport_id":1,"starting_soon":true}; // \Odditt\ApiClient\Model\V1TrendsFlowsPostRequest

try {
    $result = $apiInstance->v1TrendsFlowsPost($v1_trends_flows_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsFlowsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_trends_flows_post_request** | [**\Odditt\ApiClient\Model\V1TrendsFlowsPostRequest**](../Model/V1TrendsFlowsPostRequest.md)|  | |

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

## `v1TrendsFlowsQuotePost()`

```php
v1TrendsFlowsQuotePost($trends_quote_flow_item): \Odditt\ApiClient\Model\TrendsQuoteItemResult[]
```

Quote a batch of flows against the caller's configured check endpoint

Accepts a JSON array of 1..50 flow specifications and, for each one, forwards a hydrated payload to the URL the caller has registered under `/v1/account/check-endpoint`. Outbound calls run in parallel; the response is a JSON array with one entry per input item, in input order. Per-item failures are encoded in each entry's `status` (and `body`) so one bad operator response does not poison the others. Batch-level failures map to HTTP 4xx without an array body — 412 when the caller has not configured a check endpoint, 422 on validation failure.

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


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trends_quote_flow_item = array(new \Odditt\ApiClient\Model\TrendsQuoteFlowItem()); // \Odditt\ApiClient\Model\TrendsQuoteFlowItem[]

try {
    $result = $apiInstance->v1TrendsFlowsQuotePost($trends_quote_flow_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsFlowsQuotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trends_quote_flow_item** | [**\Odditt\ApiClient\Model\TrendsQuoteFlowItem[]**](../Model/TrendsQuoteFlowItem.md)|  | |

### Return type

[**\Odditt\ApiClient\Model\TrendsQuoteItemResult[]**](../Model/TrendsQuoteItemResult.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TrendsFlowsQuoteSandboxPost()`

```php
v1TrendsFlowsQuoteSandboxPost($trends_quote_sandbox_request): \Odditt\ApiClient\Model\TrendsQuoteSandboxResponse
```

Mock operator pricing endpoint — for sandbox / development use

Drop-in stand-in for a real operator's pricing endpoint. Accepts ONE hydrated pricing payload (the exact shape that /v1/trends/flows/quote POSTs to a configured check endpoint) and returns synthetic pricing- response data with deterministic `button_payload` values and randomly- injected failure modes (~15% rate). Integrators wire this URL into /v1/account/check-endpoint as `url` to round-trip the widget call entirely on platform infrastructure without a real operator. Not for production traffic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trends_quote_sandbox_request = new \Odditt\ApiClient\Model\TrendsQuoteSandboxRequest(); // \Odditt\ApiClient\Model\TrendsQuoteSandboxRequest

try {
    $result = $apiInstance->v1TrendsFlowsQuoteSandboxPost($trends_quote_sandbox_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsFlowsQuoteSandboxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trends_quote_sandbox_request** | [**\Odditt\ApiClient\Model\TrendsQuoteSandboxRequest**](../Model/TrendsQuoteSandboxRequest.md)|  | |

### Return type

[**\Odditt\ApiClient\Model\TrendsQuoteSandboxResponse**](../Model/TrendsQuoteSandboxResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TrendsLeaguesWithAvailableFlowsGet()`

```php
v1TrendsLeaguesWithAvailableFlowsGet($sport_id, $sport_key): object
```

Get leagues with available flows

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


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sport_id = 56; // int
$sport_key = 'sport_key_example'; // string | Sport external key (e.g. 'american-football'). Format: {sport_key}. Alternative to sport_id. If both are provided, sport_id takes precedence.

try {
    $result = $apiInstance->v1TrendsLeaguesWithAvailableFlowsGet($sport_id, $sport_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsLeaguesWithAvailableFlowsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sport_id** | **int**|  | [optional] |
| **sport_key** | **string**| Sport external key (e.g. &#39;american-football&#39;). Format: {sport_key}. Alternative to sport_id. If both are provided, sport_id takes precedence. | [optional] |

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

## `v1TrendsMixedFlowsPost()`

```php
v1TrendsMixedFlowsPost($v1_trends_flows_post_request): object
```

Get mixed flows (paginated)

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


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1_trends_flows_post_request = {"bet_type":"singles","fact_flow_type":"base","flow_type":"fact","league_id":7,"page":1,"page_size":20,"sport_id":1,"starting_soon":true}; // \Odditt\ApiClient\Model\V1TrendsFlowsPostRequest

try {
    $result = $apiInstance->v1TrendsMixedFlowsPost($v1_trends_flows_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsMixedFlowsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v1_trends_flows_post_request** | [**\Odditt\ApiClient\Model\V1TrendsFlowsPostRequest**](../Model/V1TrendsFlowsPostRequest.md)|  | |

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

## `v1TrendsWidgetEventPost()`

```php
v1TrendsWidgetEventPost($trends_widget_event_request): \Odditt\ApiClient\Model\TrendsWidgetEventResponse
```

Submit a widget telemetry event

Records a single client-side widget interaction (impression, click, dwell, or cart action) for analytics. Accepts a typed envelope `{event_type, mode, event_body}`: `event_type` is a closed enum naming the interaction, optional `mode` describes the widget mode, and `event_body` is an arbitrary JSON object whose shape depends on the event. Available only to widget API keys. Fire-and-forget: returns `202 Accepted` once the event is queued; the response does not guarantee durable storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Odditt\ApiClient\Api\TrendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trends_widget_event_request = new \Odditt\ApiClient\Model\TrendsWidgetEventRequest(); // \Odditt\ApiClient\Model\TrendsWidgetEventRequest

try {
    $result = $apiInstance->v1TrendsWidgetEventPost($trends_widget_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendsApi->v1TrendsWidgetEventPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trends_widget_event_request** | [**\Odditt\ApiClient\Model\TrendsWidgetEventRequest**](../Model/TrendsWidgetEventRequest.md)|  | |

### Return type

[**\Odditt\ApiClient\Model\TrendsWidgetEventResponse**](../Model/TrendsWidgetEventResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
