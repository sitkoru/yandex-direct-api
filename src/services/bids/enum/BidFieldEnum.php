<?php

namespace directapi\services\bids\enum;


use directapi\components\Enum;

class BidFieldEnum extends Enum
{
    const KEYWORD_ID = 'KeywordId';
    const AD_GROUP_ID = 'AdGroupId';
    const CAMPAIGN_ID = 'CampaignId';
    const BID = 'Bid';
    const CONTEXT_BID = 'ContextBid';
    const STRATEGY_PRIORITY = 'StrategyPriority';
    const COMPETITORS_BIDS = 'CompetitorsBids';
    const SEARCH_PRICES = 'SearchPrices';
    const CONTEXT_COVERAGE = 'ContextCoverage';
    const MIN_SEARCH_PRICE = 'MinSearchPrice';
    const CURRENT_SEARCH_PRICE = 'CurrentSearchPrice';
    const AUCTION_BIDS = 'AuctionBids';
}