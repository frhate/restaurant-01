<?php
 if(isset($_POST['sign-submit'])){
    // Get the values submitted by the user
    $name = $_POST['Name'];
    $date = $_POST['date'];
    $email = $_POST['Email'];
    $service = $_POST['service'];
    $type = $_POST['type'];

    $conn = new mysqli("localhost", "root", "","wiibou",3306);
   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$stmt = $conn->prepare("INSERT INTO user (Name, date, Email, Service, Type) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $name, $date, $email, $service, $type);

if($stmt->execute()){
    echo "Successfully signed in! ";
}
else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

}
?>