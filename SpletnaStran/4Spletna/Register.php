<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Glavna Stran";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO


    $Slika=get_image("../2Slike/agencije/CIA.png", "img1 left");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/agencije/CIA.png", "img6 right");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/agencije/CIA.png", "img6 left");                //Spremenlivka za sliko na Levi strani


    $Agencija="Registracijski obrazec";                                               //Ime agencije
    $Agent="Welcome!";                                                  //Agent ali usmerjenost agencije

    $Opis='Welkomen, Welcome, Dobrodošel, tukaj se lahko registriras kot agent';                                               //opis agenta agencije ali kriminalca

    $SpecialNote='<form action="RegisterData.php" method="post">
                    First name: 
                    <input type="text" name="fname" value="Johny"><br>
                    Last name: 
                    <input type="text" name="lname" value="English"><br>
                    Agencija: 
                    <input type="text" name="aname" value="KGB"><br>
                    Država: 
                    <input type="text" name="dname" value="Slovenia"><br>
                    Starost: 
                    <input type="text" name="age" value="32"><br>
                    Št Misij: 
                    <input type="text" id="nmb" name="nmb" value="2"><br>
                    <input type="submit" value="Submit">
                </form>';                                            //posebni notes


    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");


?>
