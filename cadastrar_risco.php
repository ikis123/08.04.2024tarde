<?php
require_once('conexao.php'); // Chamada de outro arquivo

$txtNomeRisco = $_POST['txtNomeRisco'];
$txtDescricaoRisco = $_POST['txtDescricaoRisco'];

$str_sql_cadastrar_Risco = "INSERT INTO `risco` (`nome`, `descricao`) VALUES ('$txtNomeRisco', '$txtDescricaoRisco');";

try {
    $cadastrar_risco = mysqli_query($conexao, $str_sql_cadastrar_Risco);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRisco'] = $ultimo_id;
    die('idRisco: ' . $_SESSION['idRisco']);
} catch (Exception $e) {
    die('Não foi possível cadastrar o risco. Erro: ' . $e->getMessage());
}
?>
