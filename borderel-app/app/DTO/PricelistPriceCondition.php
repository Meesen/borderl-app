<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class PricelistPriceCondition extends Data {
    /**
     * @var string
     */
    public string $type;

    /**
     * @var mixed
     */
    public $value;

    public function __construct(string $type, $value)
    {
        $this->type = $type;
        $this->value = $value;
    }
}
