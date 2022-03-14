<?php

$temp = file_get_contents('index.html');
/*
$temp = <<<TEMP
<html>
variable ###VAR###
</html>
TEMP;
*/

$title1 = 'Aria Hotel 5/5 Sternen';
$title2 = 'Bally\'s Hotel 4/5 Sternen';
$title3 = 'Bellagio Hotel 5/5 Sternen';
$street1 = '3730 Las Vegas Boulevard';
$street2 = '3730 Las Vegas Boulevard South';
$street3 = '3600 Las Vegas Boulevard South';
$state1 = 'Las Vegas, Nevada 89158';
$state2 = 'Las Vegas, Nevada 89109';
$state3 = 'Las Vegas, Nevada 89109';
$temp = str_replace('###title1###',$title1,$temp);
$temp = str_replace('###title2###',$title2,$temp);
$temp = str_replace('###title3###',$title3,$temp);
$temp = str_replace('###street1###',$street1,$temp);
$temp = str_replace('###street2###',$street2,$temp);
$temp = str_replace('###street3###',$street3,$temp);
$temp = str_replace('###state1###',$state1,$temp);
$temp = str_replace('###state2###',$state2,$temp);
$temp = str_replace('###state3###',$state3,$temp);

echo $temp;
?>
