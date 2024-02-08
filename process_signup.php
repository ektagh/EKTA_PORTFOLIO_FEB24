<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // You can now process, validate, and store the collected data as needed
    // For demonstration purposes, let's just print the data for now
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
} else {
    // Handle the case where the form is not submitted via POST
    echo "Form not submitted!";
}
?>
