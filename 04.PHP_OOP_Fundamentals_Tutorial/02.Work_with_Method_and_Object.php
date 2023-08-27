<?php
include "header.php";
include "function.php";

?>
<form action="" method="post">
  <table>
    <tr>
      <td>Enter the First Number: </td>
      <td><input type="number" name="num1"></td>
    </tr>
    <tr>
      <td>Enter the Last Number: </td>
      <td><input type="number" name="num2" id=""></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="calculate" value="Calculate">
        <input type="reset" name="reset" value="clear">
      </td>
    </tr>
  </table>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  if ((empty($num1) or empty($num2)))
  {
    echo "Must be entered Two Number!!!";
    echo $num1,$num2;
  } 
  else 
  {   
    class calculation
{
  function add($a,$b)
  {
    echo "Summation is: ".($a+$b)."<br>";
  }
  function sub($a,$b)
  {
    echo "Subtraction is: ".($a-$b)."<br>";
  }
  function mul($a,$b)
  {
    echo "Multiplication is: ".($a*$b)."<br>";
  }
  function div($a,$b)
  {
    echo "Division is: ".($a/$b)."<br>";
  }
}
    $object=new calculation;
    $object->add($num1,$num2);
    $object->sub($num1,$num2);
    $object->mul($num1,$num2);
    $object->div($num1,$num2);

  }
} 
?>
<?php
include "footer.php";
?>