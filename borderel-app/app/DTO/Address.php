<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class Address extends Data
{
    public function __construct(
        public int $id,
        public int $typeid,
        public string $addressee,
        public string $city,
        public string $country,
        public string $countrycode,
        public int $customerid,
        public string $state,
        public string $street1,
        public string $street2,
        public string $street3,
        public string $type,
        public string $zip,
    ) {
    }
}
