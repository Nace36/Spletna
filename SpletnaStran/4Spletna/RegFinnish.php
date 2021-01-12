<?php
//Stran, ki nam bo vzpostavila povezavo z našim SQL strežnikom in ustrezno PB

	//Izdelamo funkcijo za povezavo
	
	function povezava()
	{
	//Vse potrebne prijavne podatke shranimo v spremenljivke
	
	$servername = "localhost"; //V spremenljivko shranimo ime strežnika
	$username = "root"; //V spremenljivko shranimo ime uporabnika
	$password ="usbw"; //V spremenljivko shranimo geslo
	$database = "AgencyBase"; //V spremenljivko shranimo ime PB v katero bomo shranjevali podatke
	
	//Vzpostavitev povezave s PB
	//Da bo lahko funkcija vrnila vrednost povezave (True ali False) oblikujemo spremenljivko
	//v katero bomo shranili rezultat
	$povezava = new mysqli ($servername, $username, $password, $database)//Obvezen je pravilni vrstni red pri povezavi
	
	//V tem trenutku je povezava vzpostavljena, če so podatki pravilni
	
	//Če se povezava ne vzpostavi, moramo prekiniti vzpostavljanje
	
	or die ($povezava ->connect_error); //Prekinemo vzpostavljanje povezave in izpišemo napako povezave
	
	return $povezava;  //Funkcija vrne rezultat povezave
	
    }
    header("Location: Register.php") 
?> 