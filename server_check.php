<?php

// Tasks/Tasks Pro configuration tester
// Copyright 2004 Alex King, http://www.alexking.org/

ini_set ('display_errors', '1');
ini_set ('error_reporting', E_ALL);

if (isset($_REQUEST["action"])) {
	$action = stripslashes($_REQUEST["action"]);
}
else {
	$action = 'intro';
}

$nc = str_replace(' ', '', microtime());

// from: http://php.net/manual/en/configuration.directives.php
function inisize_to_bytes ( $strIniSize ) {
	// This function will take the string value of an ini 'size' parameter,
	// and return a double (64-bit float) representing the number of bytes that the parameter represents. Or false if $strIniSize is unparseable.
	$a_IniParts = array();

	if (!is_string( $strIniSize ))
		 return false;

	if (!preg_match ('/^(\d+)([bkm]*)$/i', $strIniSize,$a_IniParts))
		 return false;
  
	$nSize	 = (double) $a_IniParts[1];
	$strUnit = strtolower($a_IniParts[2]);
  
	switch($strUnit) {
		 case 'm':
			  return ($nSize * (double) 1048576);
		 case 'k':
			  return ($nSize * (double) 1024);
		 case 'b':
		 default:
			  return $nSize;
	}
}

switch ($action) {
	case "sessions_check":
		session_start();
		if (isset($_SESSION["tasks_config_test"]) && $_SESSION["tasks_config_test"] == 1) {
			die('<style>body { background: #fff; font-family: verdana, tahoma, arial, helvetica, sans-serif; font-size: 11px; }</style><p style="color: #060;"><strong>Result:</strong> Success, sessions are storing data correctly.</p>');
		}
		else {
			die('<style>body { background: #fff; font-family: verdana, tahoma, arial, helvetica, sans-serif; font-size: 11px; }</style><p style="color: #600;"><strong>Result:</strong> Error, sessions are <strong>NOT</strong> storing data correctly.</p>');
		}
		$_SESSION["tasks_config_test"] = '';
		break;
	case "401_auth":
		if (!isset($_SERVER["PHP_AUTH_USER"]) && !isset($_SERVER["PHP_AUTH_PW"]) && 
			!empty($_SERVER["HTTP_AUTHORIZATION"]) && ereg("^Basic ", $_SERVER["HTTP_AUTHORIZATION"])) {
			list($_SERVER["PHP_AUTH_USER"], $_SERVER["PHP_AUTH_PW"]) = explode(":", base64_decode(substr($_SERVER["HTTP_AUTHORIZATION"], 6)));
		}
		if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
			header('WWW-Authenticate: Basic realm="Tasks Config Test"');
			header('HTTP/1.0 401 Unauthorized');
			die();
		}
		else {
			ob_start();
?>
	<style>body { background: #fff; font-family: verdana, tahoma, arial, helvetica, sans-serif; font-size: 11px; }</style><p style="color: #060;"><strong>Result:</strong> Success, your server is properly configured to pass 401 authentication information to PHP.</p>
<?php
			$body = ob_get_contents();
			ob_end_clean();
			die($body);
		}
		break;
	case "email":
		if (!empty($_POST["to"])) {
			mail(stripslashes($_POST["to"])
				,"Tasks Test Email"
				,"Congratulations, your server is correctly configured to send e-mail."
				,'From: test@taskspro.com'."\n"
				);
			die('Test e-mail was sent. If you receive the e-mail (make sure you check any JUNK or SPAM folders), your server is correctly configured to send e-mail. If you do not received the e-mail, your server is probably not configured to send e-mail.');
		}
		break;
	default:
		session_start();
		$_SESSION["tasks_config_test"] = 1;
		break;
}



?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Tasks Pro&trade;/Tasks Server Check</title>
	<style>
	body {
		background: #ccc;
		margin: 0;
		padding: 10px;
	}
	iframe {
		border: 1px solid #ccc;
		height: 50px;
		width: 520px;
	}
	h1 {
		font-family: verdana, tahoma, arial, helvetica, sans-serif;
		font-size: 14px;
		margin: 0;
		padding: 10px 0 10px 0;
	}
	h2 {
		border-bottom: 1px solid #ccc;
		font-family: verdana, tahoma, arial, helvetica, sans-serif;
		font-size: 12px;
		margin: 10px 0 0 0;
		padding: 10px 0 5px 0;
	}
	p {
		font-family: verdana, tahoma, arial, helvetica, sans-serif;
		font-size: 11px;
		line-height: 140%;
		margin: 0;
		padding: 10px 0 0 10px;
		width: 90%;
	}
	p.tag {
		padding: 0;
	}
	form, p.result {
		background: #fff; 
		border: 1px solid #ccc;
		margin: 10px 10px 0 10px;
		padding: 10px;
		width: 500px;
	}
	form p {
		line-height: 130%;
		padding: 0 0 10px 0;
		width: 100%;
	}
	#body {
		background: #f8f8f8;
		border: 1px solid #ccc;
		margin: 10px 0 0 0;
		padding: 0 10px 10px 10px;
	}
	#content {
		background: #e8e8e8;
		border: 1px solid #999;
		margin: auto;
		padding: 10px;
		width: 600px;
	}
	#footer {
		margin: 0 0 0 0;
		padding: 10px 0 10px 0;
	}
	</style>
</head>
<body>

<div id="content">

<h1>Tasks Pro&trade;/Tasks Server Check</h1>

<p class="tag">Checking your server to see if it is properly configured for <a href="http://www.taskspro.com/">Tasks Pro&trade;</a> and <a href="http://www.kingdesign.net/tasks/">Tasks</a>...</p>

