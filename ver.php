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
        width: 60%;
        border-collapse: collapse;
        background-color: #34495e;;
        overflow: hidden; /* To round the corners */
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
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Local</th>
            <th>Criado Em</th>
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
                echo "<tr><td>" . $escrever['id'] . "</td>
                          <td>" . $escrever['descricao'] . "</td>
                          <td>" . $escrever['data'] . "</td>
                          <td>" . $escrever['hora'] . "</td>
                          <td>" . $escrever['local'] . "</td>
                          <td>" . $escrever['criado_em'] . "</td></tr>";
            }

            mysqli_close($conexao);
        ?>
    </table>
    <form action="index.php">
        <button div class="day">Back</button></div>
    </form>
</body>
</html>
