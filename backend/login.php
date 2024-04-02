<?php
header("Content-type: application/json");
session_start(); 
    try{
        if(isset($_POST["username"]) AND !empty($_POST["username"])){
            $username = $_POST["username"];
        }
        if(isset($_POST["password"]) AND !empty($_POST["password"])){
            $password = md5($_POST["password"]);
        }
        require_once("../data/connection.php");
        $upit = "SELECT * FROM users WHERE username = :username AND password = :password";
        $priprema = $connection->prepare($upit);
        $priprema->bindParam(":username", $username);
        $priprema->bindParam(":password", $password);
        $priprema->execute();
        $result = $priprema->fetch();
        if($result){
            $_SESSION["korisnik"] = $result;
        }
        echo json_encode($result);
    }
    catch(PDOException $e){
        echo json_encode($e->getMessage());
    }

?>
