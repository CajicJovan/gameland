
<?php
header("Content-type: application/json");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include "../data/connection.php";
include "/backend/functions.php";
include "functions.php";
try{
$search = isset($_POST["search"]) ?
trim($_POST["search"]) : false;
$search = strtolower($search);
$pretraga = search('%'.$search.'%');
$uloge = vratiSve('product');
echo json_encode([$pretraga,$uloge]);
http_response_code(201);
}
catch(PDOException $exception){
http_response_code(500);
//var_dump($exception);
}
}
else{
http_response_code(404);
}