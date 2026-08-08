<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $to = 'brainbuddy575@gmail.com';

    $subject = isset($_POST['subject'])
        ? trim($_POST['subject'])
        : 'Quiz Result';

    $body = isset($_POST['body'])
        ? trim($_POST['body'])
        : '';

    $headers = "From: brainbuddy575@gmail.com\r\n";
    $headers .= "Reply-To: brainbuddy575@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo 'Email sent successfully';
    } else {
        echo 'Email sending failed';
    }

} else {
    http_response_code(403);
    echo 'Access forbidden';
}
?>
```
