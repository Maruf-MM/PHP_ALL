<?php
include "header.php";
?>
<script>
  function clickHere() {
    var genderlength = document.myform.gender.length;
    for (i = 0; i < genderlength; i++) {
      var checkvalue = document.myform.gender[i].checked;
      if (checkvalue) {
        var checkresult = document.myform.gender.value;
      }
    }
    var showdata = "You are a " + checkresult;
    document.getElementById('show').innerHTML = showdata;
  }
</script>
<div id="show"></div>
<form action="" method="POST" name="myform" id="myform" onsubmit="clickHere(); return false;">
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