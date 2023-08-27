<?php
include "header.php";
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $coder = $_POST['coder'];
  echo "You are a " . $coder . " coder";
}
?>

<form action="" method="post">
  <table>
    <tr>
      <td>Language :</td>
      <td>
        <select name="coder" id="">
          <option>Select one</option>
          <option value="C">C</option>
          <option value="C++">C++</option>
          <option value="PHP">PHP</option>
        </select>
      </td>
      <td>
        <input type="submit" name="submit" value="Submit" id="">
      </td>
    </tr>
  </table>
</form>

<?php
include "footer.php";
?>