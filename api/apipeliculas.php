<?php

include_once 'pelicula.php';
class ApiPeliculas{

    function getAll(){

        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"] = array();

        $res = $pelicula->getMovies();

        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $item = array(
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'imagen' => $row['imagen']
                );
                array_push($peliculas['items'],$item);
            }
            $this->printJSON($peliculas);
        }else{
            $this->error('No hay elementos');
        }
    }

    function getById($id){

        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"] = array();

        $res = $pelicula->getMovie($id);

        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $item = array(
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'imagen' => $row['imagen']
                );
                array_push($peliculas['items'],$item);
            }
            $this->printJSON($peliculas);
        }else{
            $this->error('No hay elementos');
        }
    }
    

    function printJSON($array){
        echo '<code>'. json_encode($array) .'</code>';
    }

    function error($mensaje){
        echo '<code>'. json_encode(array('mensaje' => $mensaje)).'</code>';
    }
}

?>