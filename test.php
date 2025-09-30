<?php
function findmin($a,$b,$c){
    if($a<$b and $a <$c){
        echo("so be  nhat la ".$a);

    }
    elseif($b<$c and $b<$a){
        echo("so be nhat la ".$b);

    }
    else{
        echo("so be nhat la" . $c);
    }
}
$a = 1;
$b =2;
$c = 3;
findmin($a,$b,$c);

?>