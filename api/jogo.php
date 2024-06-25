<?php
header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");
 
$jogo [1] = array (
    "nome" => "Birdy",
    "descricao" => "Em Birdy o seu objetivo é acumular o máximo de pontos possíveis, no caso desviando dos canos.",
    "instrucoes" => "Use a barra de espaço ou o botão esquerdo do mouse para pular", 
    "imagem" => "imagens/Birdy.jpeg",
    "link" => "http://localhost/onseet/games/Birdy/"
);

$jogo [2] = array (
    "nome" => "Escape from Space",
    "descricao" => "Em Escape from Space o objetivo é desviar dos meteoros e sobreviver, e na segunda fase você pode os destruir.",
    "instrucoes" => "Aperte enter para iniciar, e as setas direcionais do teclado para se mover, e a barra de espaço para atacar.",
    "imagem" => "imagens/escape.png",
    "link" => "http://localhost/onseet/GAMES/Escape%20from%20space/"

);

$jogo [3] = array (
    "nome" => "Wild West The Infinite Battle",
    "descricao" => "Wild West o objetivo é juntar moedas e lutar contra o chefão final.",
    "instrucoes" => "Use as setas direcionais do teclado para se movimentar e a barra de espaço para atacar.",
    "imagem" => "imagens/wildwest.jpeg",
    "link" => "http://localhost/onseet/games/WildWest/"
);

$jogo [4] = array (
    "nome" => "Submarine Adventure",
    "descricao" => "O Submarino Subby deve encontrar o tesouro perdido, escapando de criaturas marinhas assustadoras",
    "instrucoes" => "Use as setas direcionais do teclado para movimentar o submarino.",
    "imagem" => "imagens/Poster.png",
    "link" => "http://localhost/onseet/games/Submarino%20Adventure/"
);

$jogo [5] = array (
    "nome" => "Souls in the Dark",
    "descricao" => "Em Souls in the Dark, você deve lutar contra o Boss final e seus defensores",
    "instrucoes" => "Use as setas direcionais do teclado para se movimentar e a barra de espaço para atacar.",
    "imagem" => "imagens/Souls.jpeg",
    "link" => "http://localhost/onseet/games/Souls%20in%20the%20dark/"
);

$jogo [6] = array (
    "nome" => "Galactic Attack",
    "descricao" => "Escape from Space o objetivo é destruir, desviar de meteoros e acabar com a vida de Etron",
    "instrucoes" => "Use as setas direcionais do teclado para mover, enter para atirar na fase 2, e shift na fase 3 para escudo",
    "imagem" => "imagens/galactic.jpeg",
    "link" => "http://localhost/onseet/games/Gallactic%20Attack/"

);

$jogo [7] = array (
    "nome" => "Time Sprint",
    "descricao" => "Assuma o papel de um corredor intrépido em busca de atravessar uma cidade distópica cheia de obstáculos cibernéticos.",
    "instrucoes" => "Setas para mover e barra de espaço para saltar",
    "imagem" => "imagens/Banner Principal Jogo.png",
    "link" => "http://localhost/onseet/games/Game%20TIme%20Sprint%202/"
);

echo json_encode($jogo);
