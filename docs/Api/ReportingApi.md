# Odditt\ApiClient\ReportingApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AffiliatesLinksClicksGet()**](ReportingApi.md#v1AffiliatesLinksClicksGet) | **GET** /v1/affiliates/links/clicks | Impression/click rollups |
| [**v1AffiliatesLinksInventorySummaryGet()**](ReportingApi.md#v1AffiliatesLinksInventorySummaryGet) | **GET** /v1/affiliates/links/inventory-summary | Inventory counts |


## `v1AffiliatesLinksClicksGet()`

```php
v1AffiliatesLinksClicksGet($start_date, $end_date, $operator_id, $country_code, $subnational_region_code, $offer_campaign, $offer_label): object
```

Impression/click rollups

Per-link, per-day impression and click counts for the authenticated client.

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


$apiInstance = new Odditt\ApiClient\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$operator_id = 56; // int
$country_code = 'country_code_example'; // string
$subnational_region_code = 'subnational_region_code_example'; // string
$offer_campaign = 'offer_campaign_example'; // string
$offer_label = 'offer_label_example'; // string

try {
    $result = $apiInstance->v1AffiliatesLinksClicksGet($start_date, $end_date, $operator_id, $country_code, $subnational_region_code, $offer_campaign, $offer_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->v1AffiliatesLinksClicksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**|  | |
| **end_date** | **\DateTime**|  | |
| **operator_id** | **int**|  | [optional] |
| **country_code** | **string**|  | [optional] |
| **subnational_region_code** | **string**|  | [optional] |
| **offer_campaign** | **string**|  | [optional] |
| **offer_label** | **string**|  | [optional] |

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

## `v1AffiliatesLinksInventorySummaryGet()`

```php
v1AffiliatesLinksInventorySummaryGet($group_by): object
```

Inventory counts

Active/inactive link counts grouped by the requested dimension.

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


$apiInstance = new Odditt\ApiClient\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_by = 'operator'; // string

try {
    $result = $apiInstance->v1AffiliatesLinksInventorySummaryGet($group_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->v1AffiliatesLinksInventorySummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_by** | **string**|  | [optional] [default to &#39;operator&#39;] |

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
