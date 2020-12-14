<?php
    switch ($_REQUEST["acao"]) {
        case 'novo-aluno':
            $sql = "INSERT INTO aluno (
                nome_aluno, 
                nota1_aluno, 
                nota2_aluno, 
                nota3_aluno,
                nota4_aluno,
                educador_id_educador
                ) VALUES (
                    '".$_POST["nome_aluno"]."',
                    '".$_POST["nota1_aluno"]."',
                    '".$_POST["nota2_aluno"]."',
                    '".$_POST["nota3_aluno"]."',
                    '".$_POST["nota4_aluno"]."',
                    '".$_POST["educador_id_educador"]."'
                )";
            $res = $conn->query($sql) or die($conn->error);

            if($res==true) {
                print "<div class='alert alert-success'>Aluno novo cadastrado com sucesso!</div>";
                print "<script>location.href='?p=listar-alunos';</script>";
            }else{
                print "<div class='alert alert-danger'>Não foi possivel cadastrar novo aluno</div>";
            }
        break;

        case 'novo-educador':
            $sql = "INSERT INTO educador (
                nome_educador, 
                email_educador, 
                senha_educador,
                tipo_educador
                ) VALUES (
                    '".$_POST["nome_educador"]."',
                    '".$_POST["email_educador"]."',
                    '".md5($_POST["senha_educador"])."',
                    '".$_POST["tipo_educador"]."'
                )";
            $res = $conn->query($sql) or die($conn->error);

            if($res==true) {
                print "<div class='alert alert-success'>Educador cadastrado com sucesso!</div>";
                print "<script>location.href='?p=listar-professores';</script>";
            }else{
                print "<div class='alert alert-danger'>Não foi possivel cadastrar novo educador</div>";
            }

        break;

        case 'foto-educador':
            $pasta = "foto/";
            $tmp_name = $_FILES["arquivo"]["tmp_name"];
            $nome = $_FILES["arquivo"]["name"];

            $cod = date("dmYHis") . "-" . $_FILES["arquivo"]["name"];
            $uploadfile = $pasta . basename($cod);

            if(move_uploaded_file($tmp_name, $uploadfile)){
                $sql = "UPDATE educador SET foto_educador='".$cod."' WHERE id_educador= ".$_SESSION["id"];
                $res = $conn->query($sql) or die($conn->error);
                if($res==true){
                    print "<div class='alert alert-success'>Enviado com sucesso!</div>";
                    print "<div class='alert alert-warning'>Para visualizar a foto de perfil é necessário logar outra vez!</div>";
                }else{
                    print "<div class='alert alert-danger'>Não foi possivel enviar foto ao servidor</div>";
                }
            }else {
                print "<div class='alert alert-danger'>Não foi possivel enviar foto</div>";
            }
        break;
        
    }
?>