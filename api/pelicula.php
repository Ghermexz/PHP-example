<?php

include_once 'db.php';
class Pelicula extends DB{

    function getMovies(){
        $query = $this->connect()->query("SELECT * FROM pelicula");
        return $query;
    }
    function getMovie($id){
        $query = $this->connect()->query("SELECT * FROM pelicula WHERE id= $id");
        return $query;
    }
}

?>