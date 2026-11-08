<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width+device-width, initial-scale=1.0">
    <title> Searching a Database with PHP and MySQL results.php</title>
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <h1> Student Search Result</h1>  
    <p>Gavin Fritz</p>
    <p><?php echo date("F j, Y"); ?></p>

<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

    // Store and trim form inputs
    $email = trim($_POST["email"]);

    //Sanitize email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

     //Check for empty fields
    // if ( empty($email)) {
    //     $result = "All fields are required.";
    //     $class = "error";
    // } else {
    //     $result = "Form submitted.";
    //     $class = "success";
    // }

    $connection = mysqli_connect("localhost", "root", "", "taus_data, 3307");

    if (!$connection) {
        echo "<div class='message'>database connection failed</div>";
    } else {
        //search for student email
        $email = mysqli_real_escape_string($connection, $email);
        $sql = "SELECT * FROM tbl_student WHERE email = '$email'";
        $result = mysqli_query($connection, $sql);

        //results
        if ($result && mysqli_num_rows($result) >0) {
            $student = mysqli_fetch_assoc($result);

            echo "<div class='message'>
                Name: " . htmlspecialchars($student["firstName"] . " " . $student["lastName"]) . "<p> Email " . htmlspecialchars($student["email"]) . "</p> </div>";
        } else {
            echo "<div class='message'>Email not found</div>";
        }
        mysqli_close($connection);

    }

  


}
?>

</body>

</html>