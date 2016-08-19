<?php

/* Entrada de dados */
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$tipo = $_POST['tipo'];

/* Processamento */
if ($tipo === 1) {
    $nomeDoTipo = 'Visitante';
}
if ($tipo === 2) {
    $nomeDoTipo = 'Consolidacao';
}
if ($tipo === 3) {
    $nomeDoTipo = 'Membro';
}

/* Saida de dados */
echo "$nome <br />";
echo "$telefone <br />";
echo "$nomeDoTipo <br />";