<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : '';
$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : '';
$r = isset($_REQUEST['r']) ? $_REQUEST['r'] : '';

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

//domyślnie pokazuj wstęp strony (tytuł i tło)
$hide_intro = false;

// sprawdzenie, czy parametry zostały przekazane - jeśli nie to wyświetl widok bez obliczeń
if ( isset($_REQUEST['x']) && isset($_REQUEST['y']) && isset($_REQUEST['r']) ) {
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';
		

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $x == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano lat';
	}
	if ( $r == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( !isset ( $messages ) ) {
	
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $x )) {
			$messages [] = 'Kwota nie jest liczbą całkowitą';
		}
	
		if (! is_numeric( $y )) {
			$messages [] = 'Liczba Lat musi być wartością całkowitą';
		}
	
		if (! is_numeric( $r )) {
			$messages [] = 'Oprocentowanie musi być liczbą całkowitą';
		}
	}
	
	// 3. wykonaj zadanie jeśli wszystko w porządku
	
	if ( !isset ( $messages ) ) { // gdy brak błędów
		
		$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
		
		//konwersja parametrów na int
		$x = floatval($x);
		$y = floatval($y);
		$r = floatval($r);
	
		//wykonanie operacji
		$result = ($x * (($r / 100) / 12) * ((1 + (($r / 100) / 12)) ** ($y * 12))) / ((((1 + ($r / 12 / 100)) ** ($y * 12))) - 1);
	
	}
}

// 4. Wywołanie widoku, wcześniej ustalenie zawartości zmiennych elementów szablonu

$page_title = 'Kalkulator rat kredytowych';
$page_description = 'Prosty kalkulator który pozwala obliczyć przybliżoną wysokość rat kredytowych.';
$page_header = 'Kalkulator rat kredytowych';
$page_footer = 'Nie ponosimy odpowiedzialności za niezgodności z faktyczną wysokością rat kredytowych w bankach';

include 'calc_view.php';