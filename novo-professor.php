<Strong>Novo Professor</Strong>
<hr>
<div class="row"> 
    <div class="col-lg-12">
        <form action="?p=salvar" method="POST">
            <input type="hidden" name="acao" value="novo-educador">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome_educador" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email_educador" class="form-control">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha_educador" class="form-control">
            </div>
            <div class="form-group">
                <label>Tipo de educador</label>
                <select name="tipo_educador" class="form-control">
                    <option>- Escolha -</option>
                    <option value="1">Diretor</option>
                    <option value="2">Professor</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>