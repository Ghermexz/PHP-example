<?php

include_once 'apipeliculas.php';

$api = new ApiPeliculas();


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $api->getById($id);
}else{
    $api->getAll();
}

?>