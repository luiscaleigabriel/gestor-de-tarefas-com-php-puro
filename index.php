<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Gestor de Tarefas</title>
</head>
<body>
    
    <h1>Gerenciador de Tarefas</h1>

    <form action="">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="nome">
            Tarefa: <input type="text" name="nome" id="nome" />
            </label>
            <input class="btn" type="submit" value="Cadastrar" />
        </fieldset>
    </form>

    <?php 

        if (array_key_exists('nome', $_GET)) {
            $_SESSION['lista_de_tarefas'][] = $_GET['nome'];
        }

        $lista_de_tarefas = [];

        if(array_key_exists('lista_de_tarefas', $_SESSION)) {
            $lista_de_tarefas = $_SESSION['lista_de_tarefas'];
        }

    ?>

    <table>
        <thead>
            <tr>
                <th>Tarefas</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($lista_de_tarefas as $tarefa): ?>
                <tr>
                    <td><?= $tarefa ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</body>
</html>