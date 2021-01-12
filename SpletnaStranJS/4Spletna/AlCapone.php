<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Glavna Stran";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO


    $Slika=get_image("../2Slike/Kriminalci/AL capone.jpg", "img1 left");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/Kriminalci/AL capone.jpg", "img6 right");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/agencije/CIA.png", "img6 left");                //Spremenlivka za sliko na Levi strani


    $Agencija="AI capone";                                               //Ime agencije
    $Agent="znan gengstr";                                                  //Agent ali usmerjenost agencije

    $Opis='Najbol nevaren kriminalac';                                               //opis agenta agencije ali kriminalca

    $SpecialNote='Gengstr';                                            //posebni notes
    $Java = '';
    $Gumb ='';   


    require "Template.php"; //povezava do template dokumenta





?>