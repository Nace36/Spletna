<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Glavna Stran";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO


    $Slika=get_image("../2Slike/agencije/fbi.png", "img1 left");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/agenti/brian.jpg", "img6 right");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/agenti/brian.jpg", "img6 left");                //Spremenlivka za sliko na Levi strani


    $Agencija="CIA";                                               //Ime agencije
    $Agent="Brian";                                                  //Agent ali usmerjenost agencije

    $Opis="Dela za FBI ker so ga recruitali zarad neverjetnih sposobnosti.";                                                   //opis agenta agencije ali kriminalca

    $SpecialNote="Za delovanje rabi droge";                                            //posebni notes
    $Java = '';
    $Gumb ='';   




    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");


?>
