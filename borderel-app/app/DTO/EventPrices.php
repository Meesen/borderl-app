<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class EventPrices extends Data {
    /**
     * @var EventPriceContingent[]
     */
    public array $contingents;
    
    public function __construct(
        ?array $contingents = []
    )
    {
        $this->contingents = $contingents;
    }
}