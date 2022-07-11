<?php

namespace Runsystemjsc\LaravelChatops\Traits\Features;

trait CanMessage
{
    /**
     * @param  string  $message
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function message(string $message, string $root_id = null)
    {
        $data = [
            'root_id' => $root_id,
            'channel_id' => $this->channel,
            'message' => $message,
        ];

        return $this->perform('message', $data);
    }
}
