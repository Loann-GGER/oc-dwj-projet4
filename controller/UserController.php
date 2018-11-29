<?php

namespace Controller;

use App\Bootstrap;
use Entity\User;
use App\Session;

class UserController
{
    public function login()
    {  
        require("view/backend/login.php");
    }

    public function register()
    {  
        require("view/backend/register.php");
    }

    public function forgotPassword()
    {  
        require("view/backend/forgot-password.php");
    }


    public function validelogin()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(User::class);
        $user = $postRepo->find(1);
        
       
 
        if ($_POST['Email'] == $user->email() && password_verify($_POST['Password'], $user->password()))
        {
            if ($user->level() == 1) {
                $_SESSION['login'] = 1;
            }
        }
        else // Sinon, on affiche un message d'erreur
         {

            $_SESSION['login'] = 0;
        }
    
        header("location:index.php?action=login");
    }

    public function incrilogin()
    {
        $postPass = "MLKDGGL";
        
        $mail = "";

        $password = password_hash( $postPass, PASSWORD_BCRYPT);

        $entityManager = Bootstrap::getEntityManager();
        $entityManager->persist(); // Créer la réquète 
        $entityManager->flush(); // Exe. réquète
    }
    public function logout()
    {
        Session::destroy();
        header("location:index.php");
    }
}