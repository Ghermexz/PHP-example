<html>
<body>

<form action="encuesta.php" method="get">
    <h2>¿Cual es tu lenguaje favorito?</h2>
    <input type="radio" name="encuesta" value= "c"> C <br>
    <input type="radio" name="encuesta" value= "python"> Python <br>
    <input type="radio" name="encuesta" value= "php"> PHP <br>
    <input type="radio" name="encuesta" value= "java"> Java <br>
    <input type="radio" name="encuesta" value= "javascript"> Javascript <br>
    <input type="submit" value="Enviar">
</form>

<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "ejemplo";
    $conn = mysqli_connect($hostname, $user, $password, $database);
    if(!$conn){
        die("Error".mysqli_connect_error());
    }

    if(isset($_GET['encuesta'])){
        $encuesta = $_GET['encuesta'];
        $query = "UPDATE votacion SET votos = (votos +1) WHERE lenguaje = '$encuesta'";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Error".mysqli_error($conn));
        }
        
        $query = "SELECT SUM(votos) FROM votacion";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Error".mysqli_error($conn));
        }
        $row = mysqli_fetch_assoc($result);
        echo "<h1> El numero total de encuestados es: ".$row['SUM(votos)']."</h1><br>";


        $query = "SELECT * FROM votacion";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){

                echo $row['lenguaje'].": ".$row['votos']."<br>";
            }
        }
        
    }
?>



</body>
</html>