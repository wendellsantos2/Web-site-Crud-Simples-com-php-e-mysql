<?php 
include "./validar.php";
?>
<!DOCTYPE html>

<html lang="pt-br">
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
                <nav class="navbar navbar-light bg-light static-top ">
                <div class="container">
                <a class="navbar-brand" href="">Empresa de cadastro</a>
                <a class="btn btn-primary" href="index.php">Home</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                        <body>
     <class class="container">
         <div class="row">
             <div class="col">
               <h1>Cadastro</h1>
                <form action = "cadastro_script.php" method= "POST" enctype= "multipart/form-data">
                <div class="form-control-lg">
                        <label for="Nome" class="form-label">Nome Completo </label>
                        <input type="text" class="form-control"   placeholder="Digite seu nome ..." name="nome" required/>
                      </div>
                      <div class="form-control-lg">    
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type=  "text" class="form-control"   placeholder="Digite seu Endereço ..." name="endereco"  required />
                      </div>
                      <div class="form-control-lg">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control"   placeholder="Digite seu Telefone ..." name="telefone"  required />
                      </div>
                      <div class="form-control-lg">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control"   placeholder="Digite seu Email ..." name="email"  required />
                      </div>
                      <div class="form-control-lg">
                        <label for="data_nascimento" class="form-label">Data de nascimento </label>
                        <input type="date" class="form-control"  name="data_nascimento"  required />
                      </div>
                      <!--
                      <div class="form-control-lg">
                        <label for="login" class="form-label">login </label>
                        <input type="text" class="form-control"  name="login" />
                      </div>
                      <div class="form-control-lg">
                        <label for="senha" class="form-label">senha </label>
                        <input type="text" class="form-control"  name="senha" />
                      </div>
-->
                      <div class="form-control-lg">
                        <input type= "submit" class="btn btn-primary" >
                      </div>

                 </form>
                
            </div>
         </div>
     </class>
     
     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
 
                            <!-- Page heading-->
                          <!--  <h1 class="mb-5">Aqui você Cadastra seu Clientes !!</h1>
                            <a class="btn btn-primary" href="pesquisar.php">Pesquise Aqui!!</a>-->
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                             
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                               
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">  
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
  </head>
  
</html>
