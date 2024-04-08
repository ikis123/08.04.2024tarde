<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeBeneficios = $_POST['txtNomeBeneficios'];
$txtDescricaoBeneficios = $_POST['txtDescricaoBeneficios'];

$str_sql_cadastrar_Beneficios = "INSERT INTO `beneficios` (`nome`, `descricao`) VALUES ('$txtNomeBeneficios', '$txtDescricaoBeneficios');";

try {
    $cadastrar_beneficios = mysqli_query($conexao, $str_sql_cadastrar_Beneficios);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idBeneficios'] = $ultimo_id;
    die('idBeneficios: ' . $_SESSION['idBeneficios']);
} catch (Exception $e) {
    die('Não foi possível cadastrar os benefícios. Erro: ' . $e->getMessage());
}
?>
