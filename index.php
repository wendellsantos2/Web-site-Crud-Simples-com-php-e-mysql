
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Empresa de Cadastro</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">Empresa de cadastro</a>
                <a class="btn btn-primary" href="home.php">Cadastro login</a>
            </div>
        </nav>
        <!-- LAYOUT Login-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Bem vindo ao Cadastro do Dell!</h1>
                            <!-- Signup form-->
                            
                            <form action="index.php" method = "POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Login</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name= "login" >
                                        <div name= "login" class="form-text">Entre com seus dados de acesso.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Senha</label>
                                        <input type="password" class="form-control" name="senha">
                                    </div>
                                  <!--  <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>-->
                                 
                                    <button type="submit" class="btn btn-primary">Acessar</button>
                            </form>
                        
                      
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            </form>
                            <?php 
                                    
                                    if (isset($_POST['login'])){
                                        $login = $_POST['login'];
                                        $senha = md5($_POST['senha']);
                                      
                                         include "./restrito/conexao.php";
                                       $sql = "SELECT  * from `usuarios` WHERE login = '$login' and `senha` = '$senha'";
                                     
                                       
                                       if ($result = mysqli_query($conn, $sql)) {
                                        $num_registros = mysqli_num_rows($result);
                                        if ($num_registros == 1 ) {
                                            $linha = mysqli_fetch_assoc($result);

                                            if (($login == $linha ['login']) || ($senha == $linha['senha'] )){
                                                session_start();
                                                $_SESSION['login'] = "admin";
                                                
                                                header("Location:restrito/index.php"); 
                                            }
                                             
                                       
                                        }else{
                                            echo   "login inválido ou este usuario não existe.";
                                        }
                                        }
                                    
                                       }
                                      
                                      
                                    
                                    ?>
                        </div>
                    </div>
                </div>
            </div>
        <!--Jquery-->
    <script src="php/restrito/js/main.js"></script>
    <script src="./js/owl.carousel.min.js"></script>

    <!--Magnific-Popup js-->
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <!--ISOTOPE-->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
     
    <script src="js/main.js"></script>
  </body>
</html>