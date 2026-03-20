<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class Payment extends Data
{
    public function __construct(
        public int $id,
        public int $orderid,
        public float $amount,
        public string $paidts,
        public int $paymentmethodid,
        public array $properties,
        public int $refundpaymentid,
        public int $vouchercodeid,
    ) {
    }
}
