<?php 
include "./validar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href=".css/estilo.css">
    <title>Cadastro</title>
  </head>
  <body>
     <class class="container">
         <div class="row">
            <?php 

            include "conexao.php";

           
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];
            //$foto= isset( $_FILES['foto'] ) ? $_FILES['foto'] : null;
           // $nome_foto = mover_foto($foto);
           
 
            

           $sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email` , `data_nascimento`) 
           VALUES ('$nome','$endereco','$telefone','$email', '$data_nascimento' )";
      

         if(mysqli_query($conn, $sql)){  
           
         // echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";

         header('Location: index.php');
         }else{
          echo   "login inválido ou este usuario não existe.";
      }
         
      
          
            ?>
            <a href="index.php" class="btn btn-primary">Voltar para o inicio</a>
            
         </div>
     </class>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
