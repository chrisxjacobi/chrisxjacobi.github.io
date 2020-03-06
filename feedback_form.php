<?php

        /* Each of these will strip anything harmful or extraneous out
         * of the submitted $_POST variables. */
        $name = substr(strip_tags(trim($_POST['name'])), 0, 64);
        $email = substr(strip_tags(trim($_POST['email1'])), 0, 64);
        $message = substr(strip_tags(trim($_POST['message'])), 0, 64);

function filter_email_header($form_field) {
return preg_replace('/[\0\n\r\|\!\/\<\>\^\$\%\*\&]+/','',$form_field);
}


$email = filter_email_header($email);

$headers = "From: $email\n";
$sent = mail('chrisxjacobi@gmail.com', 'Feedback Form Submission', $feedback, $headers);

if ($sent) {

?><html>

<head>
    <title>Thank You</title>
</head>

<body>
    <h1>Thank You</h1>
    <p>Thank you for your feedback.</p>
</body>

</html>
<?php

} else {

?><html>

<head>
    <title>Something went wrong</title>
</head>

<body>
    <h1>Something went wrong</h1>
    <p>We could not send your feedback. Please try again.</p>
</body>

</html>
<?php
}
?>
