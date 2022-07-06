<?php

namespace Runsystemjsc\LaravelChatops\Traits;

use Illuminate\Support\Facades\Http;

trait HasFeature
{
    /**
     * @param  string  $feature
     * @param  string  $data
     *
     * @return \Illuminate\Http\Client\Response
     */
    private function perform(string $feature, array $data)
    {
        $endpoint = config('chatops.endpoints.'.$feature);
        $token = $this->loadProfileConfig()['token'] ?? null;

        return Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
            'Accept' => 'application/json',
        ])->post($endpoint, $data);
    }
}
