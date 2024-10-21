<?php
// Conexão com o banco de dados
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "agenda";
$conexao = mysqli_connect($host, $user, $pass, $base);

if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Receber o ID do evento a ser excluído
$id = $_POST['id'];

// Preparar e executar a exclusão no banco de dados
$query = "DELETE FROM compromissos WHERE id = '$id'";

if (mysqli_query($conexao, $query)) {
    // Redireciona para a página de compromissos com uma mensagem de sucesso
    header("Location: ver.php?success=Evento excluído com sucesso!");
} else {
    // Caso haja erro na exclusão, redireciona com uma mensagem de erro
    header("Location: ver.php?error=Erro ao excluir o evento.");
}

mysqli_close($conexao);
?>
