<?php
include_once "QuadraticEquation.php";
$bieuthuc = new QuadraticEquation(4,7,2);
$delta = $bieuthuc->getDiscriminant();
$delta0 = pow($this->GetB(),2) - ( 4 * $this->GetA() * $this->GetC() );
if ($delta == 0 ){
    echo " Phuong trinh co 1 nghiem chung la : " . $delta0 ;
}
else if ( $delta >= 0 ){
    echo " Phuong trinh co 2 nghiem la : " . $bieuthuc->getRoot1() . " va " . $bieuthuc->getRoot2();
}
else{
    echo " Phuong trinh vo nghiem ";
}

