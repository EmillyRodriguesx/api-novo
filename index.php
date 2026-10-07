<?php 
$metodo = $_SERVER["REQUEST_METHOD"];
echo $metodo;

$uri = strtolower(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
echo $uri;


if ($metodo == "GET" && $uri == "/parque"){
    echo " ESTOU NO PARQUE";
}
elseif ($metodo == "GET" && $uri == "/parque/escorregador"){
    echo " ESTOU NO ESCORREGADOR";
}
elseif ($metodo == "GET" && $uri == "/parque/balanço"){
    echo " ESTOU NO BALANÇO";
}
elseif ($metodo == "GET" && $uri == "/parque/gangorra"){
    echo " ESTOU NA GANGORRA";
}
elseif ($metodo == "GET" && $uri == "parque/arvore"){
    echo " ESTOU EM CIMA DA ARVORE";
}
elseif ($metodo == "GET" && $uri == "/parque/carrossel"){
    echo " ESTOU NO CARROSEL";
}
elseif ($metodo == "GET" && $uri == "/parque/labirinto"){
    echo " ESTOU NO LABIRINTO";
}
elseif ($metodo == "GET" && $uri == "/parque/banheiro"){
    echo " ESTOU NO NO BANHEIRO";
}
?>