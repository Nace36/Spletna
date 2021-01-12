<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Glavna Stran";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO


    $Slika=get_image("../2Slike/agencije/CIA.png", "img1 left");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/agencije/CIA.png", "img6 right");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/agencije/CIA.png", "img6 left");                //Spremenlivka za sliko na Levi strani


    $Agencija="Central Intelligence Agency";                                               //Ime agencije
    $Agent="Špijonaža na tujih tleh";                                                  //Agent ali usmerjenost agencije

    $Opis="Ena najbolsih agencij za podatke";                                                   //opis agenta agencije ali kriminalca

    $SpecialNote="Agenti so ful natrenirani ko roboti ufm";                                            //posebni notes
    $Java = '';
    $Gumb = '';   


    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");


?>