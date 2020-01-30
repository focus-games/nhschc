<?php 
//require('/homepages/3/d701190935/htdocs/chc_som/account/includes/config.php'); 
require('account/includes/config.php'); 

	//if not logged in redirect to login page
	if(!$user->is_logged_in()){ header('Location: account/login.php'); exit(); }
	if(!$user->is_logged_in()){ ob_start(); header('Location: '.DIRURL.'\account\\'); exit(); }
	//
?>
<!DOCTYPE HTML>

<html>
<head>
	<title>CHC Toolkit</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />

	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125811813-31"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125811813-31');
</script>


</head>