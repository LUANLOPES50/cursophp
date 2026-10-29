<?php
$banco = mysqli_connect("localhost", "root", "");
mysqli_select_db($banco, "filmes");
$nome_filmes = [];
$id =
    $elenco = [];
$criador = [];
$studio = [];
$sinopse = [];
$imagem = [];
$faixa_etaria = [];

//tabela filmes
$query = mysqli_query($banco, "select * from filmes");
while ($resultado = mysqli_fetch_assoc($query)) {
    array_push($nome_filmes, $resultado['nome_filmes']);
    array_push($elenco, $resultado['elenco']);
    array_push($criador, $resultado['criador']);
    array_push($studio, $resultado['studio']);
    array_push($sinopse, $resultado['sinopse']);
    array_push($imagem, $resultado['imagem']);
    array_push($faixa_etaria, $resultado['faixa_etaria']);
}

//tabela categoria
$id_categorias = [];
$nome_categorias = [];
$query = mysqli_query($banco, "select * from categoria");
while ($resultado = mysqli_fetch_assoc($query)) {
    array_push($id_categorias, $resultado['id']);
    array_push($nome_categorias, $resultado['nomes']);
}

//tabela categoria_filmes
$cf_id = [];
$cf_id_categoria = [];

$query = mysqli_query($banco, "select * from categoria_filmes");
while ($resultado = mysqli_fetch_assoc($query)) {
    array_push($cf_id, $resultado['categoria_id']);
    array_push($cf_id_categoria, $resultado['filmes_id']);
}
