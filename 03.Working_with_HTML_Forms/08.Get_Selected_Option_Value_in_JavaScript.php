<?php
include "header.php";
?>
<script>
  function selectoption()
  {
    var index = document.myform.coder.selectedIndex;
    var value =document.myform.coder.options[index].value;
    var showdata = "You are "+value+" coder ";
    document.getElementById('show').innerHTML = showdata;
  }
</script>
<div id ="show"></div>
<form action="" method="post" name="myform" onsubmit="selectoption(); return false;">
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