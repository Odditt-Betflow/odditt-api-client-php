# Odditt\ApiClient\AuthenticationApi



All URIs are relative to https://api.odditt.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AuthLoginPost()**](AuthenticationApi.md#v1AuthLoginPost) | **POST** /v1/auth/login | Login with API key |
| [**v1AuthRefreshPost()**](AuthenticationApi.md#v1AuthRefreshPost) | **POST** /v1/auth/refresh | Refresh tokens |
| [**v1OauthLoginPost()**](AuthenticationApi.md#v1OauthLoginPost) | **POST** /v1/oauth/login | OAuth login (client credentials) |
| [**v1OauthRefreshPost()**](AuthenticationApi.md#v1OauthRefreshPost) | **POST** /v1/oauth/refresh | OAuth refresh |


## `v1AuthLoginPost()`

```php
v1AuthLoginPost($x_api_key): \Odditt\ApiClient\Model\AuthTokenPair
```

Login with API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Odditt\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string

try {
    $result = $apiInstance->v1AuthLoginPost($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1AuthLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |

### Return type

[**\Odditt\ApiClient\Model\AuthTokenPair**](../Model/AuthTokenPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AuthRefreshPost()`

```php
v1AuthRefreshPost($auth_refresh_request): \Odditt\ApiClient\Model\AuthTokenPair
```

Refresh tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Odditt\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_refresh_request = new \Odditt\ApiClient\Model\AuthRefreshRequest(); // \Odditt\ApiClient\Model\AuthRefreshRequest

try {
    $result = $apiInstance->v1AuthRefreshPost($auth_refresh_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1AuthRefreshPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_refresh_request** | [**\Odditt\ApiClient\Model\AuthRefreshRequest**](../Model/AuthRefreshRequest.md)|  | |

### Return type

[**\Odditt\ApiClient\Model\AuthTokenPair**](../Model/AuthTokenPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OauthLoginPost()`

```php
v1OauthLoginPost($auth_o_auth_login_request): \Odditt\ApiClient\Model\AuthTokenPair
```

OAuth login (client credentials)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Odditt\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_o_auth_login_request = new \Odditt\ApiClient\Model\AuthOAuthLoginRequest(); // \Odditt\ApiClient\Model\AuthOAuthLoginRequest

try {
    $result = $apiInstance->v1OauthLoginPost($auth_o_auth_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1OauthLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_o_auth_login_request** | [**\Odditt\ApiClient\Model\AuthOAuthLoginRequest**](../Model/AuthOAuthLoginRequest.md)|  | |

### Return type

[**\Odditt\ApiClient\Model\AuthTokenPair**](../Model/AuthTokenPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1OauthRefreshPost()`

```php
v1OauthRefreshPost($auth_refresh_request): \Odditt\ApiClient\Model\AuthTokenPair
```

OAuth refresh

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Odditt\ApiClient\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_refresh_request = new \Odditt\ApiClient\Model\AuthRefreshRequest(); // \Odditt\ApiClient\Model\AuthRefreshRequest

try {
    $result = $apiInstance->v1OauthRefreshPost($auth_refresh_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1OauthRefreshPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_refresh_request** | [**\Odditt\ApiClient\Model\AuthRefreshRequest**](../Model/AuthRefreshRequest.md)|  | |

### Return type

[**\Odditt\ApiClient\Model\AuthTokenPair**](../Model/AuthTokenPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
