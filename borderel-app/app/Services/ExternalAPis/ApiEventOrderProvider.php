<?php

namespace App\Services\ExternalAPis;


use Illuminate\Support\Facades\Http;

class ApiEventOrderProvider
{
    public function __construct(
    ) {
    }
    /**
     * @param int[] $orderIds
     * @return array<int, mixed>
     */
    public function getEventOrders(array $orderIds): array
    {
        $accessKey = config('services.event_api.access_key');
        $secretKey = config('services.event_api.secret_key');

        $credentials = base64_encode("{$accessKey}:{$secretKey}");
        $response = Http::withHeaders([
            'Authorization' => "Basic {$credentials}",
            'Accept' => 'application/json',
        ])->get(config('services.event_api.base_url') . "/orders",
        [
            'filter' => 'select id from tm.order where id in (' . implode(',', $orderIds) . ')',
            'limit' => count($orderIds),
        ]
        );

        return $response->json();
    }
}
