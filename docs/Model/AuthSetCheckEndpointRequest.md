# AuthSetCheckEndpointRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_multiple** | **bool** | If true, the platform sends a single POST with a JSON array of all hydrated payloads. If false (default), one POST per flow is issued in parallel. | [optional] [default to false]
**auth_header_name** | **string** | HTTP header name used to carry the authentication credential. Defaults to &#39;Authorization&#39;. Common alternatives: &#39;X-API-Key&#39;, &#39;X-Auth&#39;. | [optional]
**auth_scheme** | **string** | Prefix placed before the token in the header value. Defaults to &#39;Bearer&#39; when &#39;auth_header_name&#39; is omitted. Set to an empty string for headers that take the raw value (e.g. &#39;X-API-Key&#39;). | [optional]
**auth_token** | **string** | Authentication credential. Stored server-side and never returned in any response. Sent as &#x60;&lt;auth_header_name&gt;: &lt;auth_scheme&gt; &lt;auth_token&gt;&#x60; (scheme omitted when empty). |
**method** | **string** | HTTP method used when calling the endpoint. |
**url** | **string** | Absolute URL of the check endpoint (https recommended). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
