<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<?php

$ServerInformation = GetPhpInformation();
echo $ServerInformation;

function GetPhpInformation()
{
	$phpVersion =  phpversion();
	
	return <<<PHPINFO
<span id="php-version-information">
	<dl>
		<dd><a href="http://php.net/ChangeLog-7.php#{$phpVersion}"><img alt="PHP Version {$phpVersion}" src="images/php7powered.png" /></a></dd>
	</dl>
</span>	
PHPINFO;
	
}


?>
</body>
</html>