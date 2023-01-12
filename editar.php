<?php




$id = $_GET["id"];

// abrir conexão com o banco de dados



include_once'./conexao.php';





// montar a instrução para ir ao banco de dados



$sql = "select * from cliente where idcliente =".$id;







$r = mysqli_query($con,$sql);





$row = mysqli_fetch_array($r);







?>



<h1> Atualizar dados de clientes</h1>




<form action="atualizar.php" method="post">

Nome:<br/>

<input type="hidden" name="id" id="" value="<?php echo $row["idcliente"]; ?>">



<br/>

<input type="text" name="nome" id="" value="<?php echo $row["nome"]; ?>">



<br/><br/>



E-mail:<br/>



<input type="text" name="email" id=""value="<?php echo $row["email"]; ?>">



<br/><br/>



Telefone:<br/>



<input type="text" name="telefone" id=""value="<?php echo $row["telefone"]; ?>">



<br/><br/>



Dtcadastro:<br/>



<input type="text" name="telefone" id=""value="<?php echo $row["dtcadastro"]; ?>">



<br/><br/>



<input type="submit" value="Atualizar ">



</form>

<?php

include_once'./rodape.php';

?>