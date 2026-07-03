# Odditt\ApiClient\AccountApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AccountApiKeysGet()**](AccountApi.md#v1AccountApiKeysGet) | **GET** /v1/account/api-keys | List own API keys |
| [**v1AccountApiKeysKeyCodeDelete()**](AccountApi.md#v1AccountApiKeysKeyCodeDelete) | **DELETE** /v1/account/api-keys/{key_code} | Deactivate an API key |
| [**v1AccountApiKeysPost()**](AccountApi.md#v1AccountApiKeysPost) | **POST** /v1/account/api-keys | Create a new API key |
| [**v1AccountCheckEndpointDelete()**](AccountApi.md#v1AccountCheckEndpointDelete) | **DELETE** /v1/account/check-endpoint | Delete the check endpoint |
| [**v1AccountCheckEndpointGet()**](AccountApi.md#v1AccountCheckEndpointGet) | **GET** /v1/account/check-endpoint | Get the configured check endpoint |
| [**v1AccountCheckEndpointPost()**](AccountApi.md#v1AccountCheckEndpointPost) | **POST** /v1/account/check-endpoint | Set the check endpoint (upsert) |
| [**v1AccountConfigGet()**](AccountApi.md#v1AccountConfigGet) | **GET** /v1/account/config | Get own client configuration |
| [**v1AccountSecretPost()**](AccountApi.md#v1AccountSecretPost) | **POST** /v1/account/secret | Create a new client secret |
| [**v1AccountSecretsGet()**](AccountApi.md#v1AccountSecretsGet) | **GET** /v1/account/secrets | List own client secrets |
| [**v1AccountSecretsSecretCodeDelete()**](AccountApi.md#v1AccountSecretsSecretCodeDelete) | **DELETE** /v1/account/secrets/{secret_code} | Delete a client secret |
| [**v1AccountUsageGet()**](AccountApi.md#v1AccountUsageGet) | **GET** /v1/account/usage | Get own usage stats |


## `v1AccountApiKeysGet()`

```php
v1AccountApiKeysGet(): \Odditt\ApiClient\Model\AuthListAPIKeysResponse
```

List own API keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AccountApiKeysGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountApiKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Odditt\ApiClient\Model\AuthListAPIKeysResponse**](../Model/AuthListAPIKeysResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountApiKeysKeyCodeDelete()`

```php
v1AccountApiKeysKeyCodeDelete($key_code)
```

Deactivate an API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_code = 'key_code_example'; // string

try {
    $apiInstance->v1AccountApiKeysKeyCodeDelete($key_code);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountApiKeysKeyCodeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_code** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountApiKeysPost()`

```php
v1AccountApiKeysPost($auth_create_api_key_request): \Odditt\ApiClient\Model\AuthCreateAPIKeyResponse
```

Create a new API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_create_api_key_request = new \Odditt\ApiClient\Model\AuthCreateAPIKeyRequest(); // \Odditt\ApiClient\Model\AuthCreateAPIKeyRequest

try {
    $result = $apiInstance->v1AccountApiKeysPost($auth_create_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountApiKeysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_create_api_key_request** | [**\Odditt\ApiClient\Model\AuthCreateAPIKeyRequest**](../Model/AuthCreateAPIKeyRequest.md)|  | |

### Return type

[**\Odditt\ApiClient\Model\AuthCreateAPIKeyResponse**](../Model/AuthCreateAPIKeyResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountCheckEndpointDelete()`

```php
v1AccountCheckEndpointDelete()
```

Delete the check endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->v1AccountCheckEndpointDelete();
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountCheckEndpointDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountCheckEndpointGet()`

```php
v1AccountCheckEndpointGet(): \Odditt\ApiClient\Model\AuthCheckEndpointResponse
```

Get the configured check endpoint

Returns the URL, method and bearer token preview for the check endpoint used by flow quoting. The full bearer token is never returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AccountCheckEndpointGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountCheckEndpointGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Odditt\ApiClient\Model\AuthCheckEndpointResponse**](../Model/AuthCheckEndpointResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountCheckEndpointPost()`

```php
v1AccountCheckEndpointPost($auth_set_check_endpoint_request): \Odditt\ApiClient\Model\AuthCheckEndpointResponse
```

Set the check endpoint (upsert)

Stores or updates the URL, method and bearer token used to quote flows against the client's own service. A single configuration exists per client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_set_check_endpoint_request = new \Odditt\ApiClient\Model\AuthSetCheckEndpointRequest(); // \Odditt\ApiClient\Model\AuthSetCheckEndpointRequest

try {
    $result = $apiInstance->v1AccountCheckEndpointPost($auth_set_check_endpoint_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountCheckEndpointPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_set_check_endpoint_request** | [**\Odditt\ApiClient\Model\AuthSetCheckEndpointRequest**](../Model/AuthSetCheckEndpointRequest.md)|  | |

### Return type

[**\Odditt\ApiClient\Model\AuthCheckEndpointResponse**](../Model/AuthCheckEndpointResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountConfigGet()`

```php
v1AccountConfigGet()
```

Get own client configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->v1AccountConfigGet();
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountSecretPost()`

```php
v1AccountSecretPost(): \Odditt\ApiClient\Model\AuthCreateSecretResponse
```

Create a new client secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AccountSecretPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountSecretPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Odditt\ApiClient\Model\AuthCreateSecretResponse**](../Model/AuthCreateSecretResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountSecretsGet()`

```php
v1AccountSecretsGet(): \Odditt\ApiClient\Model\AuthListSecretsResponse
```

List own client secrets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AccountSecretsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountSecretsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Odditt\ApiClient\Model\AuthListSecretsResponse**](../Model/AuthListSecretsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountSecretsSecretCodeDelete()`

```php
v1AccountSecretsSecretCodeDelete($secret_code)
```

Delete a client secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secret_code = 'secret_code_example'; // string

try {
    $apiInstance->v1AccountSecretsSecretCodeDelete($secret_code);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountSecretsSecretCodeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **secret_code** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AccountUsageGet()`

```php
v1AccountUsageGet($start_date, $end_date)
```

Get own usage stats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Odditt\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Odditt\ApiClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $apiInstance->v1AccountUsageGet($start_date, $end_date);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->v1AccountUsageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
