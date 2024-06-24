<?php
header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$equipe[1] = array(
    "nome" => "Paulo",
    "cargo" => "Dev de Birdy",
    "descricao" => "Instagram: pauloefr",
    "foto" => "imagens/paulo.jpg"


);

$equipe[2] = array(
    "nome" => "Milena",
    "cargo" => "Dev de Galactic Attack",
    "descricao" => "Instagram: ",
    "foto" => "imagens/milena.jpeg"
);

$equipe[3] = array(
    "nome" => "Patrick",
    "cargo" => "Dev de Wild in The West",
    "descricao" => "Instagram: ",
    "foto" => "imagens/patrick.jpeg"
);

$equipe[4] = array(
    "nome" => "Gustavo",
    "cargo" => "Dev de Time Sprint",
    "descricao" => "Instagram: ",
    "foto" => "imagens/gustaavo.jpg"
);

$equipe[5] = array(
    "nome" => "Maria",
    "cargo" => "Dev de Escape from Space",
    "descricao" => "Instagram: ",
    "foto" => "imagens/maria.jpg"
);

$equipe[6] = array(
    "nome" => "Rodrigo",
    "cargo" => "Dev de Submarine Adventure",
    "descricao" => "Instagram: ",
    "foto" => "imagens/Rodrigo.jpeg"
);

$equipe[7] = array(
    "nome" => "Felipe Batista",
    "cargo" => "Dev de Souls in the Dark",
    "descricao" => "Instagram: ",
    "foto" => "imagens/Felipe.jpeg"
);



echo json_encode($equipe);

