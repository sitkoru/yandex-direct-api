<?php

namespace directapi\services\bids\enum;


use directapi\components\Enum;

class BidFieldEnum extends Enum
{
    const KeywordId = 'KeywordId';
    const AdGroupId = 'AdGroupId';
    const CampaignId = 'CampaignId';
    const Bid = 'Bid';
    const ContextBid = 'ContextBid';
    const StrategyPriority = 'StrategyPriority';
    const CompetitorsBids = 'CompetitorsBids';
    const SearchPrices = 'SearchPrices';
    const ContextCoverage = 'ContextCoverage';
    const MinSearchPrice = 'MinSearchPrice';
    const CurrentSearchPrice = 'CurrentSearchPrice';
    const AuctionBids = 'AuctionBids';
}