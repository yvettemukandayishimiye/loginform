<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<h2>Form Data Received</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
}
?>
