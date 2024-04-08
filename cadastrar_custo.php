<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeCusto = $_POST['txtNomeCusto'];
$txtDescricaoCusto = $_POST['txtDescricaoCusto'];

$str_sql_cadastrar_Custo = "INSERT INTO `custo` (`nome`, `descricao`) VALUES ('$txtNomeCusto', '$txtDescricaoCusto');";

try {
    $cadastrar_custo = mysqli_query($conexao, $str_sql_cadastrar_Custo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idCusto'] = $ultimo_id;
    die('idCusto: ' . $_SESSION['idCusto']);
} catch (Exception $e) {
    die('Não foi possível cadastrar o custo. Erro: ' . $e->getMessage());
}
?>
