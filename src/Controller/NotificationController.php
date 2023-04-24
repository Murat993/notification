<?php

namespace App\Controller;

use App\Entity\User;
use App\Notification\Models\Notification;
use App\Notification\Models\Type;
use App\Repository\UserRepository;
use App\Service\Notifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class NotificationController extends AbstractController
{
    #[Route('/', name: 'notification')]
    public function index(
        UserRepository $userRepository,
        Notifier $notifier
    )
    {
        /** @var $users User[] */
        $users = $userRepository->findAll();

        foreach ($users as $user) {
            $notifier->send(
                notification: new Notification(
                    title: 'Title',
                    message: 'message',
                    User: $user,
                    types: [
                        new Type(name: Type::EMAIL),
                        new Type(name: Type::PUSH),
                        new Type(name: Type::SMS),
                    ]
                )
            );
        }
    }
}