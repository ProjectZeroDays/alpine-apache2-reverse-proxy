<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Print Header Function</title>
</head>
<body>
<h1>Received HTTP Request Headers</h1>
 <table style="width:100%">

<?php
$headers = apache_request_headers();

foreach ($headers as $header => $value) {
    echo "<tr>";
    echo "<td>$header</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
?>
</table>
<br>
<br>
<h1>Navigation</h1>
Go back to <a href="/backend/">backend service</a> or to <a href="/">reverse proxy</a>

</body>
</html>

