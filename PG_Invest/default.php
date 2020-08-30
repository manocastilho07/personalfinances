<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Investimentos";
    include("../includes/Est_SEO.php");
    ?>
</head>
<body>
    <header>
        <?php include("../includes/header.php") ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="topo col-sm-8">
                    <a href="../index.php">
                        <button type="button" class="btnVoltar">Voltar</button>
                    </a>
                </div>
                <div class="topo col-sm-4">
                    <h3>Insira aqui o valor, data e uma legenda:</h3>
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <div class="col-4">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control"/>
                    </div>
                </div>            
            </div>

            <div class="row">
                <div class="input-group">
                    <div class="col-8">
                        <textarea class="form-control" type="text"></textarea>
                    </div>
                </div>    
            </div>

            <div class="row">
                <h2>Visão geral de investimentos:</h2>
                <div class="botaoAno btn-group">
                    <button type="button" class="btn btn-info">Ano</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">2020</a>
                        <a class="dropdown-item" href="#">2019</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include("historico.php");?>
            </div>
        </div>
    </main>
</body>
</html>