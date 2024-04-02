<?php

    include_once "../data/connection.php";

    function vratiSve($producti){
        try{
        global $connection;
        $upit = "SELECT * FROM $producti";
        $podaci = $connection->query($upit)->fetchAll();
        return $podaci;
        }
        catch(PDOException $ex){
        return $ex;
        }
        }

    function unosKorisnika($ime, $prezime, $email, $username, $sifrovanaLozinka){
        global $connection;
        $query = "INSERT INTO users VALUES (null,:username, :ime, :prezime, CURRENT_TIMESTAMP, :email, :lozinka, 1)";

        $priprema = $connection->prepare($query);
        $priprema->bindParam(':username', $username);
        $priprema->bindParam(':lozinka', $sifrovanaLozinka);
        $priprema->bindParam(':email', $email);
        $priprema->bindParam(':ime', $ime);
        $priprema->bindParam(':prezime', $prezime);

        $rezultat = $priprema->execute();
        return $rezultat;
    }
    function insertContact($name,$mail,$subject,$message){
        global $connection;
        $query = "INSERT INTO contact VALUES(null, :fName,:email, :subject,:message)";
        $prepared = $connection ->prepare($query);
        $prepared ->bindParam(":name", $name);
        $prepared ->bindParam(":email", $mail);
        $prepared ->bindParam(":subject", $subject);
        $prepared ->bindParam(":message", $message);
        $result = $prepared ->execute();
        return $result;
    }

    $errors = array();
    function check($regex, $input, $error){
        
        if(!isset($input) or empty($input) or !preg_match($regex,$input)){
            array_push($errors, $error);
        }
    }
    function search($search){
        try{
        global $connection;
        $upit = "SELECT * FROM product";
        $select = $connection->prepare($upit);
        $select->execute([$search]);
        $podaci = $select->fetchAll();
        return $podaci;
        }
        catch(PDOException $ex){
        return $ex;
        }
    }    

?>