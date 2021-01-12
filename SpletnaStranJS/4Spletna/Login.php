<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Login page";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO


    $Slika=get_image("../2Slike/agencije/CIA.png", "img1 left");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/agencije/CIA.png", "img6 right");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/agencije/CIA.png", "img6 left");                //Spremenlivka za sliko na Levi strani


    $Agencija="Stran za login";                                               //Ime agencije
    $Agent="Login za further naprej delo idk";                                                  //Agent ali usmerjenost agencije

    $Opis='Login page';  //opis agenta agencije ali kriminalca

    $SpecialNote='<form id="Form" action="LoginData.php" method="post">
                    Ime: 
                    <input id="Name" type="text" name="Ime" value="James Bond"><br>
                    Koda: 
                    <input type="text" name="SCKoda" value="007"><br>
                    Geslo: <p> 
                    <input type="password" name="geslo" value="007"><br><br></p>
                    
                    
                    </form>
                <button class="gumbek" onclick="Dataz()">Submit</button>
                ';                                            //posebni notes


        $Java = '<script src="Data.js"></script>';
        $Gumb = '';

        
    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");


?>
