<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
/*define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','chc');

//application address
define('DIR','http://localhost/chc_deliverymodel_review/account/');
define('DIRINDEX','http://localhost/chc_deliverymodel_review/');
define('SITEEMAIL','noreply@domain.com');
define('DIRURL','http://localhost/chc_deliverymodel_review/');
define('WRKURL','C:\xampp\htdocs\chc_deliverymodel_review\account\\'); */
//database credentials
define('DBHOST','db701195754.db.1and1.com');
define('DBUSER','dbo701195754');
define('DBPASS','Sweden100#');
define('DBNAME','db701195754');

//application address
define('DIR','/homepages/3/d701190935/htdocs/chc_deliverymodel_review/account/');
define('DIRINDEX','/homepages/3/d701190935/htdocs/chc_deliverymodel_review/');
define('SITEEMAIL','noreply@domain.com'); 
define('DIRURL','http://s701190940.websitehome.co.uk/chc_deliverymodel_review/');
define('WRKURL','\homepages\3\d701190935\htdocs\chc_deliverymodel_review\account\\');
try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

include("/homepages/3/d701190935/htdocs/chc_deliverymodel_review/account/classes/user.php");
//include(WRKURL."\classes\mail.php");
$user = new User($db);
?>
