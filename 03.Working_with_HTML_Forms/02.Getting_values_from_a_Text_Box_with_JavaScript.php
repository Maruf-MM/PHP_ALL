<?php
include "header.php";
?>
<script>
  function formfunction() {
    var name = document.myform.username.value;
    var showdata = "username is :" + name;
    document.getElementById("output").innerHTML = showdata;
  }
</script>

<div id="output"></div>
<form action="" method="POST" name="myform" id="myform" onsubmit="formfunction(); return false;">
  <table>
    <tr>
      <td>Username:</td>
      <td><input type="text" name="username" required="1"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="Submit">
        <input type="reset" value="Clear">
      </td>
    </tr>
  </table>
</form>
<?php
include "footer.php";
?>