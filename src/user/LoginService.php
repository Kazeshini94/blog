<?php

namespace App\user;

use JetBrains\PhpStorm\NoReturn;

/**
 * @property UserRepo $userRepo
 */
class LoginService
{
    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function attempt($name, $password)
    {
        $user = $this->userRepo->findByUsername($name);
        if (empty($user)) {
            return false;
        }

        if (password_verify($password, $user->password)) {
            $_SESSION['login'] = $user->name;
            session_regenerate_id(true);
            return true;
        } else return false;
    }

    public function logout(): void
    {
        unset($_SESSION['login']);
        header("Location: login");
    }

    public function check(): void
    {
        if (!isset($_SESSION['login'])) {
            header("Location: login");
        }
    }
}