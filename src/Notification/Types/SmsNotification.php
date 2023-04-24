<?php

namespace App\Notification\Types;


use App\Notification\Interfaces\NotificationInterface;
use App\Notification\Models\Notification;

class SmsNotification implements NotificationInterface
{
    public function send(Notification $notification): void
    {
        // Реализация отправки уведомления по sms
    }
}