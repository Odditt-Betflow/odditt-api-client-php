# Odditt\ApiClient\ReferencesApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1ReferencesBettingMarketCategoriesGet()**](ReferencesApi.md#v1ReferencesBettingMarketCategoriesGet) | **GET** /v1/references/betting-market-categories | Get betting market categories |
| [**v1ReferencesBettingMarketPositionsGet()**](ReferencesApi.md#v1ReferencesBettingMarketPositionsGet) | **GET** /v1/references/betting-market-positions | Get all betting market positions |
| [**v1ReferencesBettingMarketsGet()**](ReferencesApi.md#v1ReferencesBettingMarketsGet) | **GET** /v1/references/betting-markets | Get betting markets (paginated) |
| [**v1ReferencesCountriesGet()**](ReferencesApi.md#v1ReferencesCountriesGet) | **GET** /v1/references/countries | Get countries (paginated) |
| [**v1ReferencesEventPeriodsGet()**](ReferencesApi.md#v1ReferencesEventPeriodsGet) | **GET** /v1/references/event-periods | Get event periods |
| [**v1ReferencesLeaguesGet()**](ReferencesApi.md#v1ReferencesLeaguesGet) | **GET** /v1/references/leagues | Get leagues (paginated) |
| [**v1ReferencesOddsFormatGet()**](ReferencesApi.md#v1ReferencesOddsFormatGet) | **GET** /v1/references/odds-format | Get odds formats (paginated) |
| [**v1ReferencesOperatorsGet()**](ReferencesApi.md#v1ReferencesOperatorsGet) | **GET** /v1/references/operators | Get operators (paginated) |
| [**v1ReferencesPlayersGet()**](ReferencesApi.md#v1ReferencesPlayersGet) | **GET** /v1/references/players | Get players (paginated) |
| [**v1ReferencesSportsGet()**](ReferencesApi.md#v1ReferencesSportsGet) | **GET** /v1/references/sports | Get sports (paginated) |
| [**v1ReferencesSubnationalRegionsGet()**](ReferencesApi.md#v1ReferencesSubnationalRegionsGet) | **GET** /v1/references/subnational-regions | Get subnational regions (paginated) |
| [**v1ReferencesTagDimensionsGet()**](ReferencesApi.md#v1ReferencesTagDimensionsGet) | **GET** /v1/references/tag-dimensions | Get tag dimensions |
| [**v1ReferencesTagTypesSearchGet()**](ReferencesApi.md#v1ReferencesTagTypesSearchGet) | **GET** /v1/references/tag-types/search | Search tag types |
| [**v1ReferencesTagTypesTagTypeIdChildrenGet()**](ReferencesApi.md#v1ReferencesTagTypesTagTypeIdChildrenGet) | **GET** /v1/references/tag-types/{tag_type_id}/children | Get child tag types |
| [**v1ReferencesTeamsGet()**](ReferencesApi.md#v1ReferencesTeamsGet) | **GET** /v1/references/teams | Get teams (paginated) |


## `v1ReferencesBettingMarketCategoriesGet()`

```php
v1ReferencesBettingMarketCategoriesGet($sport_id, $sport_key): object
```

Get betting market categories

Returns available betting market categories, optionally filtered by sport.

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sport_id = 56; // int
$sport_key = 'sport_key_example'; // string | Sport external key (e.g. 'american-football'). Alternative to sport_id. If both are provided, sport_id takes precedence.

try {
    $result = $apiInstance->v1ReferencesBettingMarketCategoriesGet($sport_id, $sport_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesBettingMarketCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sport_id** | **int**|  | [optional] |
| **sport_key** | **string**| Sport external key (e.g. &#39;american-football&#39;). Alternative to sport_id. If both are provided, sport_id takes precedence. | [optional] |

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

## `v1ReferencesBettingMarketPositionsGet()`

```php
v1ReferencesBettingMarketPositionsGet(): object
```

Get all betting market positions

Returns all available betting market positions.

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1ReferencesBettingMarketPositionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesBettingMarketPositionsGet: ', $e->getMessage(), PHP_EOL;
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

## `v1ReferencesBettingMarketsGet()`

```php
v1ReferencesBettingMarketsGet($sport_id, $sport_key, $search, $page, $page_size): object
```

Get betting markets (paginated)

Returns a paginated list of betting markets with optional sport filter and text search.

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sport_id = 56; // int
$sport_key = 'sport_key_example'; // string | Sport external key (e.g. 'american-football'). Alternative to sport_id. If both are provided, sport_id takes precedence.
$search = 'search_example'; // string | Text search filter for betting market names
$page = 1; // int | Page number for pagination
$page_size = 100; // int | Number of results per page

try {
    $result = $apiInstance->v1ReferencesBettingMarketsGet($sport_id, $sport_key, $search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesBettingMarketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sport_id** | **int**|  | [optional] |
| **sport_key** | **string**| Sport external key (e.g. &#39;american-football&#39;). Alternative to sport_id. If both are provided, sport_id takes precedence. | [optional] |
| **search** | **string**| Text search filter for betting market names | [optional] |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **page_size** | **int**| Number of results per page | [optional] [default to 100] |

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

## `v1ReferencesCountriesGet()`

```php
v1ReferencesCountriesGet($search, $page, $page_size): \Odditt\ApiClient\Model\TrendsPaginatedResponse
```

Get countries (paginated)

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search by country name
$page = 1; // int
$page_size = 20; // int

try {
    $result = $apiInstance->v1ReferencesCountriesGet($search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search by country name | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Odditt\ApiClient\Model\TrendsPaginatedResponse**](../Model/TrendsPaginatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ReferencesEventPeriodsGet()`

```php
v1ReferencesEventPeriodsGet($sport_id, $sport_key): object
```

Get event periods

Returns available event periods, optionally filtered by sport.

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sport_id = 56; // int
$sport_key = 'sport_key_example'; // string | Sport external key (e.g. 'american-football'). Alternative to sport_id. If both are provided, sport_id takes precedence.

try {
    $result = $apiInstance->v1ReferencesEventPeriodsGet($sport_id, $sport_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesEventPeriodsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sport_id** | **int**|  | [optional] |
| **sport_key** | **string**| Sport external key (e.g. &#39;american-football&#39;). Alternative to sport_id. If both are provided, sport_id takes precedence. | [optional] |

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

## `v1ReferencesLeaguesGet()`

```php
v1ReferencesLeaguesGet($country_id, $sport_id, $sport_key, $search, $is_popular, $page, $page_size, $search_mode): object
```

Get leagues (paginated)

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 56; // int
$sport_id = 56; // int
$sport_key = 'sport_key_example'; // string | Sport external key (e.g. 'american-football'). Format: {sport_key}. Alternative to sport_id. If both are provided, sport_id takes precedence.
$search = 'search_example'; // string
$is_popular = True; // bool
$page = 1; // int
$page_size = 20; // int
$search_mode = 'search_mode_example'; // string | Search mode (e.g. exact match vs partial). When omitted, uses default search behavior.

try {
    $result = $apiInstance->v1ReferencesLeaguesGet($country_id, $sport_id, $sport_key, $search, $is_popular, $page, $page_size, $search_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesLeaguesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**|  | [optional] |
| **sport_id** | **int**|  | [optional] |
| **sport_key** | **string**| Sport external key (e.g. &#39;american-football&#39;). Format: {sport_key}. Alternative to sport_id. If both are provided, sport_id takes precedence. | [optional] |
| **search** | **string**|  | [optional] |
| **is_popular** | **bool**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |
| **search_mode** | **string**| Search mode (e.g. exact match vs partial). When omitted, uses default search behavior. | [optional] |

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

## `v1ReferencesOddsFormatGet()`

```php
v1ReferencesOddsFormatGet($search, $page, $page_size): \Odditt\ApiClient\Model\TrendsPaginatedResponse
```

Get odds formats (paginated)

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$page = 1; // int
$page_size = 20; // int

try {
    $result = $apiInstance->v1ReferencesOddsFormatGet($search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesOddsFormatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Odditt\ApiClient\Model\TrendsPaginatedResponse**](../Model/TrendsPaginatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ReferencesOperatorsGet()`

```php
v1ReferencesOperatorsGet($search, $page, $page_size): \Odditt\ApiClient\Model\TrendsPaginatedResponse
```

Get operators (paginated)

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search by operator display name
$page = 1; // int
$page_size = 20; // int

try {
    $result = $apiInstance->v1ReferencesOperatorsGet($search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesOperatorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search by operator display name | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Odditt\ApiClient\Model\TrendsPaginatedResponse**](../Model/TrendsPaginatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ReferencesPlayersGet()`

```php
v1ReferencesPlayersGet($team_id, $team_key, $search, $page, $page_size, $search_mode): object
```

Get players (paginated)

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 56; // int
$team_key = 'team_key_example'; // string | Team external key (e.g. 'new-england-patriots', 'nfl.new-england-patriots'). Format: {team_key} or {league_key}.{team_key}. Alternative to team_id. If both are provided, team_id takes precedence.
$search = 'search_example'; // string
$page = 1; // int
$page_size = 20; // int
$search_mode = 'search_mode_example'; // string | Search mode (e.g. exact match vs partial). When omitted, uses default search behavior.

try {
    $result = $apiInstance->v1ReferencesPlayersGet($team_id, $team_key, $search, $page, $page_size, $search_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesPlayersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**|  | [optional] |
| **team_key** | **string**| Team external key (e.g. &#39;new-england-patriots&#39;, &#39;nfl.new-england-patriots&#39;). Format: {team_key} or {league_key}.{team_key}. Alternative to team_id. If both are provided, team_id takes precedence. | [optional] |
| **search** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |
| **search_mode** | **string**| Search mode (e.g. exact match vs partial). When omitted, uses default search behavior. | [optional] |

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

## `v1ReferencesSportsGet()`

```php
v1ReferencesSportsGet($search, $page, $page_size): \Odditt\ApiClient\Model\TrendsPaginatedResponse
```

Get sports (paginated)

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$page = 1; // int
$page_size = 20; // int

try {
    $result = $apiInstance->v1ReferencesSportsGet($search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesSportsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Odditt\ApiClient\Model\TrendsPaginatedResponse**](../Model/TrendsPaginatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ReferencesSubnationalRegionsGet()`

```php
v1ReferencesSubnationalRegionsGet($country_id, $search, $page, $page_size): \Odditt\ApiClient\Model\TrendsPaginatedResponse
```

Get subnational regions (paginated)

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 56; // int | Country ID to filter subnational regions
$search = 'search_example'; // string | Search by subnational region name
$page = 1; // int
$page_size = 20; // int

try {
    $result = $apiInstance->v1ReferencesSubnationalRegionsGet($country_id, $search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesSubnationalRegionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**| Country ID to filter subnational regions | |
| **search** | **string**| Search by subnational region name | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Odditt\ApiClient\Model\TrendsPaginatedResponse**](../Model/TrendsPaginatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ReferencesTagDimensionsGet()`

```php
v1ReferencesTagDimensionsGet($flow_type): \Odditt\ApiClient\Model\V1ReferencesTagDimensionsGet200Response
```

Get tag dimensions

Returns the top-level tag dimension categories. Use these as entry points to explore the tag hierarchy. Optionally filter to dimensions relevant to a specific flow type.

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_type = 'flow_type_example'; // string | Filter by flow type eligibility.

try {
    $result = $apiInstance->v1ReferencesTagDimensionsGet($flow_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesTagDimensionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_type** | **string**| Filter by flow type eligibility. | [optional] |

### Return type

[**\Odditt\ApiClient\Model\V1ReferencesTagDimensionsGet200Response**](../Model/V1ReferencesTagDimensionsGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ReferencesTagTypesSearchGet()`

```php
v1ReferencesTagTypesSearchGet($search, $search_mode, $dimension, $flow_type, $terminal_only, $tag_level, $page, $page_size): \Odditt\ApiClient\Model\TrendsPaginatedResponse
```

Search tag types

Search across tag types by keyword. Returns paginated results with breadcrumb paths for disambiguation. Use terminal_only combined with flow_type to find only tags that are usable as filters for a specific flow type.

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$search_mode = 'search_mode_example'; // string | How the search term is matched. Defaults to 'starts_with'.
$dimension = 'dimension_example'; // string | Limit results to a specific dimension (e.g. 'event', 'metadata').
$flow_type = 'flow_type_example'; // string | Filter by flow type eligibility.
$terminal_only = false; // bool | When true, returns only terminal (filterable) tag types.
$tag_level = 56; // int | Restrict results to a specific hierarchy depth.
$page = 1; // int
$page_size = 20; // int

try {
    $result = $apiInstance->v1ReferencesTagTypesSearchGet($search, $search_mode, $dimension, $flow_type, $terminal_only, $tag_level, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesTagTypesSearchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **search_mode** | **string**| How the search term is matched. Defaults to &#39;starts_with&#39;. | [optional] |
| **dimension** | **string**| Limit results to a specific dimension (e.g. &#39;event&#39;, &#39;metadata&#39;). | [optional] |
| **flow_type** | **string**| Filter by flow type eligibility. | [optional] |
| **terminal_only** | **bool**| When true, returns only terminal (filterable) tag types. | [optional] [default to false] |
| **tag_level** | **int**| Restrict results to a specific hierarchy depth. | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Odditt\ApiClient\Model\TrendsPaginatedResponse**](../Model/TrendsPaginatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ReferencesTagTypesTagTypeIdChildrenGet()`

```php
v1ReferencesTagTypesTagTypeIdChildrenGet($tag_type_id, $include_values, $flow_type): \Odditt\ApiClient\Model\V1ReferencesTagTypesTagTypeIdChildrenGet200Response
```

Get child tag types

Returns the direct children of a given tag type, along with context about the parent (description and known values). Use this to navigate the tag hierarchy from dimensions down to individual filterable tags.

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_type_id = 56; // int | Parent tag type ID to drill into.
$include_values = false; // bool | When true, includes individual value-level leaf tags in the results. When false (default), value-level leaves are omitted — the parent's known_values field already enumerates them.
$flow_type = 'flow_type_example'; // string | Filter by flow type eligibility.

try {
    $result = $apiInstance->v1ReferencesTagTypesTagTypeIdChildrenGet($tag_type_id, $include_values, $flow_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesTagTypesTagTypeIdChildrenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_type_id** | **int**| Parent tag type ID to drill into. | |
| **include_values** | **bool**| When true, includes individual value-level leaf tags in the results. When false (default), value-level leaves are omitted — the parent&#39;s known_values field already enumerates them. | [optional] [default to false] |
| **flow_type** | **string**| Filter by flow type eligibility. | [optional] |

### Return type

[**\Odditt\ApiClient\Model\V1ReferencesTagTypesTagTypeIdChildrenGet200Response**](../Model/V1ReferencesTagTypesTagTypeIdChildrenGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ReferencesTeamsGet()`

```php
v1ReferencesTeamsGet($league_id, $league_key, $search, $page, $page_size, $search_mode, $start_date, $end_date): object
```

Get teams (paginated)

Returns a paginated list of teams. When neither `start_date` nor `end_date` is provided, only teams whose affiliation is currently active are returned. When either date is provided, the result is filtered to teams whose affiliation overlapped the requested window — useful for looking up teams that played in a league during a past season.

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


$apiInstance = new Odditt\ApiClient\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$league_id = 56; // int
$league_key = 'league_key_example'; // string | League external key (e.g. 'nba', 'united-states.nba'). Format: {league_key} or {country_key}.{league_key}. Alternative to league_id. If both are provided, league_id takes precedence.
$search = 'search_example'; // string
$page = 1; // int
$page_size = 20; // int
$search_mode = 'search_mode_example'; // string | Search mode (e.g. exact match vs partial). When omitted, uses default search behavior.
$start_date = 'start_date_example'; // string | Inclusive lower bound on the event/affiliation date, ISO format YYYY-MM-DD.
$end_date = 'end_date_example'; // string | Inclusive upper bound on the event/affiliation date, ISO format YYYY-MM-DD.

try {
    $result = $apiInstance->v1ReferencesTeamsGet($league_id, $league_key, $search, $page, $page_size, $search_mode, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->v1ReferencesTeamsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **league_id** | **int**|  | [optional] |
| **league_key** | **string**| League external key (e.g. &#39;nba&#39;, &#39;united-states.nba&#39;). Format: {league_key} or {country_key}.{league_key}. Alternative to league_id. If both are provided, league_id takes precedence. | [optional] |
| **search** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 20] |
| **search_mode** | **string**| Search mode (e.g. exact match vs partial). When omitted, uses default search behavior. | [optional] |
| **start_date** | **string**| Inclusive lower bound on the event/affiliation date, ISO format YYYY-MM-DD. | [optional] |
| **end_date** | **string**| Inclusive upper bound on the event/affiliation date, ISO format YYYY-MM-DD. | [optional] |

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
