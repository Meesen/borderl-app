<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class EventPricesPriceType extends Data{

    /**
     * @var EventPricesSalesChannel[]
     */
    public array $salesChannels;

    public function __construct(
        public int $priceTypeId,
        array $salesChannels,
        public int $ticketTypePriceId,
    )
    {
        $this->salesChannels = $salesChannels;
    }
}