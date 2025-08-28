<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
include "phpqrcode\qrlib.php";

// Make sure "qrcodes" folder exists and is writable
$dir = "qrcodes/";
if (!file_exists($dir)) {
    mkdir($dir);
}

// Message to encode in the QR
$message = "Hello! This is your unique QR message.";

// Unique file name
$filename = $dir . "qr_" . uniqid() . ".png";

// Generate QR code (L = low error correction, 5 = size)
QRcode::png($message, $filename, QR_ECLEVEL_L, 5);

// Show image in browser
echo "<h3>QR Code Generated:</h3>";
echo "<img src='$filename' />";
?>

</body>
</html>