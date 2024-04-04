<form method="POST">
    <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
    <fieldset>
        <legend>Nova Tarefa</legend>
        <label for="nome">
        Tarefa: <span class="error"><?= $tem_erros ? $erros_validacao['nome'] : '' ?></span> 
        <input class="<?= ($tem_erros && array_key_exists('nome', $erros_validacao)) ? 'errorform' : '' ?>" type="text" name="nome" id="nome" value="<?= $tarefa['nome'] ?>" />
        </label>
        <label for="descricao">
        Descrição (Opcional): <textarea name="descricao" id="descricao" cols="30" rows="6" ><?= $tarefa['descricao'] ?></textarea> 
        </label>
        <label for="prazo">
        Prazo (Opcional): <input type="date" name="prazo" id="prazo" value="<?= $tarefa['prazo'] == '1000-01-01' ? '' : $tarefa['prazo'] ?>" />
        </label>
        <fieldset>
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" id="prioridade" value="1"  <?= $tarefa['prioridade'] == 1 ? 'checked' : 'checked' ?>/> Baixa
                <input type="radio" name="prioridade" id="prioridade" value="2" <?= $tarefa['prioridade'] == 2 ? 'checked' : '' ?> /> Média
                <input type="radio" name="prioridade" id="prioridade" value="3" <?= $tarefa['prioridade'] == 3 ? 'checked' : '' ?> /> Alta
            </label>
        </fieldset>
        <label for="concluida">
            Tarefa concluída: <input type="checkbox" name="concluida" id="concluida" <?= $tarefa['concluida'] == 1 ? 'checked' : '' ?> />
        </label>
        <label>
				Lembrete por e-mail:
				<input type="checkbox" name="lembrete" value="1" />
        </label>
        <div class="form-btn">
            <input class="btn" type="submit" value="<?= $tarefa['id'] > 0 ? 'Atualizar' : 'Cadastrar' ?>" />
        </div>
    </fieldset>
</form>