<?php
include_once'./cabecalho.php'
?>

<!-- Como consultar o banco de dados pelo xampp 
1- clicar no shell
2- digitar mysql -u root
3- digitar o nome do banco de dados, nesse projeto, o banco se chama projeto2
 digitar use projeto2;
4- digitar show tables; é com "s" no final mesmo
5- select * from cliente;
-->
    <h1> Menu </h1>
    <hr>
    <a href="cadastrar.php">Cadastrar Cliente</a>
    <br/>
    <a href="consultar.php">Consultar Cliente</a>
    
    <?php include_once './rodape.php'
    ?>