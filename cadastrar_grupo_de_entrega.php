<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeGrupoEntrega = $_POST['txtNomeGrupoEntrega'];
$txtDescricaoGrupoEntrega = $_POST['txtDescricaoGrupoEntrega'];

$str_sql_cadastrar_GrupoEntrega = "INSERT INTO `grupo_de_entrega` (`nome`, `descricao`) VALUES ('$txtNomeGrupoEntrega', '$txtDescricaoGrupoEntrega');";

try {
    $cadastrar_grupo_entrega = mysqli_query($conexao, $str_sql_cadastrar_GrupoEntrega);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idGrupoEntrega'] = $ultimo_id;
    die('idGrupoEntrega: ' . $_SESSION['idGrupoEntrega']);
} catch (Exception $e) {
    die('Não foi possível cadastrar o grupo de entrega. Erro: ' . $e->getMessage());
}
?>
