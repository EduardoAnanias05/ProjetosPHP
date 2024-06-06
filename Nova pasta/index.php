<?php
include 'functions.php';

// Your PHP code here.

// Home Page template below.
?>


<?= template_header('LocEdu') ?>

<div class="container">
    <section>


        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="carousel-img" src="img/Análise de dados dashboard empresa vermelho e roxo.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img id="carousel-img" src="img/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img id="carousel-img" src="img/2.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <div class="row2">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/icon-fabricacao.svg" class="card-img-top" alt="...">
                        <h5 class="card-title">BLOCO A</h5>
                        <p class="card-text">Para Registrar os novos clientes aperte Aqui.</p>
                        <a href="readClientes.php" class="btn btn-outline-dark">LISTAR clientes</a>
                        <a href="cliente.php" class="btn btn-outline-dark">ADD clientes</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body"> 
                    <img src="img/icon-tecnologia.svg" class="card-img-top" alt="...">
                        <h5 class="card-title">BLOCO B</h5>
                        <p class="card-text">Aqui Voce pode gerenciar os Veiculos.</p>
                        <a href="createCarro.php" class="btn btn-outline-danger">Registrar</a>
                        <a href="readCarros.php" class="btn btn-outline-danger">Listar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body"> 
                    <img src="img/icon-administracao.svg" class="card-img-top" alt="...">
                        <h5 class="card-title">BLOCO C</h5>
                        <p class="card-text">Aqui Voce pode gerenciar os Veiculos.</p>
                        <a href="createCarro.php" class="btn btn-outline-danger">Registrar</a>
                        <a href="readCarros.php" class="btn btn-outline-danger">Listar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body"> 
                    <img src="img/icon-eletronica.svg" class="card-img-top" alt="...">
                        <h5 class="card-title">BLOCO D</h5>
                        <p class="card-text">Aqui Voce pode gerenciar os Veiculos.</p>
                        <a href="createCarro.php" class="btn btn-outline-dark">Registrar</a>
                        <a href="readCarros.php" class="btn btn-outline-dark">Listar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= template_footer() ?>
</div>