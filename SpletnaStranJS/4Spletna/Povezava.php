<?php
    function povezava()
    {
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $database = "agencybase";
    $connect= new mysqli ($servername, $username, $password, $database)
    or die($connect ->connect_error);
    return $connect;
    }

?>