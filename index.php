<a href="https://github.com/kibousoft/viav6_web/" style="text-decoration: none; color: white;">
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$headers = apache_request_headers();
if ($headers['X-Forwarded-For']) {
	$ip = $headers['X-Forwarded-For'];
}

if (preg_match('/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/', $ip)) {
	echo '<div style="background: linear-gradient(#FF0000, #FF99CC); padding: 5px; border: 1px solid #333333; border-radius: 3px; font-size: 13px; width: 50px; text-align: center; font-family: sans-serif;">via IPv4';
} else {
	echo '<div style="background: linear-gradient(#0000FF, #99CCFF); padding: 5px; border: 1px solid #333333; border-radius: 3px; font-size: 13px; width: 50px; text-align: center; font-family: sans-serif;">via IPv6';
}
?>
<br>
<span style="font-size:4px; font-family: sans-serif;">Checked by Kibousoft</span>
</a>
