<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class Event extends Data {
    /**
     * @var EventContingentAvailability[]
     */
    public array $availability;

    /**
     * @var EventContingent[]
     */
    public array $contingents;

    /**
     * @var EventPrices[]
     */
    public array $prices;

    /**
     * @var EventSalesChannel[]
     */
    public array $salesChannels;

    public function __construct(
        public ?int $id = 0,
        public ?string $name = null,
        ?array $availability = [],
        public ?string $code = null,
        ?array $contingents= [],
        public ?int $currentStatus = null,
        ?array $prices = [],
        ?array $salesChannels = [],
        public ?int $seatingPlanPricelistId = null
    ) {
        $this->availability = $availability;
        $this->contingents = $contingents;
        $this->prices = $prices;
        $this->salesChannels = $salesChannels;

    }
}