<?php
header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$equipe[1] = array(
    "nome" => "Paulo",
    "cargo" => "Desenvolvedor",
    "foto" => ""


);

$equipe[2] = array(
    "nome" => "Milena",
    "cargo" => "Desenvolvedora",
    "foto" => ""
);

$equipe[3] = array(
    "nome" => "Patrick",
    "cargo" => "Desenvolvedor",
    "foto" => ""
);

$equipe[4] = array(
    "nome" => "Gustavo",
    "cargo" => "Desenvolvedor",
    "foto" => ""
);

$equipe[5] = array(
    "nome" => "Milena",
    "cargo" => "Desenvolvedora",
    "foto" => ""
);

$equipe[6] = array(
    "nome" => "Milena",
    "cargo" => "Desenvolvedora",
    "foto" => ""
);

$equipe[7] = array(
    "nome" => "Milena",
    "cargo" => "Desenvolvedora",
    "foto" => ""
);



echo json_encode($equipe);

