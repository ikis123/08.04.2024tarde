<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeEquipe = $_POST['txtNomeEquipe'];
$txtDescricaoEquipe = $_POST['txtDescricaoEquipe'];

$str_sql_cadastrar_Equipe = "INSERT INTO `equipe` (`nome`, `descricao`) VALUES ('$txtNomeEquipe', '$txtDescricaoEquipe');";

try {
    $cadastrar_equipe = mysqli_query($conexao, $str_sql_cadastrar_Equipe);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idEquipe'] = $ultimo_id;
    die('idEquipe: ' . $_SESSION['idEquipe']);
} catch (Exception $e) {
    die('Não foi possível cadastrar a equipe. Erro: ' . $e->getMessage());
}
?>
