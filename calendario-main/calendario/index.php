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
        .gray {
            background-color: #ccc;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }
        .gray:hover {
            background-color: #888;
        }
    </style>
</head>
<body>
    <h1>Calendário</h1>
    <div class="calendar">
        <div class="header">Outubro 2024</div>
        <div>Dom</div>
        <div>Seg</div>
        <div>Ter</div>
        <div>Qua</div>
        <div>Qui</div>
        <div>Sex</div>
        <div>Sáb</div>

        <div class="gray">29</div>
        <div class="gray">30</div>
        <div class="day">1</div>
        <div class="day">2</div>
        <div class="day">3</div>
        <div class="day">4</div>
        <div class="day">5</div>
        <div class="day">6</div>
        <div class="day">7</div>
        <div class="day">8</div>
        <div class="day">9</div>
        <div class="day">10</div>
        <div class="day">11</div>
        <div class="day">12</div>
        <div class="day">13</div>
        <div class="day">14</div>
        <div class="day">15</div>
        <div class="day">16</div>
        <div class="day">17</div>
        <div class="day">18</div>
        <div class="day">19</div>
        <div class="day">20</div>
        <div class="day">21</div>
        <div class="day">22</div>
        <div class="day">23</div>
        <div class="day">24</div>
        <div class="day">25</div>
        <div class="day">26</div>
        <div class="day">27</div>
        <div class="day">28</div>
        <div class="day">29</div>
        <div class="day">30</div>
        <div class="day">31</div>
        <div class="gray">1</div>
        <div class="gray">2</div>
    </div>
    <form action="ver.php">
        <button type="submit" div class="day"> Seus compromissos </button></div>
    </form>
</body>
</html>
