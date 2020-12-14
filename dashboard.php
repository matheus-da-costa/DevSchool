<?php
    session_start();
    if(empty($_SESSION) ) {
        print "<script>location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <title>Escola Intermediária</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="dashboard.php"><i class="fas fa-graduation-cap"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item dropdown ">
  	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
			            data-toggle= dropdown aria-haspopup="true" aria-expanded="false">
  	                    Alunos
  	                </a>
  	                <div class= dropdown-menu aria-labelledby="navbarDropdown">
                        <a class= dropdown-item href="?p=listar-alunos">Listar Alunos</a>
                        <a class= dropdown-item href="?p=novo-aluno">Novo Aluno</a>
                    </div>
                </li>
                <?php if($_SESSION["tipo"]=='1'): ?>
                    <li class="nav-item dropdown ">
  	                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
			                data-toggle= dropdown aria-haspopup="true" aria-expanded="false">
  	                        Professores
  	                    </a>
  	                    <div class= dropdown-menu aria-labelledby="navbarDropdown">
                            <a class= dropdown-item href="?p=listar-professores">Listar Professores</a>
                            <a class= dropdown-item href="?p=novo-professor">Novo Professor</a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
            <?php 
                if($_SESSION["foto"]==NULL){
                    print "<a class='nav-link text-light' href='?p=upload'>Foto</a>";
                } else {
                    print "<img src='foto/".$_SESSION["foto"]."'class='rounded-circle' 
                    style='max-width: 40px; max-height: 40px'>";
                }
            ?>
			<form class="form-inline my-2 my-lg-0" action="logout.php">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Sair</button>
            </form>
        </div>
    </nav>

    <div class="container my-5">
       <?php 

        include("config.php");

        switch (@$_REQUEST["p"]) {
            case 'novo-aluno':
                include("novo-aluno.php");
                break;
            case 'listar-alunos':
                include("listar-alunos.php");
                break;
            case 'listar-professores':
                include("listar-professores.php");
                break;
            case 'novo-professor':
                include("novo-professor.php");
                break;
            case 'salvar':
                include("salvar.php");
                break;
            case 'upload':
                include("upload.php");
                break;
            default:
                include("main.php");
        }
       ?>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
