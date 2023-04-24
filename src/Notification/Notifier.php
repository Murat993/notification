<?php

namespace App\Service;


use App\Notification\Factory\NotificationFactory;
use App\Notification\Models\Notification;

class Notifier
{
    public function __construct(
        private readonly NotificationFactory $factory
    ) {
    }

    public function send(Notification $notification): void
    {
        foreach ($notification->getTypes() as $type) {
            $strategy = $this->factory->createStrategy(Type: $type);
            $strategy->send(Notification: $notification);
        }

    }
}