<?php

namespace App\Printers;

interface TotalPricePrinterInterface
{
    public function printTotalPrice(array $prices): void;
}