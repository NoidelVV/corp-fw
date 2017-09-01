<?
define("DB_USER", "omissis");
define("DB_PASS", "omissis");
define("DB", "omissis");

function dbConnect() {
	$DB = new mysqli("omissis", DB_USER, DB_PASS, DB);
	return $DB;
}
?>