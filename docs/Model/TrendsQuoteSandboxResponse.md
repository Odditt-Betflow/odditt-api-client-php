# TrendsQuoteSandboxResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**american_odds_value** | **string** | Parlay only. Null when uncombinable. | [optional]
**button_payload** | **string** | Synthetic bet-slip identifier (prefix &#39;FD-MOCK-&#39;). Null when the result is invalid or the parlay is uncombinable. | [optional]
**decimal_odds_value** | **float** |  | [optional]
**event_betting_market_position_maps** | **object[]** |  |
**flow_id** | **int** |  |
**flow_type** | **string** |  |
**fractional_odds_value** | **string** |  | [optional]
**is_combinable** | **bool** | Parlay only. False if any leg failed or the parlay-level uncombinable roll fired. | [optional]
**odds_implied_probability** | **float** |  | [optional]
**parlay_failure_reason** | **string** |  | [optional]
**payout_multiplier** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
