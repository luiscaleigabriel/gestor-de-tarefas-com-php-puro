<?php

function traduz_prioridade($codigo) {

    $prioridade = '';

    switch($codigo) {
        case 1:
            $prioridade =  "Baixa";
        break;
        case 2:
            $prioridade = "Média";
        break;
        case 3:
            $prioridade = "Alta";
        break;
    }

    return $prioridade;
}

function traduz_concluida($codigo) {

    $concluida = '';

    switch($codigo) {
        case 0:
            $concluida =  "Sim";
        break;
        case 1:
            $concluida = "Não";
        break;
    }

    return $concluida;
}

function traduz_data_para_banco($data) {

    if($data == '') {
        $data = '1000-01-01';
    }

    return $data;
}

function traduz_data_para_eibir($data) {

    if($data == '' || $data == '1000-01-01') {
        return '';
    }

    $data = DateTime::createFromFormat('Y-m-d', $data);
    
    return $data->format('d/m/Y');
}

function tem_post() {
    if(count($_POST) > 0) {
        return true;
    }

    return false;
}

function tratar_anexo($anexo) {
    $padrao = '/^.+(\.pdf|\.zip)$/';
    $resultado = preg_match($padrao, $anexo['name']);

    if($resultado == 0) {
        return false;
    }

    move_uploaded_file(
        $anexo['tmp_name'],
        "anexos/{$anexo['name']}"
    );

    return true;
}

function enviar_email($tarefa, $anexos = []) {
    
}

function preparar_corpo_do_email($tarefa, $anexos = []) {

    ob_start();
    include './template_emal.php';
    $corpo =  ob_get_contents();
    ob_end_clean();

    return $corpo;

}