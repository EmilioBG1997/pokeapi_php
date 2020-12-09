<?php
require "../model/pokemonModel.php";
//header("Content-Type: application/json");
$_POST["dex"];

$monster = new Pokemon($_POST["dex"]);

if($monster->getPokemon() == "N/A"){
    http_response_code(404);
    print(json_encode($monster->getPokemon()));
}
else{
    http_response_code(200);
    print(json_encode($monster->getPokemon()));
}
?>