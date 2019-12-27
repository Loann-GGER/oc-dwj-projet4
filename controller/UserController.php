<?php

namespace Controller;

use App\Bootstrap;
use Entity\User;
use App\Session;

class UserController extends Controller
{
    public function login()
    {  
        if (isset($_SESSION['login']) && $_SESSION['login'] === 1) {
            header("location:index.php?action=admin");
        }
        else {
            $this->render('frontend/login.html');
        }
    }

    public function validelogin()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(User::class);
        $user = $postRepo->find(1);
        
        if ($_POST['Email'] == $user->email() && password_verify($_POST['Password'], $user->password())) {
            if ($user->level() == 1) {
                $_SESSION['login'] = 1;
            }
        } else {
            $_SESSION['flash'] = '📌 Identifiant ou mot de passe incorrect...  ';
            $_SESSION['login'] = 0;
        }
    
        header("location:index.php?action=login");
    }

    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        session_unset();
        
        header("location:index.php");
    }
}