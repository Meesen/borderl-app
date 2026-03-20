<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class EventContingentLock extends Data {

    public function __construct(
        public int $amount, 
        public int $locktypeid,
        public int $tickettypeid
        )
        {
        }
}
