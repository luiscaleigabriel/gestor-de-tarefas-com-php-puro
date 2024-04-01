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