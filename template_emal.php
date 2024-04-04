<h1>Tarefa: <?= $tarefa['nome'] ?></h1>

<p>
    <strong>Concluída:</strong>
    <?= traduz_concluida($tarefa['concluida']) ?>
</p>

<p>
    <strong>Descrição:</strong>
    <?= nl2br($tarefa['descricao']) ?>
</p>

<p>
    <strong>Prazo:</strong>
    <?= traduz_data_para_eibir($tarefa['prazo']) ?>
</p>

<?php if(count($anexos) > 0): ?>
    <p>Atensão: <strong>essa tarefa contém anexos</strong></p>
<?php endif; ?>

<p>
    Tenha um bom dia
</p>