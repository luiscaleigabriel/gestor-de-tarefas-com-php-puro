<?php

$hostName = 'localhost';
$userName = 'root';
$password = '';
$bdName = 'tarefas';

$conexao = mysqli_connect($hostName, $userName, $password, $bdName);

if(mysqli_connect_errno()) {
    echo "Problemas para conectar ao banco. Erro: ";
    echo mysqli_connect_error();
    die();
}

function buscar_tarefas($conexao) {

    $sql = 'select * from `tarefas`';
    $resultado = mysqli_query($conexao, $sql);

    $tarefas = [];

    while($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;    
    }

    return $tarefas;

}

function gravar_tarefa($conexao, $tarefa) {
    $sql = "insert into tarefas (nome, descricao, prioridade) values ('{$tarefa['nome']}', '{$tarefa['descricao']}', '{$tarefa['prioridade']}')";
    mysqli_query($conexao, $sql);
}