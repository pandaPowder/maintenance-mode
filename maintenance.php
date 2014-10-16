<?php
header("HTTP/1.1 503 Service Temporarily Unavailable");
header("Status: 503 Service Temporarily Unavailable");
header("Retry-After: 1200");
?>
<html>
<head>
<title>Site upgrade in progress</title>
<meta name="robots" content="none" />
</head>
<body>
<h1>Maintenance Mode</h1>
<p><a title="Perfectly Posh" href="https://www.perfectlyposh.com">perfectlyposh.com</a> is currently undergoing scheduled maintenance.<br />
Please try back <strong>in 20 minutes</strong>.</p>
<p>Sorry for the inconvenience.</p>
</body>
</html>

