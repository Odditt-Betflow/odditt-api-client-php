# V1EventsUpcomingEventsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_date** | **\DateTime** | Filter by event date (YYYY-MM-DD). Defaults to today (UTC). | [optional]
**league_id** | **int** |  | [optional]
**league_key** | **string** | League external key (e.g. &#39;nba&#39;, &#39;united-states.nba&#39;). Alternative to league_id. If both are provided, league_id takes precedence. | [optional]
**page** | **int** | Page number for pagination | [optional] [default to 1]
**page_size** | **int** | Number of events per page | [optional] [default to 100]
**sport_id** | **int** |  | [optional]
**sport_key** | **string** | Sport external key (e.g. &#39;american-football&#39;). Alternative to sport_id. If both are provided, sport_id takes precedence. | [optional]
**timezone** | **string** | IANA timezone for date interpretation (e.g. &#39;UTC&#39;, &#39;America/New_York&#39;, &#39;Europe/London&#39;) | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
