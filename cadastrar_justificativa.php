<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeJustificativa = $_POST['txtNomeJustificativa'];
$txtDescricaoJustificativa = $_POST['txtDescricaoJustificativa'];

$str_sql_cadastrar_Justificativa = "INSERT INTO `justificativa` (`nome`, `descricao`) VALUES ('$txtNomeJustificativa', '$txtDescricaoJustificativa');";

try {
    $cadastrar_justificativa = mysqli_query($conexao, $str_sql_cadastrar_Justificativa);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idJustificativa'] = $ultimo_id;
    die('idJustificativa: ' . $_SESSION['idJustificativa']);
} catch (Exception $e) {
    die('Não foi possível cadastrar a justificativa. Erro: ' . $e->getMessage());
}
?>
