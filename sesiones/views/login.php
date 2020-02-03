<html>
<body>
    
    <form action="" method="post">
    
    <h2>Iniciar sesión</h2>
        <?php
        
        if(isset($errorMessage))
        echo $errorMessage;
        ?>
        <p>Nombre de usuario: <br>
        <input type="text" name="user"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <input type="submit" value="Iniciar Sesión" name="submit" ></p>
    
    </form>
    <button onClick="location.href='views/register.php'" >Registrarse</button>

</body>

</html>