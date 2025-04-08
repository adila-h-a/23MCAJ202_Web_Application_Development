<!DOCTYPE html>
<html>
<head>
    <title>Experiment-12</title>
    <style>
        table {
            width: 20%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #d1ecd7;
            color: black;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">List of Indian Cricket Players</h2>

    <?php
    // Array of Indian Cricket Players
    $players = [
        "Virat Kohli",
        "Rohit Sharma",
        "MS Dhoni",
        "Sachin Tendulkar",
        "Rahul Dravid",
        "Sourav Ganguly",
        "Jasprit Bumrah",
        "Hardik Pandya",
        "Ravindra Jadeja",
        "Yuvraj Singh"
    ];

    // Display Players in an HTML Table
    echo "<table>";
    echo "<tr><th>Player Name</th></tr>";
    foreach ($players as $player) {
        echo "<tr><td>$player</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
