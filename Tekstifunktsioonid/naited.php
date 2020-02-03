<?php

$tekst = 'Life Is About Ignoring The Drama.';

echo strtolower($tekst);
echo '<hr>';
echo strtoupper($tekst);
echo '<hr>';
echo ucfirst($tekst);
echo '<hr>';
echo ucfirst(strtolower($tekst));
echo '<hr>';
$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);
echo '<hr>';
echo str_word_count($tekst);
echo '<hr>';
$tekst='     A women should soften but not weaken a man     ';
echo "<pre> $tekst </pre>";
echo '<hr>';
echo "<pre>".trim($tekst)."</pre>";
echo '<hr>';
echo "<pre>".ltrim($tekst)."</pre>";
echo '<hr>';
echo "<pre>".rtrim($tekst)."</pre>";
echo '<hr>';
$tekst = 'A women should soften but not weaken a man';
echo trim($tekst, "A, a, k..n, w");
echo '<hr>';
$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo $tekst;
echo '<hr>';
echo strip_tags($tekst);
echo '<hr>';
echo strip_tags($tekst, '<br>, <b>');
echo '<hr>';
//Tekst kui massiiv

$tekst = 'All thinking men are atheists';
echo $tekst[0];
echo '<hr>';
echo $tekst[4];
echo '<hr>';
echo substr($tekst, 3, 5);
echo '<hr>';
echo substr($tekst, 4, -13);
echo '<hr>';
print_r(str_word_count($tekst, 1));
echo '<hr>';
$sona = str_word_count($tekst, 1);
echo $sona[4];

echo '<hr>';
//Tekstist otsimine

$tekst = 'Happiness is intelligent people is the rarest thing I know.';
$otsitav = 'in';
$leia_tekstist = strpos($tekst, $otsitav, 0);
echo $leia_tekstist;
echo '<hr>';

$nihe = 0;
while($leia_tekstist = strpos($tekst, $otsitav, $nihe)){
    echo $leia_tekstist.'<br>';
    $nihe = $leia_tekstist+strlen($otsitav);
}
echo '<hr>';

//Teksti asendamine
$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo '<hr>';
$tekst = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = 'lehm';
$asenda = 'koer';
echo str_replace($otsi, $asenda, $tekst);
echo '<hr>';
$otsi = array ('lehm', 'sarv', 'ees');
echo str_replace($otsi, $asenda, $tekst);