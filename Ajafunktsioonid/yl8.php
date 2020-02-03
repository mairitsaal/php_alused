<?php

//ajatsoon paika
date_default_timezone_set('Europe/Tallinn');

//Kuva kuupäev ja kellaaeg formaadis

$hetkeAeg = time();
$vormindatudAeg = date ('d.m.G:i', $hetkeAeg);
$konkreetneAeg = mktime(12, 31,0 ,3, 20, 2013);

$vormindatudKonkreetneAeg = date ( 'd.m.Y G:i', $konkreetneAeg);
echo $vormindatudAeg. '<br>';
echo $vormindatudKonkreetneAeg. '<br';
echo '<hr>';
//Kuva tänane eestikeelne nädalapäev, N: kolmapäev

$nadal = array(
    '1' => 'esmaspaev',
    '2' => 'teisipaev',
    '3' => 'kolmapaev',
    '4' => 'neljapaev',
    '5' => 'reede',
    '6' => 'laupaev',
    '7' => 'puhapaev'
);
$hetkeAeg = time();
$nadalaPaevaNumber =date('N', $hetkeAeg);
echo $nadal[$nadalaPaevaNumber];
echo '<hr>';

//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev
$kuud = array(
    '1' => 'jaanuar',
    '2' => 'veeburuar',
    '3' => 'märts',
    '4' => 'aprill',
    '5' => 'mai',
    '6' => 'juuni',
    '7' => 'juuli',
    '8' => 'august',
    '9' => 'september',
    '10' => 'oktoober',
    '11' => 'november',
    '12' => 'detsember'
);
$hetkeAeg = time();
$kuuNumber = date('n', $hetkeAeg);
$valjund = date('d').$kuud[$kuuNumber]. date(' Y').$nadal[$nadalaPaevaNumber];
echo $valjund;
echo '<hr>';

//Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!
$hetkel = time();
$jaaniPaev = mktime(0,0,0,6, 24, date('Y'));
$vaheSekundites = $jaaniPaev - $hetkel;
$vahePaevadel = round($vaheSekundites / (60 * 60 *24),0);
$valjund = date('Y').'aasta jaanipaevani on jäänud'.$vahePaevadel.'päeva!';
echo $valjund;
echo '<hr>';
//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.
 //vahe leida sekundites
$temaSynna1980 = mktime(0,0,0,11,6,1980);;
$temaSynnaNyyd = mktime(0,0,0,11, 6, date('Y'));
$temaVanusSekundites = $temaSynnaNyyd - $temaSynna1980;
$temaValjund = date('d.m.Y', $temaSynnaNyyd);


    $minuSynna = mktime(0,0,0,5,23,1984);;
$minuSynnaNyyd = mktime(0,0,0,5, 23, date('Y'));
$minuVanusSekundites = $minuSynnaNyyd - $minuSynna;
$minuValjund = date('d.m.Y', $minuSynnaNyyd);

$vaheSekundites = $temaVanusSekundites - $minuVanusSekundites;
if ($vaheSekundites > 0) {
    echo 'Tema on vanem <br>';
} else if ($vaheSekundites < 0){
    echo 'mina olen vanem <br>';
} else {
    echo 'Oleme sama vanad <br>';
}
echo $temaValjund.'<br>';
echo $minuValjund.'<br>';
echo 'Vahe aastates on'.round(abs($vaheSekundites) / (60*60*24*30.4*12),0).'<br>';

//Leia, kas sul on järgmine aasta juubel?

