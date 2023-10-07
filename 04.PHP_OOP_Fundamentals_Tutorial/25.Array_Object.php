<?php
include "header.php";
$arr = array("HTML","CSS","PHP","MySql");
$obj= new ArrayObject($arr);
$iterator= $obj->getIterator();
while($iterator->valid()){
    echo $iterator->current()."<br/>";
    $iterator->next();
}
include "footer.php";
?>