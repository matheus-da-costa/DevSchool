
<Strong>Novo Aluno</Strong>
<hr>
<div class="row"> 
    <div class="col-lg-12">
        <form action="?p=salvar" method="POST">
            <input type="hidden" name="acao" value="novo-aluno">
            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" name="nome_aluno" class="form-control">
            </div>
            <div class="form-group">
                <label>Primeiro Bimestre</label>
                <input type="number" name="nota1_aluno" class="form-control">
            </div>
            <div class="form-group">
                <label>Segundo Bimestre</label>
                <input type="number" name="nota2_aluno" class="form-control">
            </div>
            <div class="form-group">
                <label>Terceiro Bimestre</label>
                <input type="number" name="nota3_aluno" class="form-control">
            </div>
            <div class="form-group">
                <label>Quarto Bimestre</label>
                <input type="number" name="nota4_aluno" class="form-control">
            </div>
            <?php ?>
            <div class="form-group">
                <label>Professor</label>
                <select name="educador_id_educador" class="form-control">
                    <option>- Escolha -</option>
                    <?php 
                        $sql = "SELECT * FROM educador";
                        $res = $conn->query($sql) or die($conn->error);
                        if($_SESSION["tipo"] == '1') {
                            while($row = $res->fetch_object()) {
                                if($row->tipo_educador == '2') {
                                    print '<option value="'.$row->id_educador.'">'.$row->nome_educador.'</option>';
                                }
                            
                            }
                        } else {
                            print '<option value="'.$_SESSION["id"].'">'.$_SESSION["nome"].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>