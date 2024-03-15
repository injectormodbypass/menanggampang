<?php
$tunnel = isset($_GET['prodi']) ? $_GET['prodi'] : '';
$htmlDirectory = 'html_files/';
$filePath = $htmlDirectory . $tunnel . '.html';
$filePath1 = $htmlDirectory . 'notfound.html';
if (file_exists($filePath)) {
    $content = file_get_contents($filePath);
    echo $content;
} else {
    $content1 = file_get_contents($filePath1);
    echo $content1;
}
?>