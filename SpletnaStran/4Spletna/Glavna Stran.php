<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Glavna Stran";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO

    $Leto="<button onclick='myFunction()'>Try it</button>

    <p id='demo'></p>";
    $Slika=get_image("../2Slike/Logo.png", "img1");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/Logo2.png", "img5 Desno");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/Logo2.png", "img5 Levo");            //Spremenlivka za sliko na Levi strani


    $Agencija="Welcome";                                               //Ime agencije
    $Agent="Espionage advanced";                                                  //Agent ali usmerjenost agencije

    $Opis="Jst sm car";                                                   //opis agenta agencije ali kriminalca

    $SpecialNote="V tej spletni strani razkrinkamo najbolse
     agente in najbolj zlobne agencije ki spijonirajo za nas nedolznimi
      drzavljani vseh moznih drzav";                                            //posebni notes

    
    


    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");


?>