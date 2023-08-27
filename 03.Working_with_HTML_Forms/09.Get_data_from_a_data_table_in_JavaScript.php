<?php
include "header.php";
?>
<script>
  function clickhere() {
    var getname = document.myform.name.value;
    document.getElementById('showName').innerHTML = getname;

    var genderlength = document.myform.gender.length;
    for (i = 0; i < genderlength; i++) {
      var checkgender = document.myform.gender[i].checked;
      if (checkgender) {
        gendValue = document.myform.gender[i].value;
      }
    }
    document.getElementById('showGender').innerHTML = gendValue;

    var deplength = document.myform.dep.length;
    for (i = 0; i < depLength; i++) {
      var checkDep = document.myform.dep[i].checked;
      if (checkDep) {
        depValue = document.myform.dep[i].value;
      }
    }
    document.getElementById('showDep').innerHTML = depvalue;

    var index = document.myform.coder.selectedIndex;
    var coderValue = document.myform.coder.options[index].value;
    document.getElementById('showCoder').innerHTML = coderValue;
  }
</script>

<table class="TBL">
  <tr>
    <td colspan="2" align="center">Output</td>
  </tr>
  <tr>
    <td>Name: </td>
    <td><span id="showName"></span></td>
  </tr>
  <tr>
    <td>Gender: </td>
    <td><span id="showGender"></span></td>
  </tr>
  <tr>
    <td>Department: </td>
    <td><span id="showDep"></span></td>
  </tr>
  <tr>
    <td>Coder: </td>
    <td><span id="showCoder"></span></td>
  </tr>
</table>

<form action="" method="post" name="myform" onsubmit="clickhere(); return false;">
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
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="feamle">Female
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