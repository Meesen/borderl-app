<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class Ordercost extends Data
{
    public function __construct(
        public int $orderid,
        public float $amount,
        public int $servicechargedefinitionid,
    ) {
    }
}
