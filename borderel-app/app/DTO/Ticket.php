<?php
namespace App\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapInputName;

class Ticket extends Data {
    public function __construct(
        public int $id,
        #[MapInputName('orderid')]
        public ?int $orderId,
        public ?string $barcode,
        #[MapInputName('bundleid')]
        public ?int $bundleId,
        #[MapInputName('orderfee')]
        public ?int $orderFee,
        public ?int $price,
        #[MapInputName('seatdescription')]
        public ?string $seatDescription,
        #[MapInputName('seatid')]
        public ?string $seatId,
        #[MapInputName('ticketholderid')]
        public ?int $ticketHolderId,
        #[MapInputName('ticketname')]
        public ?string $ticketName,
        #[MapInputName('tickettypeid')]
        public ?int $ticketTypeId,
        #[MapInputName('tickettypepriceid')]
        public ?int $ticketTypePriceId,
    )
    {
    }
}
