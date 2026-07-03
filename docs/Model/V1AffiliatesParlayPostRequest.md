# V1AffiliatesParlayPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | ISO 3166-1 alpha-2 country code. | [optional] [default to 'US']
**event_betting_market_position_ids** | **int[]** | The event betting market positions that make up the parlay legs. |
**hide_offers_links** | **bool** | When true, offer metadata is returned without the deep-link URLs. | [optional]
**odds_format** | **string** | Odds display format. Defaults per product_mode (dfs→multiplier, prediction_market→percent, else american). | [optional]
**offer_campaign** | **string** | Optional campaign filter. Renders only offers tagged with this campaign. | [optional]
**operator_ids** | **int[]** | Optional list of operator IDs to gate which operators appear in the cart. | [optional]
**operator_keys** | **string[]** | Optional operator external keys (e.g. &#39;draftkings&#39;). Resolved IDs are merged with operator_ids. | [optional]
**product_mode** | **string** | Display mode. dfs rewrites leg stat lines to MORE/LESS. | [optional]
**subnational_region_code** | **string** | ISO 3166-2 subnational region code (used for offer/deeplink resolution). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
