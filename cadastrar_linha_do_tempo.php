<?php
require_once('conexao.php');//chamada de outro arquivo

$txtNomeLinhaDoTempo = $_POST['txtNomeLinhaDoTempo'];
$txtDescricaoLinhaDoTempo = $_POST['txtDescricaoLinhaDoTempo'];

$str_sql_cadastrar_LinhaDoTempo = "INSERT INTO `linha_do_tempo` (`nome`, `descricao`) VALUES ('$txtNomeLinhaDoTempo', '$txtDescricaoLinhaDoTempo');";

try {
    $cadastrar_linha_do_tempo = mysqli_query($conexao, $str_sql_cadastrar_LinhaDoTempo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idLinhaDoTempo'] = $ultimo_id;
    die('idLinhaDoTempo: ' . $_SESSION['idLinhaDoTempo']);
} catch (Exception $e) {
    die('Não foi possível cadastrar a linha do tempo. Erro: ' . $e->getMessage());
}
?>
