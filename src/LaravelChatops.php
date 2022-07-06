<?php

namespace Runsystemjsc\LaravelChatops;

use Runsystemjsc\LaravelChatops\Traits\Features\CanMessage;
use Runsystemjsc\LaravelChatops\Traits\HasChannel;
use Runsystemjsc\LaravelChatops\Traits\HasFeature;
use Runsystemjsc\LaravelChatops\Traits\HasProfile;

class LaravelChatops
{
    use HasProfile;
    use HasChannel;
    use HasFeature;
    use CanMessage;
}
