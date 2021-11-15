<?php 
include "./validar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa de Cadastro</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Alteração de Cadastro</title>
  </head>
  <body>
    <?php 
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados  = mysqli_query($conn, $sql);
     $linha =  mysqli_fetch_assoc($dados);
    ?>
     <class class="container">
         <div class="row">
             <div class="col">
               <h1>Cadastro</h1>
                <form action = "edit_script.php" method= "POST">
                <div class="form-control-lg">
                        <label for="Nome" class="form-label">Nome Completo </label>
                        <input type="text" class="form-control"   placeholder="Digite seu nome ..." name="nome"  value ="<?php echo $linha['nome'];?>"/>
                      </div>
                      <div class="form-control-lg">    
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control"   placeholder="Digite seu Endereço ..." name="endereco" value ="<?php echo $linha['endereco'];?>"/>
                      </div>
                      <div class="form-control-lg">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control"   placeholder="Digite seu Telefone ..." name="telefone" value ="<?php echo $linha['telefone'];?>"/>
                      </div>
                      <div class="form-control-lg">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control"   placeholder="Digite seu Email ..." name="email"  value ="<?php echo $linha['email'];?>"/>
                      </div>
                      <div class="form-control-lg">
                        <label for="data_nascimento" class="form-label">Data de nascimento </label>
                        <input type="date" class="form-control"  name="data_nascimento" value ="<?php echo $linha['data_nascimento'];?>"/>
                      </div>
                      <div class="form-control-lg">
                        <input type= "submit" class="btn btn-primary" value="Salvar alterações " > 
                        <input type="hidden" name="id" value ="<?php echo $linha['cod_pessoa'];?>" >
                      </div>
                      </form>
                 </form>
                 <a href="index.php" class = "btn btn-info">Voltar para o inicio </a>
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
</html>