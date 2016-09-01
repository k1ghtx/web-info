<html>
<head>
</head>
<body style="font-family: monospace;">
<?php
// Coding By Benhabi Mahdi
// Version N 1.0.0
  $IP = $_SERVER['REMOTE_ADDR'];
	$Port = $_SERVER['SERVER_PORT'];
	$remote_Port = $_SERVER['REMOTE_PORT'];
	$SERVER_NAME = $_SERVER['SERVER_NAME'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$SERVER_ADDR = $_SERVER['SERVER_ADDR'];
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$REQUEST_SCHEME = $_SERVER['REQUEST_SCHEME'];
	$SERVER_PROTOCOL = $_SERVER['SERVER_PROTOCOL'];
	$HTTP_CONNECTION = $_SERVER['HTTP_CONNECTION'];
	$SERVER_SOFTWARE = $_SERVER['SERVER_SOFTWARE'];
	$SERVER_ADMIN = $_SERVER['SERVER_ADMIN'];
	$SCRIPT_FILENAME = $_SERVER['SCRIPT_FILENAME'];

	echo "Your IP Adresse : ".$IP;
	echo "<br>";
	echo "Your Connect with this web  from Port : ".$Port;
	echo "<br>";
	echo "Server Name : ".$SERVER_NAME;
	echo "<br>";
	echo "Server Adresse : ".$SERVER_ADDR;
	echo "<br>";
	echo "Remote Port : ".$remote_Port;
	echo "<br>";
	echo "User Agent : ".$user_agent;
	echo "<br>";
	echo "Document Root : ".$DOCUMENT_ROOT;
	echo "<br>";
	echo "Request Scheme : ".$REQUEST_SCHEME;
	echo "<br>";
	echo "Server Protocol  : ".$SERVER_PROTOCOL;
	echo "<br>";
	echo "HTTP Connection  : ".$HTTP_CONNECTION;
	echo "<br>";
	echo "SERVER SOFTWARE  : ".$SERVER_SOFTWARE;
	echo "<br>";
	echo "SERVER ADMIN  : ".$SERVER_ADMIN;
	echo "<br>";
	echo "SCRIPT FILENAME : ".$SCRIPT_FILENAME;

	echo "<br>";
	echo "Checko Some Port : ";

	$host = $SERVER_NAME;
	$ports = array(21, 22, 23,25,53, 80, 81, 110, 143, 443, 3306, 3389);

		foreach ($ports as $port)
		{
		    $connection = @fsockopen($host, $port);

		    if (is_resource($connection))
		    {
		        echo '<br>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.' . "\n";

		        fclose($connection);
		    }

		    else
		    {
		        echo '<br>' . $host . ':' . $port . ' is not responding.' . "\n";
		    }
		}
?>
</body>
</html>
