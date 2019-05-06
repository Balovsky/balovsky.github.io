<?php
if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "mariuszfranik@interia.pl";
    $headers = "From: ".$mailFrom;
    $txt = "You have an email from ".".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}
