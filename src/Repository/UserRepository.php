<?php

namespace App\Repository;

use App\Entity\User;

class UserRepository {

    public function findAll(): array
    {
        return [
            new User(id: 1, name: 'Иван', email: 'ivan@example.com', phone: '79991112233'),
            new User(id: 2,name:  'Петр',email:  'petr@example.com',phone:  '79993334455'),
        ];
    }

    public function findOne(): User
    {
        return new User(id: 1, name: 'Иван', email: 'ivan@example.com', phone: '79991112233');
    }
}
