<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Services\ExternalAPis\ApiEventOrderProvider;
use App\Services\ExternalAPis\ApiEventTicketProvider;
use App\Services\EventTotalsCalculator;
use App\Printers\HtmlTotalPricePrinter;



Route::get('/', function ()  {
    $eventId = 10000;
    $eventController = new EventController(
        new EventTotalsCalculator(),
        new HtmlTotalPricePrinter(),
        app(ApiEventOrderProvider::class),
        app(ApiEventTicketProvider::class),
    );
    $prices = $eventController->getTotalsForEvent($eventId);
    
    return view('welcome', [
        'pageTitle' => 'Event Pricing - Event ID 10000',
        'prices' => $prices,
    ]);
});
