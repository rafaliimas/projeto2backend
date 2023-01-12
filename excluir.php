<?php

//Pegar a ID de quem sera excluido
$id= $_GET["id"];


//fazer a conexao com o banco de dados
include_once './conexao.php';

//montar a instruçao sql apagar
$sql= "delete from cliente where idcliente =".$id;

//executar no banco a acao
// O banco de dados nao emite a mensagem de gravar, sendo assim, vou dar um if p mim saber se foi gravado no banco ou n
if (mysqli_query($con,$sql)) {
    $msg= "excluido com sucesso";
}  else {
    $msg = "Erro ao excluir";
}

// fechar a conexao com o banco
mysqli_close($con);

//retornar para a pagina
echo" <script>
        alert('".$msg."');
        location.href= 'consultar.php'; 
    </script>";



?>