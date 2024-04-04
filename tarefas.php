<?php

$tem_erros = false;
$erros_validacao = [];

if (tem_post()) {
    $tarefa = [];
    
    if(array_key_exists('nome', $_POST) && strlen($_POST['nome']) > 0) {
        $tarefa['nome'] = $_POST['nome'];
    }else {
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da tarefa é obrigatório!';
    }

    if(array_key_exists('descricao', $_POST)) {
        $tarefa['descricao'] = $_POST['descricao'];
    }else {
        $tarefa['descricao'] = '';
    }

    if(array_key_exists('prazo', $_POST)) {
        $tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);
    }else {
        $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_POST['prioridade'];

    if(array_key_exists('concluida', $_POST)) {
        $tarefa['concluida'] = 1;
    }else {
        $tarefa['concluida'] = 0;
    }

    if(!$tem_erros) {
        gravar_tarefa($conexao, $tarefa);

        if(array_key_exists('lembrete', $_POST) && $_POST['lembrete'] == 1) {
            enviar_email($tarefa);
        }

        header('Location: index.php');
        die();
    }
}

$lista_de_tarefas = [];

$lista_de_tarefas = buscar_tarefas($conexao);
