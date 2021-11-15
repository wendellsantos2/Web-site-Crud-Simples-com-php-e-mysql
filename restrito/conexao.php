
<?PHP
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "php";

    

    if ( $conn = mysqli_connect($server, $user, $pass, $bd)) {
        //mensagem("$nome Foi Cadastrado com sucesso ! ", 'success');
        
    } else 
       mensagem("$nome Não foi Cadastrado ! ", 'danger');


    function mensagem($texto, $tipo){
        echo  "<div class ='alert alert-$tipo' role='alert'>
         $texto
         </div>";
    }
    
    function mostra_data($data){
            $d= explode('-', $data);
            $escreve = $d[2] ."/" . $d[1] ."/" .$d[0];
            return $escreve;
    }

  
    /*function mover_foto ($vetor_foto){    
        if (!$vetor_foto){
            $nome_arquivo = date('Ymdhms') .".jpg";
            move_uploaded_file($vetor_foto['tmp_name'],'/img'.$nome_arquivo);
            return $nome_arquivo; 
        }else{
            return 0;
        }
    }
 */
  
    ?> 
