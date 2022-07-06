<?php

namespace Runsystemjsc\LaravelChatops\Traits;

trait HasChannel
{
    /**
     * @var string
     */
    protected string $channel;

    /**
     * @param  string  $channel
     *
     * @return $this
     */
    public function channel(string $channel)
    {
        $this->channel = $channel;

        return $this;
    }
}
