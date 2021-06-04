<?php
session_start();
#Conexión a la BD
include_once 'lib.php';

class Suscription
{
    public function __construct( $email )
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

        return true;
    }

    public function Save()
    {
        date_default_timezone_set("America/Mexico_City");
        $date_now = date("Y-m-d H:i:s");

        $statement = "INSERT INTO newsletter (email, status, date_created) 
        VALUES ('$this->email', 1, '$date_now')";

        if ( $this->mysqli->query($statement) === true ) {
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
}
