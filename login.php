<html>
<header>
    <?php include "db_conect.php" ?>
    <link rel="stylesheet" href="main.css">
</header>
<body>
    <form action="" method="post">
        <?php
        if(isset($error)){
            echo $error;
        } 
         
        ?>
        <h2>Iniciar Sesion</h2>
        Usuario: <input type="text" name="user"><br>
        Contraseña: <input type="text" name = "password"><br>
        <input type="submit" value="Iniciar Sesion" name= "iniciarSesion">
    </form>

    <?php
        if(isset($_POST['iniciarSesion'])){
            $userRegister = $_POST['user'];
            $passwordRegister = $_POST['password'];

            $query = "SELECT * FROM register WHERE user = '$userRegister' AND password = '$passwordRegister'";
            echo $userRegister.$passwordRegister;
            
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("error");
            }
            
        }
        
        ?>
</body>
</html>