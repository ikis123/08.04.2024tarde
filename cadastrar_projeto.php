<?php
require_once('conexao.php');//chamda de outro arquivo

$txtNomeProjeto = $_POST['txtNomeProjeto'];
$txtDescricaoProjeto = $_POST['txtDescricaoProjeto'];

$str_sql_cadastrar_Projeto = "insert into `projeto` (`nome`,`descricao`) values
('$txtNomeProjeto', '$txtDescricaoProjeto');";

try {
$cadastrar_projeto = mysqli_query($conexao, $str_sql_cadastrar_projeto);
$ultimo_id = $conexao->insert_id;
$_SESSION['idProjeto'] = $ultimo_id;
die('idProjeto: ' . $_SESSION['idProjeto']);
} catch (Exception) {
    die('Não foi possivel cadastrar o projeto str sql: '.$str_sql_cadastrar_projeto);
}
?>