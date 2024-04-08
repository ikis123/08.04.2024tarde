<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeRestricao = $_POST['txtNomeRestricao'];
$txtDescricaoRestricao = $_POST['txtDescricaoRestricao'];

$str_sql_cadastrar_Restricao = "INSERT INTO `restricao` (`nome`, `descricao`) VALUES ('$txtNomeRestricao', '$txtDescricaoRestricao');";

try {
    $cadastrar_restricao = mysqli_query($conexao, $str_sql_cadastrar_Restricao);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRestricao'] = $ultimo_id;
    die('idRestricao: ' . $_SESSION['idRestricao']);
} catch (Exception $e) {
    die('Não foi possível cadastrar a restrição. Erro: ' . $e->getMessage());
}
?>
