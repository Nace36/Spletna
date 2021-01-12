<?php
    //Klicanje datoteke s povezavo
    require 'Povezava.php';
    $povezava=povezava();

    //Preverimo ali povezava deluje - ni obvezno
    if ($povezava->connect_error)
    {
        die ("Povezava ni vspostavljena!". $povezava->connect_error);
    }
    //Izpis is PB
    //Ukazi SQL
    $izpis= "SELECT * FROM prijava";


    //ZAGON poizvedbo
    $zagon = $povezava ->query($izpis);

    //PRIKAZ REZULTATOV na spletno stran
    if ($zagon ->num_rows>0) //num_rows presteje stevilo vrstic
    {
        while ($vrstica=$zagon->fetch_assoc()) 
        //fetch_assoc izpiše rezultate - upošteva velike in male črke
        {
            echo 
            //"Zaporedna številka: " .$vrstica["ID"]. //naredi dokonca z IDji
            "<p>Ime: </p>" .$vrstica["Ime"]. 
            "<p>SCKoda: </p>" . $vrstica["SCKoda"];

        }

    }else
    {
        echo "Ni prijavljenih uporabnikov";
    }


?>