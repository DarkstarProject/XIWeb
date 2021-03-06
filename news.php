<?php

	//Check if the config.php file has already been created.
	//If so, include it, otherwise display an error message
	if (file_exists('config.php')) {
		include_once('config.php');
	} else {
		$_SESSION['errors']['general'] = $lang['error']['config'];
	}

	//If the system is installed, proceed
	//'INSTALLED' is defined in the config.php file
	//If the system is not installed, navigate to the install page
	if (defined('INSTALLED')) {

		//includes.php
		include_once('includes/includes.php');
  		include_once('includes/functions.php');

	} else {

		// If the config file exists, but the system is not installed, throw an error and redirect to the install directory
  		$_SESSION['errors']['install'] = $lang['error']['install']['not_installed'];
  		header("Location: install/index.php");

	}

	$newsID = $_GET['newsID'];
	$newsTitle = '';
	$newsDetails = '';
	switch($newsID){
		case 1:{
			$newsTitle = $newsTitle1;
			$newsDetails = $newsDetails1;
			break;
		}
		case 2:{
			$newsTitle = $newsTitle2;
			$newsDetails = $newsDetails2;
			break;
		}
		case 3:{
			$newsTitle = $newsTitle3;
			$newsDetails = $newsDetails3;
			break;
		}
	}

	//These php files generate the html content to display
	include_once('themes/'.$theme.'/views/header.php');
	include_once('themes/'.$theme.'/views/navbar.php');
	include_once('themes/'.$theme.'/views/news.php');
	include_once('themes/'.$theme.'/views/footer.php');
	echo $output;

?>