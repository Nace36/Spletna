<?php
 // Stran, ki bo shranila podatke iz obrazca v spremenljivko in iz spremenljivke v podatkovno bazo
 //Odpre se ob pritisku na gumb Potrdi v obrazcu na spletni strani
 
	//Zahtevamo vzpostavitev povezave
	require 'RegFinnish.php'; //pokli�emo datoteko s povezavo
	
	
	$povezava = povezava (); //V spremenljivko shranimo rezultat funkcije iz datoteke s povezavo
	
	//Za vsako polje obrazca ustvarimo spremenljivko v katero shranimo vrednost, ki jo je
	//uporabnik vpisal v polje obrazca
	
	$Ime = $povezava ->real_escape_string($_POST['fname']); //V spremenljivko shranimo vrednost zapisano v 
	//obrazcu. Uporabimo metodo POST 
	//Preverimo povezavo in �ele nato niz zapi�emo v spremenljivko
    $Priimek = $povezava ->real_escape_string($_POST['lname']);
    
    $Agencija = $povezava ->real_escape_string($_POST['aname']);

    $Država = $povezava ->real_escape_string($_POST['dname']);

    $Starost = $povezava ->real_escape_string($_POST['age']);

    $StMisij = $povezava ->real_escape_string($_POST['nmb']);

	
	//Vstavljanje podatke v bazo
	$vstavljanje = "INSERT INTO register VALUES ('" . $Ime . "', '" . $Priimek ."', '" . $Agencija ."', '" . $Država ."', '" . $Starost ."', '" . $StMisij ."');";
	
	//Da se podatki shranijo, moramo MySQL ukaz zagnati
	$zagon = $povezava ->query($vstavljanje);
	
	echo "Uspesno ste vnesli podatke.";
	
	//OBVEZNO!!!!
	//Zapremo spremenljivko s povezavo in s tem zaklju�imo z delom
	$povezava ->close();
 ?>