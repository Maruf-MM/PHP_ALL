<?php
include "header.php";
?>
<?php
if(isset($_POST['submit'])) {
  $language = $_POST['language'];

  foreach($language as $key=> $value){
    echo $value.", ";
  }
}
?>
<form action="" method="POST" required="1">
  <table>
    <tr>
      <td>Language:</td>
      <td>
      <input type="checkbox" name="language[]" value="c">C
      <input type="checkbox" name="language[]" value="c++">C++
      <input type="checkbox" name="language[]" value="php">PHP
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
      <input type="submit" name="submit" value="Submit">
      <input type="reset" value="Clear">
      </td>
    </tr>
    <tr>
  </table>
</form>

<?php
if(isset($_POST['submit'])) {
  $language = $_POST['language'];

  foreach($language as $key=> $value){
    echo  $key. $value.", ";
  }
}
?>
<form action="" method="POST" required="1">
  <table>
    <tr>
      <td>Language:</td>
      <td>
      <input type="checkbox" name="language[14]" value="c">C
      <input type="checkbox" name="language[6]" value="c++">C++
      <input type="checkbox" name="language[5]" value="php">PHP
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
      <input type="submit" name="submit" value="Submit">
      <input type="reset" value="Clear">
      </td>
    </tr>
    <tr>
  </table>
</form>
<?php
include "footer.php";
?>
