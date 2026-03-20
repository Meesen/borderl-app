<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class OrderProduct extends Data
{
    public function __construct(
        public int $id,
        public int $orderid,
        public string $code,
        public int $contactid,
        public float $price,
        public int $productid,
        public array $properties,
        public int $vouchercodeid,
    ) {
    }
}
