<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeObjetivoSmart = $_POST['txtNomeObjetivoSmart'];
$txtDescricaoObjetivoSmart = $_POST['txtDescricaoObjetivoSmart'];

$str_sql_cadastrar_ObjetivoSmart = "INSERT INTO `objetivo_smart` (`nome`, `descricao`) VALUES ('$txtNomeObjetivoSmart', '$txtDescricaoObjetivoSmart');";

try {
    $cadastrar_objetivo_smart = mysqli_query($conexao, $str_sql_cadastrar_ObjetivoSmart);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idObjetivoSmart'] = $ultimo_id;
    die('idObjetivoSmart: ' . $_SESSION['idObjetivoSmart']);
} catch (Exception $e) {
    die('Não foi possível cadastrar o objetivo SMART. Erro: ' . $e->getMessage());
}
?>
