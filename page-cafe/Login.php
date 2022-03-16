<?php
include ('conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email'])==0){
        echo "preencha seu email";
    } else if(strlen($_POST['senha'])==0){
        echo "preencha sua senha";
    }
 else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

        $sql_query = $mysqli->query($sql_code) or die("falha na execução do código SQL: ".$mysqli->error);
        $quantidade = $sql_query->num_rows;
        if($quantidade==1){
                $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        header("location:painel.php");
        
        }else{
        echo "falha ao logar! seu email ou senha estão incorretos";
        }
    }
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
    <link href="css-page/style-login.css" rel="stylesheet">
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
    <!--login-->
    <div class="space">
        <div class="login">
            <div class="mb-3">
                <form method="POST" action="">
                <label for="exampleFormControlInput1" class="form-label" >Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" maxlength="30">
                <div class="mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <input type="password" class="form-control" name="senha" id="inputPassword" maxlength="32">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>
            </form>
            </div>
        </div>
    </body>
</html>