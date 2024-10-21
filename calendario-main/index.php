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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
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

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
        }

        .day {
            background-color: #3498db;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .day:hover {
            background-color: #2980b9;
        }

        .header {
            grid-column: span 7;
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 10px;
        }

        .form-container {
            margin-top: 20px;
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
        }

        .form-container input,
        .form-container select {
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            width: 100%;
            font-size: 1rem;
        }

        button {
            width: 100%;
            background-color: #2980b9;
            border: none;
            padding: 10px;
            color: #ecf0f1;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3498db;
        }
    </style>
</head>
<body>
    <h1>Calendário de Outubro 2024</h1>
    
    <div class="calendar">
        <div class="header">Outubro 2024</div>
        <div>Dom</div>
        <div>Seg</div>
        <div>Ter</div>
        <div>Qua</div>
        <div>Qui</div>
        <div>Sex</div>
        <div>Sáb</div>

        <!-- Dias do mês de Outubro -->
        <div class="day" data-day="1">1</div>
        <div class="day" data-day="2">2</div>
        <div class="day" data-day="3">3</div>
        <div class="day" data-day="4">4</div>
        <div class="day" data-day="5">5</div>
        <div class="day" data-day="6">6</div>
        <div class="day" data-day="7">7</div>
        <div class="day" data-day="8">8</div>
        <div class="day" data-day="9">9</div>
        <div class="day" data-day="10">10</div>
        <div class="day" data-day="11">11</div>
        <div class="day" data-day="12">12</div>
        <div class="day" data-day="13">13</div>
        <div class="day" data-day="14">14</div>
        <div class="day" data-day="15">15</div>
        <div class="day" data-day="16">16</div>
        <div class="day" data-day="17">17</div>
        <div class="day" data-day="18">18</div>
        <div class="day" data-day="19">19</div>
        <div class="day" data-day="20">20</div>
        <div class="day" data-day="21">21</div>
        <div class="day" data-day="22">22</div>
        <div class="day" data-day="23">23</div>
        <div class="day" data-day="24">24</div>
        <div class="day" data-day="25">25</div>
        <div class="day" data-day="26">26</div>
        <div class="day" data-day="27">27</div>
        <div class="day" data-day="28">28</div>
        <div class="day" data-day="29">29</div>
        <div class="day" data-day="30">30</div>
        <div class="day" data-day="31">31</div>
    </div>

    <!-- Formulário para adicionar compromisso -->
    <div class="form-container" id="form-container" style="display:none;">
        <h2>Adicionar Evento</h2>
        <form action="add_event.php" method="POST">
            <input type="hidden" name="dia" id="dia" value="">
            <input type="hidden" name="data" id="data" value="">
            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" required>
            <label for="local">Local:</label>
            <input type="text" name="local" id="local" required>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" required>
            <button type="submit">Salvar Evento</button>
        </form>
    </div>

    <script>
        document.querySelectorAll('.day').forEach(day => {
            day.addEventListener('click', () => {
                const dia = day.getAttribute('data-day');
                const data = `2024-10-${dia.padStart(2, '0')}`; // Formata a data para "2024-10-DD"

                // Exibe o formulário para adicionar evento
                document.getElementById('form-container').style.display = 'block';
                document.getElementById('dia').value = dia;
                document.getElementById('data').value = data;
            });
        });
    </script><br><br>
<form action="ver.php" method="POST">
    <button type="submit">ver compromissos</button>
</form>

</body>
</html>

<?php
// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
