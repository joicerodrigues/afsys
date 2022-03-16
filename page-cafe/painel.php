<?php
require("conexao.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="css-page/style-painel.css" rel="stylesheet">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-black bg-black">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-black bg-black">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="Untitled-1.html">Home</a>
                            <a class="nav-link" href="form.php">Fale conosco</a>
                            <a class="nav-link" href="form.php">Busque</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Outros
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="painel.php">Painel</a></li>
                                    <li><a class="dropdown-item" href="produtos.html">Produtos</a></li>
                                </ul>
                            </li>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <!--end-navbar-->
    
<div class="container">
<div class="container-fluid mt-3">
<h2> Produtos </h2>
<div class="card">
 <div class="card-body">
   <form action="gravar.php" method="POST" enctype="multipart/form-data">
<input type="file" name="arquivo">
<input type="submit" value="enviar">
</form>
</div>
</div>
    <h6> arquivos enviados</h6>
    <?php
    require 'listar.php';
    ?>
</div>
        </body>         
</html>