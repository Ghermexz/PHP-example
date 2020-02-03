<?php
include 'db.php';
class user extends db{

    private $user;
    private $name;

    function userExist($user, $password){
        
        $sql = "SELECT * FROM register WHERE user = '$user' AND password = '$password'";
        $result = $this->connect()->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_array();
                $this->user = $row['user'];
                return true;
            } else {
                return false;
            }
    }
    function getuser(){
        return $this->user;
    }
    function userRegister($user, $password){
        $sql = "INSERT INTO register (user, password) VALUES ('$user', '$password')";
        $conn = $this->connect();
        $result = $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

}


?>