<a href="https://github.com/kibousoft/viav6_web/" style="text-decoration: none; color: white;">
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$headers = apache_request_headers();
if ($headers['X-Forwarded-For']) {
	$ip = $headers['X-Forwarded-For'];
}

if (preg_match('/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/', $ip)) {
	echo '<div><img src="https://viav6.kibousoft.co.jp/via-IPv4-red.svg"></div>';
} else {
	echo '<div><img src="https://viav6.kibousoft.co.jp/via-IPv6-green.svg"></div>';
}
?>
</a>