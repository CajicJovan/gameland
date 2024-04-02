<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION["username"]) OR $_SESSION["role_id"] != 1){
            http_response_code(404);
        }
        if(isset($_SESSION["username"]) AND $_SESSION["role_id"] == 1){
            try{
                include_once("../backend/functions.php");
                include_once("../data/connection.php");
                $query = "SELECT * from products";
                $return = "
                <tr>
                <td></td>
                <td><input type='text' id='text' placeholder='text'></td>
                <td><input type='text' id='text' placeholder='text'></td>
                <td><input type='text' id='text' placeholder='text'></td>
                <td><input type='text' id='text' placeholder='text'></td>
                <td><input type='text' id='text' placeholder='text'></td>
                
                <td colspan='2'><input type='button' id='text' class='btn btn-dark w-75' value='Insert'></td>
                </tr>
                <tr>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold'>text</td>
                <td class='font-weight-bold' colspan='2'>Delete</td>
                </tr>";
                $result = $connection->query($query) ->fetchAll();
                foreach($result as $r){
                    $return .="<tr>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td>$r-></td>
                    <td><input type='button' class='btn btn-dark'  colspan='2' name='' id='$r->' value='Delete'</td>
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