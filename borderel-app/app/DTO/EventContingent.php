<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class EventContingent extends Data {
    /**
     * @var EventContingentLock[]
     */
    public array $locks;

    public function __construct(
        public int $id,
        public string $name,
        public int $amount,
        public ?int $eventId,
        public ?PriceListPrices $eventSpecificPrices,
        ?array $locks,
        public ?int $priceListId,
        public ?bool $withImportedBarCodes,
    )
    {
        $this->locks = $locks;
    }
}