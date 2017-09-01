<?
class User {
	
	// USER FETCHING FUNCTIONS
	
	public $name, $surname, $classes, $logIn;
	private $_CORP_ACCESS_LEVELS;
	
	public function __construct($id) {
		// FETCH USER'S INFO AND FILL $name, $surname, $classes, $logIn
	}
	
	public function hasAccess() {
		// THIS FUNCTION DETERMINES USER'S ACCESS LEVEL TO CORP
	}
	
	public function setAccessLevels($_CORP_ACCESS_LEVELS) {
		$this->_CORP_ACCESS_LEVELS = $_CORP_ACCESS_LEVELS;
	}

	// LOGIN AND SESSION MONITORING FUNCTIONS
	
	public static function startVVAccountSession() {
		// THIS FUNCTION STARTS NEW SESSION FOR .ORG DOMAIN
	}
	
	public static function login($email, $psw) {
		// LOG IN THE USER
	}
	
	public static function logout() {
		session_destroy();
		return true;
	}
	
	public function getName() {
		return $this->name . " ". $this->surname;
	}
	
	public static function getLoginUrl() {
		// BACKWARD LINK FOR LOGIN
	}
	
	public static function getLogoutUrl() {
		// BACKWARD LINK FOR LOGOUT
	}
	
	private static function clearStr($str) {
		// THIS FUNCTION CLEARS STRING FOR DATABASE
	}
}
?>