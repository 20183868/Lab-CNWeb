<?php 
// set name of XML file 
$file = "sins.xml"; 
// load file 
$xml = simplexml_load_file($file) or die ("Unable to load XML file!"); 
// access each <sin> 
echo $xml->sin[0] . "</br>"; 
echo $xml->sin[1] . "</br>"; 
echo $xml->sin[2] . "</br>"; 
echo $xml->sin[3] . "</br>"; 
echo $xml->sin[4] . "</br>"; 
echo $xml->sin[5] . "</br>"; 
echo $xml->sin[6] . "</br>"; 

// iterate over <sin> element collection 
foreach ($xml->sin as $sin) 
{
     echo "$sin</br>";
}

?>