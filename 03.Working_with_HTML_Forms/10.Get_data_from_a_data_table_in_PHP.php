<?php
include "header.php";
?>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['submit']))
  {
    $name = $_POST["name"];
    $Gender = $_POST["gender"];
    $Department = $_POST["dep"];
    $coder = $_POST["coder"];
  }
  echo "Name is: ".$name."<br> You are a ".$Gender."<br> Your Department name is ".$Department."<br> You are a ".$coder." Coder";
  
}
?>



<form action="" method="post" >
  <table>
    <tr>
      <td>Name :</td>
      <td>
        <input type="text" name="name" id="">
      </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Feamle">Female
      </td>
    </tr>
    <tr>
      <td>Department</td>
      <td>
        <input type="checkbox" name="dep" value="CSE" id="">CSE
        <input type="checkbox" name="dep" value="EEE" id="">EEE
        <input type="checkbox" name="dep" value="ECE" id="">ECE
      </td>
    </tr>
    <tr>
      <td>Coder</td>
      <td>
        <select name="coder" id="">
          <option value="C">C</option>
          <option value="C++">C++</option>
          <option value="PHP">PHP</option>
        </select>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="submit" value="Submit" id="">
        <input type="reset" name="clear" value="Clear" id="">
      </td>
    </tr>
  </table>
</form>

<?php
include "footer.php";
?>