<?php

namespace App\Services;

interface EventOrderProviderInterface
{
    /**
     * Fetch orders for a specific event.
     *
     * @param int[] $orderIds
     * @return array<int, mixed>
     */
    public function getEventOrders(array $orderIds): array;
}
