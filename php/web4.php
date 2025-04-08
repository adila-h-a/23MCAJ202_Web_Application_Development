<!DOCTYPE html>
<html>
<head>
    <title>Experiment-13</title>
    <style>
        table {
            width: 50%;
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
    <h2 style="text-align: center;">Database Records</h2>

    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "SampleDB"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch data from a table
    $sql = "SELECT id, name, email FROM users"; // Replace 'users' with your table name
    $result = $conn->query($sql);

    // Check if records exist and display in HTML table
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>No records found.</p>";
    }

    // Close the connection
    $conn->close();
    ?>
</body>
</html>
