<?php

namespace App\Services;

interface EventTicketProviderInterface
{
    /**
     * Fetch tickets for a specific event.
     *
     * @param int $eventId
     * @return array<int, mixed>
     */
    public function getEventTickets(int $eventId): array;
}
