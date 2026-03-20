<?php

namespace App\Services;

use App\DTO\Event;
use App\DTO\Order;

class EventTotalsCalculator implements CalculatorInterface
{
    /**
     * @param array<int, mixed> $items
     * @return array<string, float>
     */
    public function calculate(array $items): array
    {
        $totalPrice = 0.0;
        $costs = 1000.0;

        foreach ($items as $item) {
            if ($item instanceof Order) {
                $totalPrice += $item->amountpaid ?? 0.0;
                
            } elseif (is_array($item)) {
                throw new \InvalidArgumentException('Item was not an order');
            }
        }

        return [
            'Gross Revenue' => round($totalPrice, 2),
            'Total Costs' => round($costs, 2),
            'Net Revenue' => round($totalPrice - $costs, 2),
        ];
    }
}
