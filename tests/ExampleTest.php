<?php

it('can send message "Hello, World" to channel', function () {
    $chatops = new \Runsystemjsc\LaravelChatops\LaravelChatops();
    $response = $chatops->profile('test')->channel(env('CO_CHANNEL'))->message('Hello, World!');
    expect($response->body())->toContain('Hello, World!');
});
