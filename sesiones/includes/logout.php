<?php

include 'session.php';
$session = new session();
$session->closeSession();
header("location: ../index.php");
?>