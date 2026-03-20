<?php

namespace App\Services\ExternalAPis;


use Illuminate\Support\Facades\Http;

class ApiEventTicketProvider
{
    public function __construct(
    ) {
    }

    /**
     * @return array<int, mixed>
     */
  public function getEventTickets(int $eventId): array
{
    $accessKey = config('services.event_api.access_key');
    $secretKey = config('services.event_api.secret_key');

    $credentials = base64_encode("{$accessKey}:{$secretKey}");

    $response = Http::withHeaders([
        'Authorization' => "Basic {$credentials}",
        'Accept' => 'application/json',
    ])->get(config('services.event_api.base_url') . "/events/{$eventId}/tickets");
    $body = trim($response->body());
    $fixed = '[' . preg_replace('/}\s*{/', '},{', $body) . ']';
    
    return json_decode($fixed, true);
}
}
