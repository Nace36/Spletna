<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Glavna Stran";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO


    $Slika=get_image("../2Slike/agencije/MI7.png", "img1 left");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/agenti/johnny.jpg", "img6 right");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/agenti/johnny.jpg", "img6 left");                //Spremenlivka za sliko na Levi strani

    $Agencija="MI7";                                               //Ime agencije
    $Agent="Johnny English";                                                  //Agent ali usmerjenost agencije


    $Opis="Johnny English is an intelligent and charismatic MI7 agent
     with dreams of being their most trusted employee. After Agent One
      dies in a submarine accident (courtesy of English making a mistak
      e on checking the submarine hatch code), the remaining agents are assassinated
       via a bombing at Agent One’s funeral (again courtesy of English's incompetence 
       at security), leaving English as the lone survivor. English is assigned to follow
        a plot to steal the Crown Jewels, which are on display at the Tower of London. ";                                                   //opis agenta agencije ali kriminalca

    $SpecialNote="je najbolj efektiven ter nesposobn agent vseh časov.";                                            //posebni notes
    $Java = '';
    $Gumb = '';  

    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");


?>