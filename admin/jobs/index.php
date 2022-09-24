<?php
/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/
    session_start();

    $settings = parse_ini_file("presh.php");

    if (
        isset($_SESSION['login']) &&
        $_SESSION['login']
    ) {
        die(header("Location: ../"));
    }


    if (
        $_SERVER['REQUEST_METHOD'] == "POST" &&
        trim($_POST['username']) != "" &&
        trim($_POST['password']) != "" &&
        strtolower($_POST['username']) == strtolower($settings['Username']) &&
        $_POST['password'] == $settings['Password']
    ) {
        $_SESSION['login'] = 1;
        header("Location: ../");
    } else {
        header("Location: ../");
    }