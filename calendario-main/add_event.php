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

// Receber os dados do formulário
$dia = $_POST['dia'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$local = $_POST['local'];
$descricao = $_POST['descricao'];

// Preparar e executar a inserção no banco de dados
$query = "INSERT INTO compromissos (descricao, data, hora, local) 
          VALUES ('$descricao', '$data', '$hora', '$local')";

if (mysqli_query($conexao, $query)) {
    // Sucesso: redireciona para o calendário ou página de compromissos
    header("Location: index.php?success=Evento criado com sucesso!");
    exit();
} else {
    // Erro: redireciona para a página com um erro
    header("Location: index.php?error=Erro ao criar o evento.");
    exit();
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
