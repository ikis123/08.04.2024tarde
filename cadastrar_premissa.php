<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomePremissa = $_POST['txtNomePremissa'];
$txtDescricaoPremissa = $_POST['txtDescricaoPremissa'];

$str_sql_cadastrar_Premissa = "INSERT INTO `premissa` (`nome`, `descricao`) VALUES ('$txtNomePremissa', '$txtDescricaoPremissa');";

try {
    $cadastrar_premissa = mysqli_query($conexao, $str_sql_cadastrar_Premissa);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idPremissa'] = $ultimo_id;
    die('idPremissa: ' . $_SESSION['idPremissa']);
} catch (Exception $e) {
    die('Não foi possível cadastrar a premissa. Erro: ' . $e->getMessage());
}
?>
