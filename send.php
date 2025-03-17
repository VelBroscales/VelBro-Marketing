<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your@email.com"; // Введи СВОЮ почту здесь!
    $subject = "New Application Submission";

    // Получаем данные из формы
    $instagram = htmlspecialchars($_POST["instagram"]);
    $website = htmlspecialchars($_POST["website"]);
    $revenue = htmlspecialchars($_POST["revenue"]);
    $budget = htmlspecialchars($_POST["budget"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $email = htmlspecialchars($_POST["email"]);

    // Формируем сообщение
    $message = "
    New application received:
    Instagram: $instagram
    Website: $website
    Monthly Revenue: $revenue
    Marketing Budget: $budget
    First Name: $firstName
    Last Name: $lastName
    Email: $email
    ";

    $headers = "From: no-reply@yourwebsite.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Отправляем письмо
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Our team will be in touch with you shortly.";
    } else {
        echo "Error: Unable to send email.";
    }
} else {
    echo "Access Denied.";
}
?>
