<?php
    //Klicanje datoteke s povezavo
    require 'povezava.php'
    $povezava=povezava();

    //Preverimo ali povezava deluje - ni obvezno
    if ($povezava->connect_error)
    {
        die ("Povezava ni vspostavljena!". $povezava->conncet_error);
    }
    //Izpis is PB
    //Ukazi SQL
    $izpis= "SELECT * FROM prijava";


    //ZAGON poizvedbo
    $zagon = $povezava ->query($izpis)

    //PRIKAZ REZULTATOV na spletno stran
    if ($zagon ->num_rows>()) //num_rows presteje stevilo vrstic
    {
        while ($vrstica=$zagon->fetch_assoc()) 
        //fetch_assoc izpiše rezultate - upošteva velike in male črke
        {
            echo "Zaporedna številka: " .$vrstica["ID"] //naredi dokonca z IDji
            "<p>Ime in priimek: " .$vrstica["Ime"] . " " . $vrstica["priimek"] . 
            "<p> spol: " . $vrstica["spol"] . 
            "<p> komentar: " . $vrstica["komentar"] . "<br>";

        }

    }else
    {
        echo "0 rezultatov";
    }


?>