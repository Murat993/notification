<?php

namespace App\Notification\Factory;



use App\Notification\Interfaces\NotificationFactoryInterface;
use App\Notification\Interfaces\NotificationInterface;
use App\Notification\Models\Type;
use App\Notification\Types\EmailNotification;
use App\Notification\Types\PushNotification;
use App\Notification\Types\SmsNotification;
use http\Exception\InvalidArgumentException;

class NotificationFactory implements NotificationFactoryInterface
{
    public function createStrategy(Type $type): NotificationInterface
    {
        return match ($type->getName()) {
            Type::EMAIL => new EmailNotification(),
            Type::SMS => new SmsNotification(),
            Type::PUSH => new PushNotification(),
            default => throw new InvalidArgumentException('Wrong notification type'),
        };
    }
}