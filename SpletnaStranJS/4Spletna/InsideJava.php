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

    $Opis="A Paragraph" ;
    
                                                                //opis agenta agencije ali kriminalca

    $SpecialNote='';                                            //posebni notes
    $Java = '<script src="Nekifleki.js"></script>';
    $Gumb = '<div id="vsebina"> <!--Id je ime, ki se ga kasneje uporablja pri klicanju sprememb-->
                Te zanima moje ime? Klikni na gumb!<p>
                </div>
                <button type="button" onclick="gumb(\'vsebina\')">GUMB</button> <!--Klic funkcije JavaScript-->
             ';

    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");

    
?>