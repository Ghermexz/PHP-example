<html>
<body>
<form action="" method="post">
    
    <h2>Registro</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="user"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <input type="submit" value="Registrarse" name="register" ></p>
    
    </form>
    <button onClick="location.href='../index.php'" >Volver al inicio</button>
        <?php
        include_once '../includes/user.php';
        if(isset($_POST['register'])){
            $user = new user();
            $userRegister = $_POST['user'];
            $passwordRegister = $_POST['password'];

            $userForm = new user();
            if($userForm->userRegister($userRegister, $passwordRegister)){
                echo "Usuario registrado con exito";
            }else{
                echo "Usuario no registrado";
            }
        }
        ?>
        
</body>
</html>