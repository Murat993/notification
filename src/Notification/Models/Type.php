<?php

namespace App\Notification\Models;

class Type
{
    const EMAIL = 'email';
    const PUSH = 'push';
    const SMS = 'sms';

    public function __construct(
        private string $name,
    ) {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}