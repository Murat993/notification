<?php

namespace App\Notification\Interfaces;

use App\Notification\Models\Type;

interface NotificationFactoryInterface
{
    public function createStrategy(Type $type): NotificationInterface;
}