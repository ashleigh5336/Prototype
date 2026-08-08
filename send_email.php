<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'brainbuddy575@gmail.com';
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo 'Email sent successfully';
    } else {
        echo 'Email sending failed';
    }
} else {
    header('HTTP/1.1 403 Forbidden');
    echo 'Access forbidden';
}
?>