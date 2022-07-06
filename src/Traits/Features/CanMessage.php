<?php

namespace Runsystemjsc\LaravelChatops\Traits\Features;

trait CanMessage
{
    /**
     * @param  string  $message
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function message(string $message)
    {
        $data = [
            'channel_id' => $this->channel,
            'message' => $message,
        ];

        return $this->perform('message', $data);
    }
}
