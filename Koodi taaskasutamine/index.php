
<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
}

