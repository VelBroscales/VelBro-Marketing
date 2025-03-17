<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "velbroscales@gmail.com";  // 🔹 ЗАМЕНИ НА СВОЮ ПОЧТУ!
    $subject = "New Application Form Submission";

    // Собираем данные из формы
    $instagram = htmlspecialchars($_POST["instagram"]);
    $website = htmlspecialchars($_POST["website"]);
    $revenue = htmlspecialchars($_POST["revenue"]);
    $budget = htmlspecialchars($_POST["budget"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $email = htmlspecialchars($_POST["email"]);

    // Формируем текст письма
    $message = "New application form submitted:\n\n";
    $message .= "Instagram: $instagram\n";
    $message .= "Website: $website\n";
    $message .= "Monthly Revenue: $revenue\n";
    $message .= "Marketing Budget: $budget\n";
    $message .= "Name: $firstName $lastName\n";
    $message .= "Email: $email\n";

    // Заголовки письма
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Отправляем письмо
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Thank you! Our team will be in touch with you shortly.');</script>";
        echo "<script>window.location.href = 'index.html';</script>"; // 🔹 После отправки возвращаем пользователя на главную страницу
    } else {
        echo "Error sending email.";
    }
}
?>
