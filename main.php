<?php
include 'bac2.php';

$pt1=new bac2();
$pt1->setA(3);
$pt1->setB(4);
$pt1->setC(8);

echo $pt1->getA();
echo '<br>';
echo $pt1->getB();
echo '<br>';
echo $pt1->getC();
echo '<br>';
echo $pt1->getDricriminat();
echo '<br>';
echo $pt1->root();