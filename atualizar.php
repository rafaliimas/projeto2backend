<?php



$id = $_POST["id"];

$nome = $_POST["nome"];

$email = $_POST["email"];

$telefone = $_POST["telefone"];

$dtcadastro = date("Y-m-d");

include_once'./conexao.php';




$sql = "update cliente set nome ='".$nome."',

email = '".$email."',

telefone = '".$telefone."' where idcliente =".$id;




if(mysqli_query($con,$sql)){

    $msg = "Atualizado com sucesso";  

  }else{

    $msg = "erro ao atualizar";

  }

  mysqli_close($con);

  echo"<script>

  alert('".$msg."');

  location.href='consultar.php';

  </script>"

?>