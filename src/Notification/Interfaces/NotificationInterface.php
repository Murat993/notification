<?php

namespace App\Notification\Interfaces;

use App\Notification\Models\Notification;

interface NotificationInterface
{
    public function send(Notification $notification): void;
}