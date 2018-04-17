<?php 

$header ="MIME-Version: 1.0\r\n";
$header.= 'From: "BDE Reims "'."\n";
$header.= 'Content-Type:text/html; charset= "utf-8"'."\n";
$header.='Content-Transfert-Encoding: 8bit';


$message='Salut c\'est dj pierrot';

mail("corentin.gadret@viacesi.fr", "hey", $message, $header);