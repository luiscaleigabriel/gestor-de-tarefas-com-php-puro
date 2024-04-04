<?php 

session_start();

require	"config.php";
require('./banco.php');
include('./ajudantes.php');

$exibir_tabela = true;
$btn_voltar = false;

require('./tarefas.php');

$tarefa	=	[
    'id' =>	0,
    'nome' => (array_key_exists('nome', $_POST) ? $_POST['nome'] : ''),
    'descricao' => (array_key_exists('descricao', $_POST) ? $_POST['descricao'] : ''),
    'prazo' => (array_key_exists('prazo', $_POST) ? $_POST['prazo'] : ''),
    'prioridade' =>	(array_key_exists('prioridade', $_POST) ? $_POST['prioridade'] : ''),
    'concluida' =>	(array_key_exists('concluida', $_POST) ? $_POST['concluida'] : '')
];

require('./tamplete.php');
