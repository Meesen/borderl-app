<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class PriceListPrice extends Data {
    /**
     * @var bool[]
     */
    public array $availabilities;

    /**
     * @var PricelistPriceCondition[]
     */
    public array $conditions;

    /**
     * @var int
     */
    public int $position;

    /**
     * @var float[]
     */
    public array $prices;

    /**
     * @var int
     */ 
    public int $pricetypeid;

    /**
     * @var int[]
     */
    public array $saleschannels;

    public function __construct(
        array $availabilities,
        array $conditions,
        int $position,
        array $prices,
        int $pricetypeid,
        array $saleschannels
    ) {
        $this->availabilities = $availabilities;
        $this->conditions = $conditions;
        $this->position = $position;
        $this->prices = $prices;
        $this->pricetypeid = $pricetypeid;
        $this->saleschannels = $saleschannels;
    }
}