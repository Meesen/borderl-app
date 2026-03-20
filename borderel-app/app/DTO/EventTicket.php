<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class EventTicket extends Data
{
    public function __construct(
        public int $id,
        public ?int $orderid = null,
        public ?int $accesscontrollastenteredscandeviceid = null,
        public ?string $accesscontrollastenteredts = null,
        public ?int $accesscontrollastexitscandeviceid = null,
        public ?string $accesscontrollastexitts = null,
        public ?int $accesscontrolstatus = null,
        public ?string $barcode = null,
        public ?int $bundleid = null,
        public ?int $locktypeid = null,
        public ?float $orderfee = null,
        public ?float $price = null,
        public ?array $properties = null,
        public ?string $seatdescription = null,
        public ?string $seatid = null,
        public ?int $seatpriority = null,
        public ?string $seatrownumber = null,
        public ?string $seatseatnumber = null,
        public ?int $seatzoneid = null,
        public ?string $seatzonename = null,
        public ?int $ticketholderid = null,
        public ?string $ticketname = null,
        public ?int $tickettypeid = null,
        public ?int $tickettypepriceid = null,
        public ?int $transferredto = null,
        public ?int $vouchercodeid = null,
    ) {
    }
}
