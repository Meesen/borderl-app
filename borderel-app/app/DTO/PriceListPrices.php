<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class PriceListPrices extends Data {
    /**
     * @var PriceListPrice[]
     */
    public array $prices;
    /**
     * @var int[]
     */
    public array $seatRankIds;

    public function __construct(
        array $prices,
        array $seatRankIds,
    ) {
        $this->prices = $prices;
        $this->seatRankIds = $seatRankIds;
    }
}