<?php
// Get the raw POST data
$data = file_get_contents("php://input");

// Decode the JSON data to a PHP array.
$decoded = json_decode($data, true);

// Check if the JSON decoding succeeded.
if (!is_array($decoded)) {
    http_response_code(400);
    echo "Invalid JSON data received.";
    exit;
}

// Extract the fields from the decoded data
$ad = $decoded['ad'] ?? '';
$soyad = $decoded['soyad'] ?? '';
$email = $decoded['email'] ?? '';
$cinsiyet = $decoded['cinsiyet'] ?? '';
$konu = $decoded['konu'] ?? '';
$diller = $decoded['dil'] ?? [];
$mesaj = $decoded['mesaj'] ?? '';

// Check if all the required fields are present
if ($ad === '' || $soyad === '' || $email === '' || $cinsiyet === '' || $konu === '' || empty($diller) || $mesaj === '') {
    http_response_code(400);
    echo "Missing required fields.";
    exit;
}

// Process the form data...
echo "Ad Soyad : $ad $soyad <br>";
echo "E-Mail : $email <br>";
echo "Cinsiyet : $cinsiyet <br>";
echo "Konu : $konu <br>";
echo "Diller : ";
foreach ($diller as $key => $value) {
    echo "$value / ";
}
echo "<br>Mesaj : $mesaj";
?>