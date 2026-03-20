<?php

namespace App\Services;

interface CalculatorInterface
{
    public function calculate(array $items): array;
}