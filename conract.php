<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can perform additional processing or save the data to a database here

    // Display a thank you message
    echo "<h2>Thank you, $name, for your message!</h2>";
} else {
    // Redirect to the form if accessed directly without submitting
    header("Location: index.html");
    exit();
}
?>
