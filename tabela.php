<table>
    <thead>
        <tr>
            <th>Tarefas</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($lista_de_tarefas as $tarefa): ?>
            <tr>
                <td><?= $tarefa['nome'] ?></td>
                <td><?= $tarefa['descricao'] ?></td>
                <td><?= traduz_data_para_eibir($tarefa['prazo']) ?></td>
                <td><?= traduz_prioridade($tarefa['prioridade']); ?></td>
                <td><?= $tarefa['concluida'] == 1 ? 'Sim' : 'Não' ?></td>
                <td>
                    <a href="editar.php?id=<?= $tarefa['id']?>">Editar</a> | <a href="remover.php?id=<?= $tarefa['id']?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>