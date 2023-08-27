<?php
include "header.php";
?>
<script>
  function multicheck() {
    var length = document.myform.coder.length;
    var $result = "";
    for (i = 0; i < length; i++) {
      var checkvalue = document.myform.coder[i].checked;
      if (checkvalue) {
       $result += document.myform.coder[i].value + ", ";
      }
    }
    var showdata = "You are learning " + $result;
    document.getElementById('show').innerHTML = showdata;
  }
</script>
<div id="show"></div>
<form action="" method="POST" name="myform" id="myform" onsubmit="multicheck(); return false;">
  <table>
    <tr>
      <td>Gender:</td>
      <td><input type="checkbox" name="coder" value="C">C</td>
      <td><input type="checkbox" name="coder" value="C++">C++</td>
      <td><input type="checkbox" name="coder" value="PHP">PHP</td>
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