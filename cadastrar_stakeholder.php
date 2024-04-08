<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeStakeholder = $_POST['txtNomeStakeholder'];
$txtDescricaoStakeholder = $_POST['txtDescricaoStakeholder'];

$str_sql_cadastrar_Stakeholder = "INSERT INTO `stakeholder` (`nome`, `descricao`) VALUES ('$txtNomeStakeholder', '$txtDescricaoStakeholder');";

try {
    $cadastrar_stakeholder = mysqli_query($conexao, $str_sql_cadastrar_Stakeholder);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idStakeholder'] = $ultimo_id;
    die('idStakeholder: ' . $_SESSION['idStakeholder']);
} catch (Exception $e) {
    die('Não foi possível cadastrar o stakeholder. Erro: ' . $e->getMessage());
}
?>
