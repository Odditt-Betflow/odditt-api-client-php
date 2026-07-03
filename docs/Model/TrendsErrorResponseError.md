# TrendsErrorResponseError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Machine-readable error code. Possible values:   * &#x60;BAD_REQUEST&#x60; — malformed request, invalid path/query parameter, or JSON type mismatch in the body. Returned with HTTP 400.   * &#x60;VALIDATION_ERROR&#x60; — one or more request fields failed validation rules; the message names each offending field. Returned with HTTP 422 (Unprocessable Entity).   * &#x60;AMBIGUOUS_LOOKUP&#x60; — a slug identifier matched more than one record; qualify it (e.g. &#x60;country/league&#x60;) and retry.   * &#x60;UNAUTHORIZED&#x60; — missing or invalid credentials.   * &#x60;FORBIDDEN&#x60; — authenticated but not permitted to access this resource.   * &#x60;NOT_FOUND&#x60; — resource does not exist.   * &#x60;RATE_LIMIT_EXCEEDED&#x60; — too many requests.   * &#x60;INTERNAL_ERROR&#x60; — unexpected server error. |
**message** | **string** | Human-readable explanation of the error. For &#x60;VALIDATION_ERROR&#x60; responses, names the offending field(s) and the rule that failed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
