<?php

session_start();
require	"./banco.php";
require	"./ajudantes.php";
$exibir_tabela	=	false;
$btn_voltar = true;

if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $tarefa = [];
    $tarefa['nome'] = $_GET['nome'];

    $tarefa['id'] = $_GET['id']; 

    if(array_key_exists('descricao', $_GET)) {
        $tarefa['descricao'] = $_GET['descricao'];
    }else {
        $tarefa['descricao'] = '';
    }

    if(array_key_exists('prazo', $_GET)) {
        $tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
    }else {
        $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if(array_key_exists('concluida', $_GET)) {
        $tarefa['concluida'] = 1;
    }else {
        $tarefa['concluida'] = 0;
    }

    editar_tarefa($conexao, $tarefa);
    header('Location: index.php');
    die();
}

$tarefa = buscar_tarefa($conexao, $_GET['id']);

require './tamplete.php';