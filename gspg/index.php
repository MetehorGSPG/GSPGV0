<?php
include("data/class.PDOgspg.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGspg::getPdoGspg();
$estConnecte = isset($_SESSION['login']);
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':
		include("controleurs/c_connexion.php");
		break;
	

}
include("vues/v_pied.php") ;
?>

