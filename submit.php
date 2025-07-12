<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Display the form data
    echo "<h2>Thank you!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";

    // Save the data to a file
    $data = "Name: $name\nEmail: $email\nMessage: $message\n---\n";
    file_put_contents("messages.txt", $data, FILE_APPEND);
}
?>
