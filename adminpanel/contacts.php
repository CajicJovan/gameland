<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION["username"]) OR $_SESSION["role_id"] != 2){
            http_response_code(404);
        }
        if(isset($_SESSION["username"]) AND $_SESSION["role_id"] == 2){
            try{
                include_once("../backend/functions.php");
                include_once("../data/connection.php");
                $query = "SELECT * FROM contact";
                $return = "
                <tr>
                <td class='font-weight-bold'>contact_id</td>
                <td class='font-weight-bold'>fName</td>
                <td class='font-weight-bold'>email</td>
                <td class='font-weight-bold'>message</td>
                <td class='font-weight-bold'>Delete</td>
                </tr>";
                $result = $connection->query($query) ->fetchAll();
                foreach($result as $r){
                    $return .="<tr>
                    <td>$r->contact_id</td>
                    <td>$r->Name</td>
                   
                    <td>$r->email</td>
                    <td>$r->message</td>
                    <td><input type='button' class='btn btn-dark' name='deleteContact' id='$r->contact_ids' value='Delete'</td>
                    </tr>";
                }
                echo json_encode($return);
            }
            catch(PDOException $e){
                http_response_code(500);
                echo $e->getMessage();
            }
        }
    }
    else{
        http_response_code(404);
    }
    
?>