<?php

require	"config.php";
require './banco.php';
require './ajudantes.php';

$anexo = buscar_anexo($conexao, $_GET['id']);
remover_anexo($conexao, $anexo['id']);
unlink('anexos/'.$anexo['anexo']);

header('Location: tarefa.php?id='.$anexo['tarefa_id']);