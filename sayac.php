
$data = fopen('data.txt', 'r');
$rakam = fread($data, filesize('data.txt'));
fclose($data);

$data = fopen('data.txt', 'w');
$artibir = $rakam+1;
fwrite($data, $artibir);
fclose($data);

echo "Bu sayfa $rakam kere görüntülendi.";
