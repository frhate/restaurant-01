<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Retrieve form data
    $name = $_POST['Name'];
    $date = $_POST['date'];
    $guests = $_POST['guests'];
    $table = $_POST['table'];

    // Connect to database
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'wiibou';
    $conn = new mysqli($host, $user, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert reservation data into database
    $stmt = mysqli_prepare($conn, "INSERT INTO reservation (name, date, guests, table_number) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssis", $name, $date, $guests, $table);
    mysqli_stmt_execute($stmt);

    // Check if reservation was successfully added
    if(mysqli_stmt_affected_rows($stmt) == 1){
        echo "Reservation made successfully!";
    } else {
        echo "Error making reservation.";
    }

    // Close database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
