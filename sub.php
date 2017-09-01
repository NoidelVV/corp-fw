<?php
abstract class Subscription {
	public static function checkUserExists() {
		// THIS FUNCTION CHECKS IF THE USER IS ALREADY REGISTERED
	}

	public static function registerUser() {
		// THIS FUNCTION REGISTERS THE USER INTO DATABASE
	}
	
	private static function checkStudentExists($name, $surname, $class) {	
		// THIS FUNCTION CHECKS IF THE INFORMATION PROVIDED ARE CORRECT (FOR SUBSCRIBING)
	}
	
	private static function clearStr($str) {
		// THIS FUNCTION CLEARS USERNAME AND PASSWORD FOR DATABASE
	}
}
?>