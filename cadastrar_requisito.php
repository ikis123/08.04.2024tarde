<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeRequisito = $_POST['txtNomeRequisito'];
$txtDescricaoRequisito = $_POST['txtDescricaoRequisito'];

$str_sql_cadastrar_Requisito = "INSERT INTO `requisito` (`nome`, `descricao`) VALUES ('$txtNomeRequisito', '$txtDescricaoRequisito');";

try {
    $cadastrar_requisito = mysqli_query($conexao, $str_sql_cadastrar_Requisito);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRequisito'] = $ultimo_id;
    die('idRequisito: ' . $_SESSION['idRequisito']);
} catch (Exception $e) {
    die('Não foi possível cadastrar o requisito. Erro: ' . $e->getMessage());
}
?>
