<?php

namespace Runsystemjsc\LaravelChatops\Traits;

trait HasProfile
{
    /**
     * @var string
     */
    protected $profile = 'default';

    /**
     * @param  string  $profile
     *
     * @return $this
     */
    public function profile(string $profile = 'default')
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * @return array
     */
    private function loadProfileConfig()
    {
        return config("chatops.profiles.{$this->profile}", [
            'token' => env('CO_TOKEN', null),
        ]);
    }
}
