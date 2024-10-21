<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compromissos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c3e50; 
            color: #ecf0f1; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: #34495e;
            overflow: hidden;
            border-radius: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #34495e;
        }

        button {
            background-color: #e74c3c;
            border: none;
            padding: 5px 10px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #c0392b;
        }

        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .success {
            background-color: #2ecc71;
            color: white;
        }

        .error {
            background-color: #e74c3c;
            color: white;
        }

        .header {
            grid-column: span 7;
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 10px;
        }

        .day {
            background-color: #3498db;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .day:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Compromissos</h1>

    <!-- Exibe a mensagem de sucesso ou erro -->
    <?php if (isset($_GET['success'])): ?>
        <div class="message success"><?= htmlspecialchars($_GET['success']); ?></div>
    <?php elseif (isset($_GET['error'])): ?>
        <div class="message error"><?= htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Local</th>
            <th>Criado Em</th>
            <th>Ação</th>
        </tr>
        <?php
            $host = "localhost:3306";
            $user = "root";
            $pass = "";
            $base = "agenda";
            $conexao = mysqli_connect($host, $user, $pass, $base);

            if (!$conexao) {
                die("Erro de conexão: " . mysqli_connect_error());
            }

            $resultadoQueryMySQL = mysqli_query($conexao, "SELECT * FROM compromissos");

            while ($escrever = mysqli_fetch_array($resultadoQueryMySQL)) {
                echo "<tr>
                        <td>" . $escrever['id'] . "</td>
                        <td>" . $escrever['descricao'] . "</td>
                        <td>" . $escrever['data'] . "</td>
                        <td>" . $escrever['hora'] . "</td>
                        <td>" . $escrever['local'] . "</td>
                        <td>" . $escrever['criado_em'] . "</td>
                        <td><form action='delete.php' method='POST'>
                            <input type='hidden' name='id' value='" . $escrever['id'] . "'>
                            <button type='submit'>Excluir</button>
                        </form></td>
                    </tr>";
            }

            mysqli_close($conexao);
        ?>
    </table> <br><br>

    <form action="index.php" method="GET">
        <button type="submit" class="day">Voltar</button>
    </form>
</body>
</html>
