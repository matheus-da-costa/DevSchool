<Strong>Listar Alunos</Strong>
<hr>
<?php

    $sql = "SELECT * FROM aluno as al
            INNER JOIN educador as ed
            on al.educador_id_educador = ed.id_educador";
            
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<div class='table-responsive'>";
        print "<table class='table table-bordered'>";
        print "<tr>";
            print "<td>#</th>";
            print "<th>Nome Completo</th>";
            print "<th>Média</th>";
            print "<th>Status</th>";
            print "<th>Professor</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_aluno."</td>";
            print "<td>".$row->nome_aluno."</td>";
            $media_aluno = ($row->nota1_aluno + $row->nota2_aluno + $row->nota3_aluno + $row->nota4_aluno) / 4;
            print "<td>".$media_aluno."</td>";
            if($media_aluno >= 5 ){
                $status = '<i class="fas fa-check text-success"></i>';
            }else{
                $status = '<i class="fas fa-times text-danger"></i>';
            }
            print "<td>".$status."</td>";
            print "<td>".$row->nome_educador."</td>";
            print "<td><a href='?p=salvar&acao=id_aluno=".$row->id_aluno."'></a></td>";
            print "</tr>";
        }
        print "</table>";
        print "</div>";
    } else {
        print "<div class='alert alert-danger'>Não foi encontrado resultado</div>";
    }

?>