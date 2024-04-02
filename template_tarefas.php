<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Gestor de Tarefas</title>
</head>
<body>
    
    <div class="bloco-principal">
        <h1>Tarefa: <?= $tarefa['nome'] ?></h1>
        <p>
            <a href="index.php">
                Voltar para a lista de tarefas
            </a>
        </p>
        <p>
            <strong>Concluida:</strong>
            <?= traduz_concluida($tarefa['concluida']) ?>
        </p>
        <p>
            <strong>Descrição:</strong>
            <?= nl2br($tarefa['descricao']) ?>
        </p>
        <p>
            <strong>Prioridade:</strong>
            <?= traduz_prioridade($tarefa['prioridade']) ?>
        </p>
        <h2>Anexos</h2>
        <?php if(count($anexos) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Arquivo</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($anexos as $anexo): ?>
                        <tr>
                            <td><?= $anexo['nome'] ?></td>
                            <td>
                                <a href="anexos/<?= $anexo['anexo'] ?>">Baixar anexo</a> | 
                                <a href="remover_anexo.php?id=<?= $anexo['id'] ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Não a anexos para está tarefa</p>
        <?php endif; ?>

        <h2>Novo anexo</h2>
        <form method="POST" enctype="multipart/form-data" >
            <fieldset>
                <legend>Novo Anexo</legend>
                <input type="hidden" name="tarefa_id" value="<?= $tarefa['id'] ?>" />
                <label for="anexo">
                    Anexo: <span class="error"><?= $tem_erros ? $erros_validacao['anexo'] : '' ?></span> 
                    <input type="file" name="anexo" id="anexo" />
                </label>
                <div class="form-btn">
                    <input class="btn" type="submit" value="Cadastrar" />
                </div>
            </fieldset>
        </form>
    </div>

</body>
</html>