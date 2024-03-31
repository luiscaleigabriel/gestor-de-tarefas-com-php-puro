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
            <label for="descricao">
            Descrição (Opcional): <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
            </label>
            <label for="prazo">
            Prazo (Opcional): <input type="date" name="prazo" id="prazo" />
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="prioridade" id="prioridade" value="1" checked /> Baixa
                    <input type="radio" name="prioridade" id="prioridade" value="2" /> Média
                    <input type="radio" name="prioridade" id="prioridade" value="3" /> Alta
                </label>
            </fieldset>
            <label for="concluida">
                Tarefa concluída: <input type="checkbox" name="concluida" id="concluida" value="sim" />
            </label>
            <div class="form-btn">
                <input class="btn" type="submit" value="Cadastrar" />
            </div>
        </fieldset>

    </form>
    <table>
        <thead>
            <tr>
                <th>Tarefas</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Concluída</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($lista_de_tarefas as $tarefa): ?>
                <tr>
                    <td><?= $tarefa['nome'] ?></td>
                    <td><?= $tarefa['descricao'] ?></td>
                    <td><?= $tarefa['prazo'] ?></td>
                    <td><?= $tarefa['prioridade'] ?></td>
                    <td><?= $tarefa['concluida'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</body>
</html>