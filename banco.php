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

// Tarefas

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
    $sql = "insert into tarefas (nome, descricao, prazo, prioridade, concluida) values ('{$tarefa['nome']}', '{$tarefa['descricao']}', '{$tarefa['prazo']}', '{$tarefa['prioridade']}', {$tarefa['concluida']})";
    mysqli_query($conexao, $sql);
}

function buscar_tarefa($conexao, $id) {
    $sql = "select * from `tarefas` where id = $id";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}

function editar_tarefa($conexao, $tarefa) {

    $sql = "UPDATE	tarefas	SET
    nome = '{$tarefa['nome']}',
    descricao = '{$tarefa['descricao']}',
    prioridade = {$tarefa['prioridade']},
    prazo = '{$tarefa['prazo']}',
    concluida = {$tarefa['concluida']}
    WHERE id = {$tarefa['id']}";

    mysqli_query($conexao, $sql);
}

function remover_tarefa($conexao, $id) {
    $sql = "delete from `tarefas` where id = $id";
    mysqli_query($conexao, $sql);
}

// Anexos

function gravar_anexo($conexao, $anexo) {
    $sql = "insert into anexos (tarefa_id, nome, anexo) values ('{$anexo['tarefa_id']}', '{$anexo['nome']}', '{$anexo['anexo']}')";

    mysqli_query($conexao, $sql);
}

function buscar_anexos($conexao, $id) {
    $sql = 'select * from `anexos`';
    $resultado = mysqli_query($conexao, $sql);

    $anexos = [];

    while($anexo = mysqli_fetch_assoc($resultado)) {
        $anexos[] = $anexo;    
    }

    return $anexos;
}

function remover_anexo($conexao, $id) {
    $sql = "delete from `anexos` where id = $id";
    mysqli_query($conexao, $sql);
}

function buscar_anexo($conexao, $id) {
    $sql = "select * from `anexos` where id = $id";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}