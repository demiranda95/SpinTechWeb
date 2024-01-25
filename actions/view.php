<?php

require_once('../vendor/tecnickcom/tcpdf/tcpdf.php');

// Store the file name into variable
$file = '../assets/docs/catalog-bmpminerals.pdf';
$filename = 'Catalogo - SpinTechnologies 2023.pdf';

// Header content type
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

// Read the file
@readfile($file);

?>