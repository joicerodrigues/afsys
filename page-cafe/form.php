<?php
include_once('conexao.php');
$data = $_POST;

if(!isset($data['nome']) || !isset($data['email']) || !isset($data['texto']) ) {
   
  }else{
    $nome = $data['nome'];
    $email = $data['email'];
    $texto = $data['texto'];
    echo ("passei aqui");
        $sql_code = "INSERT INTO form (nome, email, texto) VALUES('$nome', '$email', '$texto')";
        
        $sql = mysqli_query($mysqli, $sql_code);

        }
    
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
    <link href="css-page/style.css" rel="stylesheet">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Outros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="Login.php">Login</a></li>
                      <li><a class="dropdown-item" href="cadastrar.php">Cadastrar</a></li>
                    </ul>
                  </li>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </nav>
    <!--end-navbar-->
    <div class="space">

        <div class="container">
            <!--form-->
        <form class="row g-3" method="POST">
            <div class="col-md-6">
                <div class="form" action="" >
                    <div class="row g-3">
                        <div class="col">
                            <label for="first-name" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="First name" aria-label="First name" required>
                        </div>
                        <div class="col">
                            <label for="last-name" class="form-label">Sobrenome</label>
                            <input type="text" name="sobrenome" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="name@exemple.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Sua mensagem</label>
                        <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="valida">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>

</html>