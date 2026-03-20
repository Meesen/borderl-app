<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class OrderTicket extends Data
{
    public function __construct(
        public int $id,
        public int $orderid,
        public string $barcode,
        public int $bundleid,
        public string $bundlevariant,
        public int $cachedaccesscontrolstatus,
        public string $deliveredts,
        public int $eventid,
        public float $price,
        public int $pricetypeid,
        public float $seatcachedvisualx,
        public float $seatcachedvisualy,
        public string $seatdescription,
        public string $seated_ref,
        public string $seatname,
        public int $seatzoneid,
        public float $servicecharge,
        public int $ticketholderid,
        public string $ticketname,
        public int $tickettypeid,
        public string $tickettypename,
        public int $tickettypepriceid,
        public int $transferredto,
        public int $vouchercodeid,
    ) {
    }
}
