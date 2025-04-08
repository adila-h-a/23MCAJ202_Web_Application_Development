<!DOCTYPE html>
<html>
<head>
    <title>Experiment-11</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            text-align: center;
        }
        h2 {
            font-size: 24px;
            color:rgb(0, 0, 0);
            margin: 20px 0;
        }
        .container {
            background: #d1ecd7;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
            width: 20%;
        }
        .container pre {
            background: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h2>Student Names</h2>

    <?php
    // Step 1: Create an array of student names
    $students = [
        "Aarav",
        "Zoya",
        "Ishaan",
        "Meera",
        "Vikram",
        "Ananya",
        "Kabir",
        "Priya"
    ];
    ?>

    <!-- Container for Original Array -->
    <div class="container">
        <?php
        echo "<h3>Original Array:</h3>";
        echo "<pre>";
        print_r($students);
        echo "</pre>";
        ?>
    </div>

    <!-- Container for Ascending Order -->
    <div class="container">
        <?php
        asort($students); // Sorts the array in ascending order
        echo "<h3>Array in Ascending Order:</h3>";
        echo "<pre>";
        print_r($students);
        echo "</pre>";
        ?>
    </div>

    <!-- Container for Descending Order -->
    <div class="container">
        <?php
        arsort($students); // Sorts the array in descending order
        echo "<h3>Array in Descending Order:</h3>";
        echo "<pre>";
        print_r($students);
        echo "</pre>";
        ?>
    </div>
</body>
</html>
