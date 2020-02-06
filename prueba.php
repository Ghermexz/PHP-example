<html>
<body>

<form action="prueba.php" method="post">
    <?php
    echo "hola";
    $nombre = "";
    $password = "";
    $correo = "";
    $pais = "";

        if(isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $password = $_POST['password'];
            $correo = $_POST['correo'];
            $pais = $_POST['pais'];

            $campos = array();

            if($nombre == ""){
                array_push($campos,"Ingrese un nombre");
            }
            if($password == "" || strlen($password) > 7){
                array_push($campos,"La contraseña debe ser mayor a 0 elemnetos y menor a 7");
            }
            if($correo == "" || strrpos($correo, "@") === false){
                array_push($campos, "Escriba un correo valido");
            }
            if(count($campos) > 0){
                echo "Incorrecto <br>";
                foreach($campos as $mensaje){
                    echo $mensaje."<br>";
                }
            }else{
                echo "correcto"."<br>";
            }
        }


    ?>

    Nombre: <input type="text" name="nombre" value= <?php echo $nombre;?> > <br>
    Password: <input type="password" name="password" value= <?php echo $password;?> > <br>
    correo electronico: <input type="text" name="correo" value= <?php echo $correo;?> > <br>

    Pais de origen: <select name="pais" id="">
        <option value="" <?php if($pais=="") echo "selected"?> >Selecciona un pais</option>
        <option value="mx" <?php if($pais=="mx") echo "selected"?>>Mexico</option>
        <option value="co" <?php if($pais=="co") echo "selected"?>>Colombia</option>
        <option value="ve" <?php if($pais=="ve") echo "selected"?>>Venezuela</option>
        <option value="pe" <?php if($pais=="pe") echo "selected"?>>Peru</option>
    </select>
    <input type="submit" value="Enviar Datos">
</form>

</body>
</html>