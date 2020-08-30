<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <?php
    $title = "Home"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title><?=$title;?></title>
</head>
<body>
    <?php include("./includes/header.php") ?>
    <main>
        <div class="container">
            <div class="row">
                    <div class="question">
                    
                        <h3>Para onde você deseja ir?</h3>
                        
                    </div>
            </div>
            <div class="row"> 
                <div class="col">
                    <div class="gastos">                 
                        <a href="./PG_Gastos/default.php">
                            <button type="button" name="Gastos" id="Gastos" class="btnIndex">Gastos Mensais</button>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="invest">
                        <a href="./PG_Invest/default.php">
                            <button type="button" name="Investimentos" id="Investimentos" class="btnIndex">Investimentos</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overall">
                    <a href="./PG_Overall/default.php">
                        <button type="button" name="Overall" id="Overall" class="btnIndex">Overall</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>