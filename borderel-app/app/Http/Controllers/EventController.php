<?php

namespace App\Http\Controllers;

use App\DTO\Order;
use App\DTO\Ticket;
use App\Printers\TotalPricePrinterInterface;
use App\Services\CalculatorInterface;
use App\Services\ExternalAPis\ApiEventOrderProvider;
use App\Services\ExternalAPis\ApiEventTicketProvider;

class EventController
{
    public function __construct(
        private CalculatorInterface $calculator,
        private TotalPricePrinterInterface $printer,
        private ApiEventOrderProvider $orderProvider,
        private ApiEventTicketProvider $ticketProvider
    ) {
    }

    public function getTotalsForEvent(int $eventId)
    {
        $allOrderIds = $this->getAllOrderIdsForEvent($eventId);

        $totals = $this->calculateTotalsForEvent($allOrderIds);
        //$this->printer->printTotalPrice($totals);

        return $totals;
    }

    /**
     * @param int[] $orderIds
     * @return array
     */
    private function calculateTotalsForEvent(array $orderIds): array
    {
        $orders = $this->orderProvider->getEventOrders($orderIds);
        $orderObjects = array_map(fn($order) => Order::from($order), $orders['data']);
        return $this->calculator->calculate($orderObjects);
    }

    /**
     * @param int $eventId
     * @return int[]
     */
    private function getAllOrderIdsForEvent(int $eventId): array
    {
        $tickets = $this->ticketProvider->getEventTickets($eventId);

        $tickets = array_map(fn($ticket) => Ticket::from($ticket), $tickets);

        $orderIds = array_map(fn($ticket) => $ticket->orderId, $tickets);
    
        $orderIds = array_filter($orderIds, fn($id) => $id !== null);
        return array_values(array_unique($orderIds));
    }
}
