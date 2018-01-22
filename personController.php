<?php
require_once("personRestHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];

switch($view){

	case "all":
		$personRestHandler = new personRestHandler();
		$personRestHandler->getAllPersons();
		break;
		
	case "single":
		$personRestHandler = new personRestHandler();
		$personRestHandler->getPerson($_GET["id"]);
		break;

	case "":
	    
		break;
}
?>
