<?php

include_once 'includes/user.php';
include_once 'includes/session.php';


$session = new session();
$user = new user();

if(isset($_SESSION['user'])){

    include_once 'views/home.php';
}
else if(isset($_POST['submit'])){
        $user = new user();
        $userForm = $_POST['user'];
        $passwordForm = $_POST['password'];

        if($user->userExist($userForm, $passwordForm)){

            $session->setCurrentUser($userForm);
            include_once 'views/home.php';
        }
        else{
            $errorMessage = "Usuario y/o Contraseña incorrectas";
            include_once 'views/login.php';
        }
    }
    else{

    include_once 'views/login.php';

    
}    

?>