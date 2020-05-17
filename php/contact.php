<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $email_from = $name;
    $email_subject = 'Nuevo mensaje desde rivera.com.co';
    $email_body =   "Nombre Completo: $name.\n".
                    "Correo Electrónico: $email.\n".
                    "Teléfono: $phone.\n".
                    "Mensaje: $msg.\n";

            $to = "info@colmultimedia.com";
            $headers = "From: $email_from \r\n";
            $headers = "Reply-To: $email \r\n";

            mail($to, $email_subject, $email_body, $headers);

            header("location:../index.html")

?>