<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class EventContingentAvailability extends Data {
    /** @var int Number of complimentary tickets */
    public int $complimentary;

    /** @var int Number of available tickets */
    public int $free;

    /** @var int Number of locked tickets with a hard lock type */
    public int $locked_hard;

    /** @var int Number of locked tickets with a soft lock type */
    public int $locked_soft;

    /** @var int Number of tickets reserved in unconfirmed orders */
    public int $reserved;

    /** @var int Number of tickets in confirmed orders that are completely paid */
    public int $sold_paid;

    /** @var int Number of tickets in confirmed orders that are not completely paid */
    public int $sold_unpaid;

    /** @var int Contingent ID */
    public int $tickettypeid;

    /** @var int Total number of tickets in the contingent */
    public int $total;


    public function __construct(
        int $complimentary,
        int $free,
        int $locked_hard,
        int $locked_soft,
        int $reserved,
        int $sold_paid,
        int $sold_unpaid,
        int $tickettypeid,
        int $total,

    ) {
        $this->complimentary = $complimentary;
        $this->free = $free;
        $this->locked_hard = $locked_hard;
        $this->locked_soft = $locked_soft;
        $this->reserved = $reserved;
        $this->sold_paid = $sold_paid;
        $this->sold_unpaid = $sold_unpaid;
        $this->tickettypeid = $tickettypeid;
        $this->total = $total;
    }
}
