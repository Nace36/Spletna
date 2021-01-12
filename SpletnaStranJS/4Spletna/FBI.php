<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Glavna Stran";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO


    $Slika=get_image("../2Slike/agencije/fbi.png", "img1 left");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/agencije/fbi.png", "img6 right");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/agencije/fbi.png", "img6 left");                //Spremenlivka za sliko na Levi strani


    $Agencija="Federal bureau of investigation";                                               //Ime agencije
    $Agent="Kot policija z več pravicami";                                                  //Agent ali usmerjenost agencije

    $Opis="Je kot napredna policija ki išče kriminalce";                                                   //opis agenta agencije ali kriminalca

    $SpecialNote="Imajo nzt in briana ki je narko";                                            //posebni notes
    $Java = '';
    $Gumb = '';  


    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");


?>