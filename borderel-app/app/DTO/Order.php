<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class Order extends Data
{
    public function __construct(
        public ?int $orderid,
        public ?float $amountpaid = null,
        public ?bool $calculate_ordercosts = null,
        public ?string $code = null,
        public ?int $customerid = null,
        public ?array $deferredpaymentproperties = null,
        public ?int $deliveryscenarioid = null,
        public ?int $deliverystatus = null,
        public ?bool $expiryhandled = null,
        public ?string $expiryts = null,
        public ?string $firstname = null,
        public ?bool $hasopenpaymentrequest = null,
        public ?bool $isauthenticatedcustomer = null,
        public ?string $lastname = null,
        public ?array $lookup = null,
        public ?int $nbroftickets = null,
        public ?array $ordercosts = null,
        public ?array $payments = null,
        public ?int $paymentscenarioid = null,
        public ?int $paymentstatus = null,
        public ?array $products = null,
        public ?array $promocodes = null,
        public ?array $queuetokens = null,
        public ?bool $rappelhandled = null,
        public ?string $rappelts = null,
        public ?int $saleschannelid = null,
        public ?int $status = null,
        public ?array $tickets = null,
        public ?float $totalamount = null,
        public ?int $webskinid = null,
        public ?string $createdts = null,
        public ?string $lastupdatets = null,
    ) {
    }
}
