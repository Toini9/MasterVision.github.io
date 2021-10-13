<?php
try {
	$db = new PDO('mysql:host=localhost,dbname=u104465928_mastervision','u104465928_admin','mamajana');
} catch (PDOException $e) {
	die('erreur: '.$e->getMessage());
	
}