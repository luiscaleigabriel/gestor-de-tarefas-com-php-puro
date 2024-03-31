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

    <?php require('./formulario.php') ?>

    <?php if($exibir_tabela): ?>
        <?php require('./tabela.php') ?>
    <?php endif; ?>

    <?= $btn_voltar == true ? '<a class="btn-voltar" href="index.php">Voltar</a>' : '' ?>

</body>
</html>