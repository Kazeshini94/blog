<?php

namespace App\user;

use App\core\AbstractController;

/**
 * @property LoginService $loginService
 */
class LoginController extends AbstractController
{

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function dashboard()
    {
        $this->loginService->check();
        $this->render("user/dashboard", []);
    }

    public function logout()
    {
        $this->loginService->logout();
    }

    public function login()
    {
//        Commented Code below was just to identify the Hash and use it as PW for our DB !!
//        var_dump(password_hash('test',PASSWORD_DEFAULT));
        $error = false;
        if (!empty($_POST['name']) && !empty($_POST['password'])) {
            $name = $_POST['name'];
            $pw = $_POST['password'];

//             Better way of handling commented code below !
            if ($this->loginService->attempt($name, $pw)) {
                header("Location: dashboard");
                return;
            } else $error = true;

//            Function below works too but makes the login function extremely long! but still important info below !
//
//            $user = $this->userRepo->findByUsername($name);
//            if (!empty($user)) {
//                unsecure password check !! use method below!
//                if ($user->password == $pw) {
//              This Method really secures our Password!!
//                if (password_verify($pw, $user->password)) {
//                    We use our generated Session id as new Username !
//                    $_SESSION['login'] = $user->name;
//                    session_regenerate_id(true);
//                    header("Location: dashboard");
//                    return;
//                } else $error = "Wrong Password or Username!";
//            } else $error = "User not Found!";
        }
        $this->render("user/login", [
            'error' => $error
        ]);
    }
}
