<?php 

session_start();

require('./banco.php');
include('./ajudantes.php');

$exibir_tabela = true;
$btn_voltar = false;

require('./tarefas.php');

$tarefa	=	[
    'id' =>	0,
    'nome' => '',
    'descricao' => '',
    'prazo' => '',
    'prioridade' =>	1,
    'concluida' =>	''
];

require('./tamplete.php');
