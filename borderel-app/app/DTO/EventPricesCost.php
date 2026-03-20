<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class EventPricesCost extends Data {

    public function __construct(
        public float $cost, 
        public int $costid
    )
    {

    }
}
