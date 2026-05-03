<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent injection
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = $_POST["service_interest"];
    $message = htmlspecialchars($_POST["message"]);

    // Recipient email from your poster
    $to = "autosocial254@gmail.com";
    $subject = "New AutoSocial Lead: $service from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Interested In: $service\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a success page
        header("Location: thank-you.html");
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
} else {
    echo "Access denied.";
}
?>