<?php
session_start();
if (isset($_POST['submit'])) {


    //Variable Decleration

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phone'];
    $message = $_POST['message'];

    // Database connection here

    $conn = new mysqli('localhost', 'root', '', 'campusify');
    if ($conn->connect_error) {
        die('Connection Failed - ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into contact(name, email, phone, message) values(?,?,?,?)");
        $stmt->bind_param("ssss", $name,$email, $phoneno, $message);
        $stmt->execute();
        echo "<script>alert('Thank you for contacting us, We will contact you shortly.......');window.location='index.php'</script>";
        $stmt->close();
        $conn->close();
    }
}
