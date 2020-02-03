<?php

    include_once "login.php";
    if(isset($userRegister)){
        
        if(mysqli_num_rows($result) === 0){
            $error= "Usuario y contraseña incorrectos";
            include_once "login.php";
            echo $error."bla bla";
            
        }else{
            
            mysqli_close($conn);
            include_once "enter.php";
            
        }
    }
?>