<?php
$file = 'source/cv.pdf';
$filename = 'cv.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename.'"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: byter');
@readfile($file);