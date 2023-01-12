<?php include_once './cabecalho.php' ?>
<!-- Java script -->
<script> 

function excluir(id){
    if (confirm('Deseja realmente excluir este cliente?')) {
        location.href="excluir.php?id="+id;
        
    }
}

</script>

<h1>Consulta Cliente</h1>
<hr>
<a href= "index.php" > Voltar </a>
<?php
// abrir a conexão com o banco
include_once './conexao.php';
// montando a instrução de buscar todos os clientes
$sql = "select * from cliente";



//3 - executar a instrução no banco



$result = mysqli_query($con, $sql);
$totalregistro = mysqli_num_rows($result);



if ($totalregistro > 0) {
?>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>telefone</td>
            <td>Data de Cadastro</td>
            <td>Excluir</td>
            <td>Editar</td>



       </tr>



       <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row["idcliente"]; ?></td>
                <td><?php echo $row["nome"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["telefone"]; ?></td>
                <td><?php echo $row["dtcadastro"]; ?></td>
                <!-- a funçao on click é JAVA SCRIPT -->
                <td>

                    <a href="#" onclick="excluir(<?php echo $row["idcliente"]; ?>)">

                            <button class="btn btn-danger">Excluir</button>

                    </a>

                </td>
                <td><a href="editar.php?id=<?php echo $row["idcliente"]; ?>"><button class="btn btn-success">Editar</button></a></td>
            </tr>
    
        <?php
        }
        ?>
    </table>
    
    <?php
    } else {
        echo "Nenhum Registro Cadastrado";
    }
    echo "Total de Registro no banco :" . $totalregistro;
    ?>

    <?php include_once './rodape.php'
    ?>