<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width+device-width, initial-scale=1.0">
    <title> Searching a Database with PHP and MySQL</title>
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <h1> Searching a Database with PHP and MySQL</h1>
    <p>Gavin Fritz</p>
    <p><?php echo date("F j, Y"); ?></p>

        <!-- send form fields to results.php using POST -->
        <form action="results.php" method="POST">
          
            <label for="email">Student Email</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Submit">
        </form>

  
</body>

</html>