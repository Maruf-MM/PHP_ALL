<?php
include "header.php";
?>

<?php
if(isset($_POST['gender'])) {
  $gender = $_POST['gender'];
  if($gender == "Male")
  {
    echo "You are a male";
  }
  else if($gender == "Female")
  {
    echo "You are Female";
  }
  else
  {
    echo "You are not a male or female";
  }
  // echo "Gender is : " . $gender;
}
?>

<form action="" method="POST">
  <table>
    <tr>
      <td>Gender:</td>
      <td><input type="radio" name="gender" value="Male">Male</td>
      <td><input type="radio" name="gender" value="Female">Female</td>
      <td><input type="radio" name="gender" value="Others">Others</td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="Submit"></td>
      <td><input type="reset" value="Clear"></td>
    </tr>
    <tr>
  </table>
</form>

<?php
include "footer.php";
?>