<?php
include "header.php";
class Language{
    private $category;
    private $framework;
    function setcategory($a)
    {
        $this->category=$a;
    }
   function getcategory()
    {
        return $this->category;
    }
    function setframework($b)
    {
        $this->framework=$b;
    }
    function getframework()
    {
        return $this->framework;
    }
    public function __clone()
    {
        $var = new Language;
        $var->setcategory($this->category);
        $var->setframework($this->framework);
        return $var;
    }
}
$obj= new Language;
$obj->setcategory("Beautiful->");
$obj->setframework("Bangladesh");
echo $obj->getcategory();
echo $obj->getframework();

$cloneObj = clone $obj;
$cloneObj->setcategory("Rubish->");
$cloneObj->setframework("India");
echo "<br>";
echo $cloneObj->getcategory();
echo $cloneObj->getframework();

echo "<br>";
echo $obj->getframework();
include "footer.php";
?>