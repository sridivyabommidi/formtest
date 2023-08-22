<?php
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Add more fields as needed

    $to = "sridivyabommidi@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\n";

    // Additional headers and email sending code can be added here
    // For example, you can use the mail() function to send the email

    if (mail($to, $subject, $message)) {
        // Email sent successfully
        header("Location: thank_you.html");
        exit();
    } else {
        // Error sending email
        echo "Email could not be sent.";
    }
}
?>
