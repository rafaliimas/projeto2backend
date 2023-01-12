<?php 

date_default_timezone_set("America/Sao_Paulo"); // Zona onde o sistema vai buscar a data p inserir no $dtcadastro
//Passo 1 -->Resgate de dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dtcadastro = date("Y-m-d"); /* Padrao do banco: Quando ele cadastrar, ele nao vai estar com data.
 Só que se o usuario estiver no japão? P isso, é necessario indicar a zona que o sistema vai buscar a data
*/

//Passo 2 --> Montar a conexao
include_once './conexao.php';

//Passo 3 -->montar a instruçao de gravar ou seja, o sql de gravaçao
/*insert into cliente values (
    null,'ana','ana@gmail.com','2222-2222', '2022-12-17'
); */
$sql = "insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";

//Passo 4 --> Montar o comando para o mysql
if(mysqli_query($con,$sql)){
    $msg = " Gravado com sucesso";
} else{
    $msg = "Erro ao gravar";

}
// Passo 5 --> Fechar conexao com o banco
// O script alert abaixo vai alertar se a conexao foi feita e vai redirecionar o usuario para o index
mysqli_close($con);
echo" <script>
        alert('".$msg."');
        location.href= 'index.php'; 
    </script>";




?>