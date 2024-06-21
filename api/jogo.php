<?php
header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");
 
$jogo [1] = array (
    "nome" => "Birdy",
    "descricao" => "Em Birdy o seu objetivo é acumular o máximo de pontos possíveis, no caso desviando dos canos",
    "imagem" => ""
);

echo json_encode($jogo);
