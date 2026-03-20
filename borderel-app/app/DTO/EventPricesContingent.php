<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class EventPricesContingent extends Data {

    /**
     * @var EventPricesPriceType[]
     */
    public array $priceTypes;

    public function __construct(
        public int $contingentId,
        array $priceTypes
    )
    {
        $this->priceTypes = $priceTypes;
    }
}