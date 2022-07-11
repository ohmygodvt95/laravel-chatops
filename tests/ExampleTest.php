<?php

it('can send message "Hello, World" to channel', function () {
    $chatops = new \Runsystemjsc\LaravelChatops\LaravelChatops();
    $response = $chatops->profile('test')->channel(env('CO_CHANNEL'))->message('Hello, World!');
    expect($response->body())->toContain('Hello, World!');
});

it('can send message "Hello, World" to root thread', function () {
    $chatops = new \Runsystemjsc\LaravelChatops\LaravelChatops();
    $response = $chatops->profile('test')->channel(env('CO_CHANNEL'))
        ->message(message: 'Hello, World!', root_id: 'pt45ccrs57d9zrrbi1usuy199r');
    expect($response->body())->toContain('Hello, World!');
});
