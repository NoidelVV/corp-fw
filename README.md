# VVAccount Framework
Questo framework costituisce la base di tutti gli applicativi presenti su NoidelVV (nel caso specifico, su noidelvv.org)
Tramite il file framework.php, presente nelle singole directory degli applicativi, vengono incluse queste pagine in base alle esigenze (db.php viene inclusa sempre). Per un esempio, vedere [corp-fw-example](https://github.com/NoidelVV/corp-fw-example).  
**Attenzione!** I file in questa repository servono solo per dare un'idea di come il sistema di SSO funzionasse, non contengono realmente il codice del framework

## Informazioni sui moduli di VVAccount
### db.php
Contiene la funzione di connessione al database e viene incluso in automatico da framework.php

### user.php
Contiene la classe User per gestire il SSO dell'utente.

### sub.php
Contiene la classe per registrare l'utente nel sistema

### sites.php
Contiene le funzioni per determinare se l'utente ha accesso ad un particolare applicativo.

### psw_reset.php
Classe per il reset della password.

## Esempio di utilizzo
**framework.php**
```php
global $_VVA_FW;
define("VVA_FW_PATH", "omissis");
include(VVA_FW_PATH . "db.php");

if(in_array("subscription", $_VVA_FW)) {
	include(VVA_FW_PATH . "sub.php");
}

if(in_array("user", $_VVA_FW)) {
	include(VVA_FW_PATH . "user.php");
}

if(in_array("psw_reset", $_VVA_FW)) {
	include(VVA_FW_PATH . "psw_reset.php");
}

if(in_array("sites", $_VVA_FW)) {
	include(VVA_FW_PATH . "sites.php");
}
```
Utilizzo:
```php
$_VVA_FW = array(
	"user"
	);
include("framework.php");
User::startVVAccountSession();
```
