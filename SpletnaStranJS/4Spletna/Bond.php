<?php                            #TO JE PHP dokument za glavno stran, do not delete yo!
    require "Function.php";      //Funkcija za velikost slike ter kje se nahaja

    //TUKAJ SE ZACNEJO SPREMENLJIVKE ZA MENI

    $Title="Glavna Stran";                    // Naslov

    //TUKAJ SO SPREMENLJIVKE ZA BODY IN VSEBINO


    $Slika=get_image("../2Slike/agencije/aa.png", "img1 left");                 //Spremenlivka za sliko v podmeniju

    $Slika1=get_image("../2Slike/agenti/bond.jpeg", "img6 right");                //Spremenlivka za sliko na Desni strani

    $Slika2=get_image("../2Slike/agenti/bond.jpeg", "img6 left");                //Spremenlivka za sliko na Levi strani


    $Agencija="MI6";                                               //Ime agencije
    $Agent="James Bond aka 007";                                                  //Agent ali usmerjenost agencije

    $Opis="James Bond je karizmatični agent Britanske tajne službe MI6
     s kodnim imenom 007, ki potuje po eksotičnih krajih in s svojo iznajdljivostjo
      ob pomoči visokotehnoloških naprav rešuje grožnje stabilnosti Britanskega imperija
       (v zadnjem času pa celotnega sveta). V vsakem delu uspešnih serij o Bondu ima agent
        007 drugo dekle (Bondovo dekle), ki pa je velikokrat zaposlena pri kaki drugi tajni službi. ";                                                   //opis agenta agencije ali kriminalca

    $SpecialNote="Je najbolj efektiven agent vseh časov.";                                            //posebni notes
    $Java = '';
    $Gumb ='';   



    require "Template.php"; //povezava do template dokumenta


    //function get_image($link, $class) {
    //    $img = '<img class="'.$class.'" src="'.$link.'" alt="'.$link.'">';
    //    return $img;
    //}

    //echo get_image("/", "img");


?>
