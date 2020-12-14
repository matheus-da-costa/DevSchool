<Strong>Listar Professores</Strong>
<hr>
<?php

    $sql = "SELECT * FROM educador";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<div class='table-responsive'>";
        print "<table class='table table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Tipo</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_educador."</td>";
            print "<td>".$row->nome_educador."</td>";
            print "<td>".$row->email_educador."</td>";
            if($row->tipo_educador==1) {
                $tipo = 'Diretor';
            } else {
                $tipo = 'Professor';
            }
            print "<td>".$tipo."</td>";
            
            print "<td><a href='?p=salvar&acao=id_educador=".$row->id_educador."'></a></td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<div class='alert alert-danger'>Não foi encontrado resultado</div>";
    }

?>