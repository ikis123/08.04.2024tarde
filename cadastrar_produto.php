<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeProduto = $_POST['txtNomeProduto'];
$txtDescricaoProduto = $_POST['txtDescricaoProduto'];

$str_sql_cadastrar_Produto = "INSERT INTO `produto` (`nome`, `descricao`) VALUES ('$txtNomeProduto', '$txtDescricaoProduto');";

try {
    $cadastrar_produto = mysqli_query($conexao, $str_sql_cadastrar_Produto);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idProduto'] = $ultimo_id;
    die('idProduto: ' . $_SESSION['idProduto']);
} catch (Exception $e) {
    die('Não foi possível cadastrar o produto. Erro: ' . $e->getMessage());
}
?>
