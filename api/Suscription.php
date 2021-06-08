<?php
session_start();
#Conexión a la BD
include_once 'lib.php';

class Suscription
{
    public function __construct($email)
    {
        $this->email = $email;

        $this->mysqli = conn();
    }

    public function Create()
    {
        if (!$this->ValidateEmail())
            return false;

        if (!$this->Save())
            return false;
        

        if (!$this->SendMailNotification())
            return false;

        return true;
    }

    public function Save()
    {
        date_default_timezone_set("America/Mexico_City");
        $date_now = date("Y-m-d H:i:s");

        $statement = "INSERT INTO newsletter (email, status, date_created) 
        VALUES ('$this->email', 1, '$date_now')";

        if ($this->mysqli->query($statement) === true) {
            //ok
        } else {
            $this->error = "Error al insertar el registro al Newsletter." . $this->mysqli->error;
            return false;
        }

        return true;
    }

    public function ValidateEmail()
    {
        if ($this->email == "") {
            $this->error = "El correo electrónico es requerido";
            return false;
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->error = "El correo electrónico no tiene un formato de correo válido";
            return false;
        }

        return true;
    }

    function SendMailNotification()
    {
        include("partials/mail.php");

        $add_mensaje = "Te notificamos que tienes un nuevo suscriptor inscrito a tu newsletter con el siguiente correo electrónico: <br>
        <strong> " . $this->email . " </strong>";

        $email_from = "support@elarturo.mx";

        $email_txt = $mailheader . "<br>
        <div style=\"text-align:center; font-weight:bold; font-size:2.5em\">¡Nuevo suscriptor!</div>
        <br><br>
        ¡Saludos, Arturo!
        <br><br>
        " . $add_mensaje . "
        <br><br><br><br>
        Atentamente,<br>Equipo Web ElArturo.mx<br><br>¿Tienes alguna duda? Por favor contáctanos al correo: <a href=\"mailto:contactoelarturo@gmail.com\">contactoelarturo@gmail.com</a>";

        $email_txt .= $mailfooter;

        $email_to = 'contactoelarturo@gmail.com';
        $email_subject = "Nueva suscripción a newsletter - ElArturo.mx";

        $headers = "From: " . $email_from;

        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

        $headers .= "\nMIME-Version: 1.0\n" .
            "Content-Type: multipart/mixed;\n" .
            " boundary=\"{$mime_boundary}\"";
        $email_message = $email_txt . "\n\n" .
            "--{$mime_boundary}\n" .
            "Content-Type:text/html; charset=\"utf-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
            $email_txt . "\n\n";

        $ok = @mail($email_to, $email_subject, $email_message, $headers);

        if ( !$ok ) {
            $this->error = "No se envió el correo de notificación";
            return false;
        }

        return true;
    
    }
}
