<html>
<head>
    Insertar datos
</head>
<body>
    <form action="" method = "post">
        <input type="text" name="text" id="text">
        <input type="submit" value="Añadir datos">
    </form>
    <div id="list">
        <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "ejemplo";
            $conection = mysqli_connect($host, $user, $password, $database);
            if(!$conection){
                die("Conexion fallida a base de datos".mysqli_connect_error());
            }
            
            if(isset($_POST['text'])){
                $text = $_POST['text'];
                $query = "INSERT INTO lista (texto, completado) VALUES ('$text', false)";
                $result = mysqli_query($conection, $query);
                if(!$result){
                    die("Error".mysqli_connect_error());
                }
            }else if(isset($_POST['completar'])){

                $id =$_POST['completar'];

                $query = "UPDATE lista SET completado=1 WHERE id = $id";
                $result = mysqli_query($conection, $query);
                if(!$result){
                    die("Error".mysqli_error($conection));
                }
            }

            $query = " SELECT * from lista WHERE completado = 0";
            $result = mysqli_query($conection, $query);
            if(mysqli_num_rows($result) > 0){
                
                 while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div>
                        <form id= "form<?php echo $row['id']?>" method="post">
                                <input name= "completar" value="<?php echo $row['id']?>" id="<?php echo $row['id']?>" type="checkbox" onchange= "completarPendiente(this)"> <?php echo $row['texto'] ?>
                        </form>
                    </div> 
                    <?php      
                }
            }
            mysqli_close($conection);
        ?>
    </div>
    <script>
        function completarPendiente(e){
            var id = "form"+e.id;
            var formulario = document.getElementById(id);
            formulario.submit();
        }
    </script>
</body>
</html>