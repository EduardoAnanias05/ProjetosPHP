<?php function template_header($title)
{
    echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

        <body> 

        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <img id="logo" src="/img/SENAI_São_Paulo_logo.png" alt="Logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse"> 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Registra <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
            </nav>

            <div class="nav2">
                <a href="cadastroFuncionario.php">Alugar</a>
                <a href="#catalago">Catálago</a>
                <a href="">Contato</a>
                <a href="">Sobre</a>
            </div>

            

        </body>
</html>
EOT;
}
function template_footer()
{
    echo <<<EOT
    </body>
</html>
EOT;
}