<div id="body">

<h2>1. PHP Version Test</h2>
<p>The current releases of Tasks Pro&trade; and Tasks work on PHP 4 (version 4.1 or later) and PHP 5.</p>
<?php
if (!function_exists('version_compare')) {
?>
<p class="result" style="color: #600;"><strong>Result:</strong> Error, you need to have PHP 4.1 or later. Your PHP version is <?php print(phpversion()); ?>.</p>
<?php
}
else {
?>
<p class="result" style="color: #060;"><strong>Result:</strong> Success, your PHP version is <?php print(phpversion()); ?>.</p>
<?php
}
?>

<h2>2. MySQL Library Test</h2>
<p>PHP must have MySQL libraries available so it can store data properly (if you plan to use the MySQL database).</p>
<?php
if (function_exists('mysql_connect')) {
?>
<p class="result" style="color: #060;"><strong>Result:</strong> Success, PHP is compiled with MySQL libraries enabled.</p>
<?php
}
else {
?>
<p class="result" style="color: #600;"><strong>Result:</strong> Warning, PHP is not compiled with MySQL libraries enabled. MySQL is the officially supported database in Tasks Pro&trade; 1.6, however if you plan to use an unofficially supported database (PostgreSQL or Microsoft SQL Server), you can safely ignore this warning.</p>
<?php
}
?>

<h2>3. Session Configuration Test</h2>
<p>Sessions need to be working so that the login and security work properly.</p>
<?php
if (ini_get('session.auto_start') == 0) {
?>
<p class="result" style="color: #060;"><strong>Result:</strong> Success, Session Auto-Start is not enabled in your PHP settings.</p>
<?php
}
else {
?>
<p class="result" style="color: #600;"><strong>Result:</strong> Error, Session Auto-Start is enabled in your PHP settings. Tasks Pro&trade; and Tasks cannot be run with this configuration. While there is <a href="http://bugs.php.net/bug.php?id=19578">no workaround</a> for this, it can usually be solved through settings in a .htaccess file. These settings are included in the Tasks Pro&trade; and Tasks distributions.</p>
<?php
}
?>
<p><iframe src="<?php print($_SERVER["PHP_SELF"]); ?>?action=sessions_check&nc=<?php print($nc); ?>"></iframe></p>

<h2>4. 401 Authentication Test</h2>

<p>401 Authentication is the preferred authentication method used for the iCalendars and RSS feeds. To use 401 authentication, PHP must be able to get the login information from the web server.</p>

<p>When you click the button below, a new window will open with a prompt for you to enter a username and password. Enter anything you like into these fields (you must enter something), then click the OK button. If you enter a username and password and are prompted for a username and password <strong>a second time</strong>, the test has failed.</p>

<p><input type="button" value="Run Test" onclick="window.open('server_check.php?action=401_auth')" /></p>

<p>If the 401 authentication test fails on your server, you can choose to use <a href="http://www.kingdesign.net/support/faq/url-based-auth/" target="_blank">URL based authentication</a> instead for RSS Feeds and iCalendars.</p>

<h2>5. File Upload Check</h2>
<p>To be able to upload and attach files to tasks and notes, your PHP installation must have this feature enabled.</p>
<?php
if (ini_get('file_uploads') == 1) {
?>
<p class="result" style="color: #060;"><strong>Result:</strong> Success, File Uploads are enabled in your PHP settings.</p>
<p>The current maximum file upload size in your PHP configuration is: <?php print(inisize_to_bytes(ini_get('upload_max_filesize'))); ?> bytes.</p>
<p>Note: Your MySQL installation may have different <a href="http://dev.mysql.com/doc/mysql/en/Packet_too_large.html">limitations</a>.</p>
<?php
}
else {
?>
<p class="result" style="color: #600;"><strong>Result:</strong> Error, File Uploads are disabled in your PHP settings. You need to <a href="http://www.php.net/manual/en/configuration.directives.php#ini.file-uploads">enable</a> them to allow people to upload files in Tasks Pro&trade;.</p>
<?php
}
?>

<h2>6. E-mail Configuration Test</h2>

<p>To receive e-mail reminders and notifications, PHP must be able to send e-mail. This will send a test e-mail to the address you enter below. If you receive the e-mail, your server is configured to allow PHP to send e-mail.</p>

<form name="email" method="post" action="<?php print($_SERVER["PHP_SELF"]); ?>" onsubmit="if (document.email.to.value == '') { alert('Please enter your e-mail address.'); document.email.to.focus(); return false; }">
	<input type="hidden" name="action" value="email" />

	<p>
		<label>Send to email address:</label>
		<input type="text" name="to" value="" size="50" />
	</p>
	
	<p>
		<input type="submit" name="subit" value="Send Test E-mail" />
	</p>

</form>

<h2>7. Create Tasks from E-mail Check</h2>
<p>To be able to create tasks from e-mails, PHP must have the <a href="http://www.php.net/imap">IMAP functions</a> enabled.</p>
<?php
if (function_exists('imap_open')) {
?>
<p class="result" style="color: #060;"><strong>Result:</strong> Success, your PHP installation has the IMAP functions enabled.</p>
<?php
}
else {
?>
<p class="result" style="color: #600;"><strong>Result:</strong> Error, IMAP functions are disabled in your PHP installation. You need to enable these functions in order to create tasks from e-mails.</p>
<?php
}
?>

</div>

<p id="footer">Copyright &copy; 2004-<?php print(date("Y")); ?> <a href="http://www.kingdesign.net/" target="_blank">King Design</a>. All rights reserved.</p>

</div>

</body>
</html>