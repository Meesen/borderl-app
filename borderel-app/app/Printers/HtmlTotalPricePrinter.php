<?php

namespace App\Printers;

class HtmlTotalPricePrinter implements TotalPricePrinterInterface
{
    /**
     * @param array<string, float> $prices
     */
    public function printTotalPrice(array $prices): void
    {
        // can be used to print it without calling back to web.php
        //echo view('total-price-card', ['prices' => $prices])->render();
    }
}