<?php
    $name=htmlspecialchars(trim($_POST['name']));
    $from=htmlspecialchars(trim($_POST['email']));
    $subject="My name is $name";
    $messge="My name is $name.And my email is $from";

    $subject="=?utf-8?B?".base64_encode($subject)."?=";
    $headers="From: $from\r\nReply-to:$from\r\nContent-type:text/plain; charset=utf-8\r\n";
    mail("miskouran0501@gmail.com", $subject, $messge, $headers);
    header("Location: http://locl.zzz.com.ua");