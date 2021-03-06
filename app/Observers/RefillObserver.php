<?php

namespace App\Observers;

use Uuid;
use App\ModelsFuelStation\Refill;

class RefillObserver
{
    public function creating(Refill $refill)
    {
        $refill->vehicle_uuid = Uuid::generate()->string;
    }
}
