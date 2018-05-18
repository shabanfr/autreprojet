<?php
$myfile = fopen("0489-xx.txt", "w") or die("Unable to open file!");
echo "Generateur";

for ($i=489292299; $i <= 489295299; $i++) { 
	$txt = PHP_EOL."BEGIN:VCARD
VERSION:2.1
N:;".$i.";;;
FN:".$i."
TEL;CELL:0".$i."
END:VCARD";
	//$txt = PHP_EOL."0".$i;
	fwrite($myfile, $txt);
}

fclose($myfile);
echo "fin du transfere";
?>