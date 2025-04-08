<!DOCTYPE html>
<html>
<head>
    <title>Book Information</title>
</head>
<body>
    <h2>Enter Book Information</h2>
    <form action="store_book.php" method="post">
        <label for="accession_number">Accession Number:</label><br>
        <input type="number" id="accession_number" name="accession_number" required><br><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="authors">Authors:</label><br>
        <input type="text" id="authors" name="authors" required><br><br>

        <label for="edition">Edition:</label><br>
        <input type="text" id="edition" name="edition"><br><br>

        <label for="publisher">Publisher:</label><br>
        <input type="text" id="publisher" name="publisher"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>