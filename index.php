<?php
if (preg_match('/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/', $_SERVER['REMOTE_ADDR'])) {
	echo '<div style="background: linear-gradient(#FF0000, #FF99CC); padding: 5px; color: white; border: 1px solid #333333; border-radius: 3px; font-size: 13px; width: 50px; text-align: center; font-family: sans-serif;">via IPv4';
} else {
	echo '<div style="background: linear-gradient(#0000FF, #99CCFF); padding: 5px; color: white; border: 1px solid #333333; border-radius: 3px; font-size: 13px; width: 50px; text-align: center; font-family: sans-serif;">via IPv6';
}
?>
<br>
<a style="font-size:4px; color: white; text-decoration: none; font-family: sans-serif;" href="http://kibousoft.co.jp/">Checked by Kibousoft</a>
