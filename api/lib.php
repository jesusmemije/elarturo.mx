<?php
function conn()
{
    //$mysqli=new mysqli ("localhost", "elarturo_web", "hR2g2152niXS", "elarturo_db");
    $mysqli = new mysqli ("localhost", "root", "are12345", "elarturo_db");
    return $mysqli;
}
?>