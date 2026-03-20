<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class EventPricesSalesChannel extends Data {
    /**
     * @var PricelistPriceCondition[]
     */
    public array $conditions;

    /**
     * @var EventPricesCost[] 
     */
    public array $costs;
    public float $price;
    public int $saleschannelid;
    public float $servicecharge;
    public int $tickettypepriceid;

    public function __construct(
        array $conditions,
        array $costs,
        float $price,
        int $saleschannelid,
        float $servicecharge,
        int $tickettypepriceid
    ) {
        $this->conditions = $conditions;
        $this->costs = $costs;
        $this->price = $price;
        $this->saleschannelid = $saleschannelid;
        $this->servicecharge = $servicecharge;
        $this->tickettypepriceid = $tickettypepriceid;
    }
}
