<?php session_start();
	  try{
		$bdd=New PDO('mysql:host=localhost;dbname=stock;charset=UTF8',
				'root','');
	  	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }catch(Exception $e){
      	die('erreur:'.$e->getMessage());
      }
?>
