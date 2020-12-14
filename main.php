<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="jumbotron">
    
        <?php 
        if($_SESSION["tipo"] == '1') {
            $educador = "dir";
        }else{
            $educador = "prof";
        }
        echo "<h1 class= \"display-4\">Bem vindo ".$educador. ". ".$_SESSION["nome"]. "</h1>"; ?>
        <hr>
        <h5 class="display-8">Avisos:</h5>
        <div class="carousel-inner">
            <div class="row">
                <div class="carousel-item active">
                    <div class="col-lg-12 my-12">
                        <div class="card text-white bg-info mb-3" style="width: 500px; height: 300px; margin-left: auto;
                        margin-right: auto; margin-top: 30px;">
                            <div class="card-body">
                                <h5 class="card-title">Reunião dos Professores</h5>
                                <p class="card-text">Prezadores professores, informamos que na data 30/11 será realizado uma renião sobre as notas finais.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-12 my-12">
                        <div class="card text-white bg-primary mb-3" style="width: 500px; height: 300px; margin-left: auto;
                        margin-right: auto; margin-top: 30px;">
                            <div class="card-body">
                                <h5 class="card-title">Confraternização de Fim de Ano</h5>
                                <p class="card-text">Prezadores professores, a confraternização de fim de ano está chegando, cada professor é responsavel pela organização em sua sala.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-12 my-12">
                        <div class="card text-white bg-secondary mb-3" style="width: 500px; height: 300px; margin-left: auto;
                        margin-right: auto; margin-top: 30px;">
                            <div class="card-body">
                                <h5 class="card-title">Lista de Alunos aprovados e reprovados</h5>
                                <p class="card-text">Prezadores professores, a lista de alunos com seu status de aprovação deve ser mandado o mais rápido possível </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
</div>

