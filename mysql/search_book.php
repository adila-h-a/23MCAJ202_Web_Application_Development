<!DOCTYPE html>
<html>
<head>
    <title>Search Book</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #d1ecd7;
            color: black;
        }
    </style>
</head>
    <body>
        <h2>Search for a Book</h2>
        <form method="get" action="">
            <label for="title">Enter Book Title:</label><br>
            <input type="text" id="title" name="title" required><br><br>
            <input type="submit" value="Search">
        </form>

        <?php
        if (isset($_GET['title'])) {
            $servername = "localhost";
            $username = "root";
            $password = ""; 
            $dbname = "library";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get the title from the form
            $title = $_GET['title'];

            // Query to search for the book
            $sql = "SELECT * FROM books WHERE title LIKE '%$title%'";
            $result = $conn->query($sql);

            // Check if records are found
            if ($result->num_rows > 0) {
                echo "<h3>Search Results:</h3>";
                echo "<table>";
                echo "<tr><th>Accession Number</th><th>Title</th><th>Authors</th><th>Edition</th><th>Publisher</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['accession_number'] . "</td>
                            <td>" . $row['title'] . "</td>
                            <td>" . $row['authors'] . "</td>
                            <td>" . $row['edition'] . "</td>
                            <td>" . $row['publisher'] . "</td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No books found with the title '$title'.</p>";
            }

            $conn->close();
        }
        ?>
    </body>
</html>