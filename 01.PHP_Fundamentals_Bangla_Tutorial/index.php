<?php
include 'header.php';

?>








<!-- Cookie 38 -->
<?php
// if(!isset($_COOKIE['visited']))
// {
// setcookie("visited","1",time()+86400,"/") or die("Could not set cookie!");
// echo "This is your First visit in the website";
// }
// else{
//   echo "You are the old visitor<br><br>";
// }
// setcookie("visited", "1",time()-3600);
?>
<!-- Cookie 38 -->














<!-- //   $_REQUEST & $_POST 26 -->

<!-- <form action ="<?php //echo $_SERVER['PHP_SELF'] 
                    ?>" method="GET">
  Username: <input type="text" name="username"/>
  <input type="submit" value="Submit"/>
</form> -->

<?php

// if($_SERVER['REQUEST_METHOD']=="GET"){
// $name=$_GET['username'];
// if(empty($name))
// {
//   echo "Username is required";
// }
// else 
// {
// echo "Your input is : $nam  e";
// }
// }

?>
<!-- //   $_REQUEST & $_POST 26 -->




<!-- $_GET 27 -->

<!-- <a href="text.php?msg=Good&text=Bye">Sent data</a> -->

<!-- $_GET 27 -->








<!--Form Validation 28-->
<?php
// $name = $email = $website = $comment = $gender = "";
?>
<!-- <form method="POST" action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']); 
                                  ?>">
        <table>
          <tr>
            <td>Name </td>
            <td> <input type="text" name="name" required></td>
          </tr>

          <tr>
            <td>Email </td>
            <td><input type="text" name="email" required></td>
          </tr>

          <tr>
            <td>Website </td>
            <td><input type="text" name="website" required></td>
          </tr>

          <tr>
            <td>Comment :</td>
            <td><textarea name="comment" cols="40" rows="5" required></textarea></td>
          </tr>

          <tr>
            <td>Gender</td>
            <td>
              <input type="radio" name="gender" value="male" required>Male
              <input type="radio" name="gender" value="female" required>Female
            </td>
          </tr>

          <tr>
            <td></td>

            <td>
              <input type="submit" name="submit" value="Submit">
            </td>
          <tr>
        </table>
      </form> -->


<?php
// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//   $name = validate($_POST['name']);
//   $email = validate($_POST['email']);
//   $website = validate($_POST['website']);
//   $comment = validate($_POST['comment']);
//   $gender = validate($_POST['gender']);

//   echo "Name: " . $name . "<br>";
//   echo "email: " . $email . "<br>";
//   echo "website: " . $website . "<br>";
//   echo "comment: " . $comment . "<br>";
//   echo "gender: " . $gender . "<br>";
// }

// function validate($data)
// {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
?>
<!--Form Validation 28-->








<!-- Form required 29 -->

<?php
// $name = $email = $website = $comment = $gender = "";
// $errname = $erremail = $errwebsite = $errcomment = $errgender = "";

// if ($_SERVER['REQUEST_METHOD'] == "POST") 
// {
//   if(empty($_POST['name']))
//   {
//     $errname ="<span style='color:red'>Name is Required</span>";
//   }
//   else
//   {
//     $name= validate($_POST['name']);
//   }
//   if(empty($_POST['email']))
//   {
//     $erremail="<span style='color:red'>Email is Required</span>";
//   }
//   else
//   {
//     $email= validate($_POST['email']);
//   }
//   if(empty($_POST['website']))
//   {
//     $errwebsite="<span style='color:red'>Website is required </span>";
//   }
//   else
//   {
//     $website= validate($_POST['website']);
//   }
//   if(empty($_POST['comment']))
//   {
//     $errcomment="<span style='color:red'>Comment is required</span>";
//   }
//   else
//   {
//     $comment= validate($_POST['comment']);
//   }
//   if(empty($_POST['gender']))
//   {
//     $errgender="<span style='color:red'>Gender is required</span>";
//   }
//   else
//   {
//     $gender= validate($_POST['gender']);
//   }
// }

// function validate($data)
// {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
?>


<!-- <form method="POST" action="<?php // echo htmlspecialchars($_SERVER['PHP_SELF']); 
                                  ?>">
        <table>
          <p style="color:red">* Required Field</p>
          <tr>
            <td>Name </td>
            <td> <input type="text" name="name" >*<?php //echo $errname 
                                                  ?></td>
          </tr>

          <tr>
            <td>Email </td>
            <td><input type="text" name="email" >*<?php //echo $erremail 
                                                  ?></td>
          </tr>

          <tr>
            <td>Website </td>
            <td><input type="text" name="website" >*<?php // echo $errwebsite 
                                                    ?></td>
          </tr>

          <tr>
            <td>Comment :</td>
            <td><textarea name="comment" cols="40" rows="5" ></textarea>*<?php //echo $errcomment 
                                                                          ?></td>
          </tr>

          <tr>
            <td>Gender</td>
            <td>
              <input type="radio" name="gender" value="male" >Male*
              <input type="radio" name="gender" value="female" >Female*
              <?php //echo $errgender 
              ?>
            </td>
          </tr>

          <tr>
            <td></td>

            <td>
              <input type="submit" name="submit" value="Submit">
            </td>
          <tr>
        </table>
      </form> -->



<!-- Form Required 29 -->





<!-- URL/E-Mail Validation 30 -->

<?php
// $name = $email = $website = $comment = $gender = "";
// $errname = $erremail = $errwebsite = $errcomment = $errgender = "";

// if ($_SERVER['REQUEST_METHOD'] == "POST") 
// {
//   if(empty($_POST['name']))
//   {
//     $errname ="<span style='color:red'>Name is Required</span>";
//   }
//   else
//   {
//     $name= validate($_POST['name']);
//   }
//   if(empty($_POST['email']))
//   {
//     $erremail="<span style='color:red'>Email is Required</span>";
//   }
//   elseif(!FILTER_VAR($_POST['email'],FILTER_VALIDATE_EMAIL))
//   {
//      $erremail="Email format is no valid";
//   }
//   else
//   {
//     $email= validate($_POST['email']);
//   }
//   if(empty($_POST['website']))
//   {
//     $errwebsite="<span style='color:red'>Website is required </span>";
//   }
//   elseif(!FILTER_VAR($_POST['website'],FILTER_VALIDATE_URL))
//   {
//      $errwebsite="<span style='color:red'>Website is invalid </span>";
//   }
//   else
//   {
//     $website= validate($_POST['website']);
//   }
//   if(empty($_POST['comment']))
//   {
//     $errcomment="<span style='color:red'>Comment is required</span>";
//   }
//   else
//   {
//     $comment= validate($_POST['comment']);
//   }
//   if(empty($_POST['gender']))
//   {
//     $errgender="<span style='color:red'>Gender is required</span>";
//   }
//   else
//   {
//     $gender= validate($_POST['gender']);
//   }
// }

// function validate($data)
// {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
?>

<!-- <form method="POST" action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']); 
                                  ?>">
        <table>
          <p style="color:red">* Required Field</p>
          <tr>
            <td>Name </td>
            <td> <input type="text" name="name" >*<?php //echo $errname 
                                                  ?></td>
          </tr>

          <tr>
            <td>Email </td>
            <td><input type="text" name="email" >*<?php //echo $erremail 
                                                  ?></td>
          </tr>

          <tr>
            <td>Website </td>
            <td><input type="text" name="website" >*<?php  //echo $errwebsite 
                                                    ?></td>
          </tr>

          <tr>
            <td>Comment :</td>
            <td><textarea name="comment" cols="40" rows="5" ></textarea>*<?php //echo $errcomment 
                                                                          ?></td>
          </tr>

          <tr>
            <td>Gender</td>
            <td>
              <input type="radio" name="gender" value="male" >Male*
              <input type="radio" name="gender" value="female" >Female*
              <?php //echo $errgender 
              ?>
            </td>
          </tr>

          <tr>
            <td></td>

            <td>
              <input type="submit" name="submit" value="Submit">
            </td>
          <tr>
        </table>
      </form>     -->

<!-- URL/E-Mail Validation 30 -->










<!-- Date and Time 31 -->

<?php
// echo "Today is ".date("d/m/y")."<br>";
// echo "Today is ".date("d.m.Y")."<br>";
// echo "Today is ".date("d-m-Y")."<br>";
// echo "Today is ".date("D/M/Y")."<br><br>";

// echo "Today is ".date("l")."<br>";
// echo "Time is ".date("h:i:sa")."<br>";
// echo "ok ".date_default_timezone_get()."<br>";
// date_default_timezone_set("Asia/Dhaka")."<br>";
// echo"Time in Bangladesh ".date("h:i:sa")."<br><br>";
?>

<!-- Date and Time 31 -->











<!-- Include and required 32 -->
<?php

// THIS IS IMPLEMENTED ON FIRST AND LAST OF THIS SCRIPT

// 
?>
<!-- Include and required 32 -->














<!-- File Handling 33 -->
<?php
// readfile('text.txt');
// echo '<br>';

// echo readfile('text.txt');
?>
<!-- File Handling 33 -->












<!-- File open/read/close 34 -->

<?php
// $ourfile= fopen('text.txt',"r") or die("File not found!!");
// echo readfile('text.txt');
// echo fread($ourfile,filesize('text.txt'));
// fclose($ourfile); 

// $ourfile= fopen('text.txt',"r") or die("File not found!!");
// echo fgets($ourfile,filesize('text.txt'));
// fclose($ourfile); 

// $ourfile= fopen('text.txt',"r") or die("File not found!!");
// echo fgetc($ourfile);
// fclose($ourfile); 



// $opfile=fopen('name.txt','r') or die("File does not found!!");
// echo fread($opfile,filesize('name.txt'));
// fclose($opfile);

// $opfile=fopen('name.txt','r') or die("File does not found!!");
// while(!feof($opfile))
// {
//  echo fgets($opfile)."<br>";
// }
// fclose($opfile);

// $opfile=fopen('name.txt','r') or die("File does not found!!");
// while(!feof($opfile))
// {
//  echo fgetc($opfile)."<br>";
// }
// fclose($opfile);
?>
<!-- File open/read/close 34 -->













<!-- File Create & Write 35 -->
<?php
// $crtfile= fopen('newfile.txt','w') or die ('File not fount!');
// $one="Maruf";
// fwrite($crtfile,$one);
// fclose($crtfile);
?>
<!-- File Create & Write 35 -->

















<!-- File/Image Upload 36 -->
<!-- <form action="" method="POST" enctype="multipart/form-data" >
<input type="file" name="image"><br>
<input type="submit" value="submit">
</form> -->
<?php

// if(isset($_FILES['image']))
// {
//    $filename= $_FILES['image']['name'];
//    $filetmp= $_FILES['image']['tmp_name'];
//    move_uploaded_file($filetmp,'images/'.$filename);
//    echo '<img src="images/' . $filename . '" alt="Uploaded Image">';

// }
?>
<!-- File/Image Upload 36 -->
















<!-- Session 37-->
<?php
// $_SESSION['username']="maruf";
// $_SESSION['password']="123";
// session_unset();
// echo "The Username is:". $_SESSION['username'];
// session_unset();
// echo "<br>The password is:". $_SESSION['password'];
// session_destroy();

?>
<!-- Session 37-->
















<!--Filter 39-->
<!-- <table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  // foreach(filter_list() as $id =>$filter)
  // {
  //   echo"<tr><td>".$filter.'</td><td>'.filter_id($filter).'</td></td>';
  // }
  ?>
</table> -->

<?php

// $str="<h2>I am learning PHP.</h2>";
// $newstr=filter_var($str,FILTER_SANITIZE_STRING);
// echo $newstr."<br>";

// $int=9.5;
// if(filter_var($int,FILTER_VALIDATE_INT))
// {
//   echo "This is Integer <br>";
// }
// else{
// echo"This is not Integer <br>";
// }

// $ip="127.0.0.1";
// if(filter_var($ip,FILTER_VALIDATE_IP))
// {
//   echo "<br> This is valid IP:".$ip;
// }
// else{
// echo"<br>This is not valid IP:".$ip;
// }

// $email="maruf236hasan@gmail.com";
// if(filter_var($email,FILTER_VALIDATE_EMAIL))
// {
//   echo "<br> This is valid EMAIL:".$email;
// }
// else{
// echo"<br>This is not valid EMAIL:".$email;
// }

// $site="https://www.maruf236hasan@gmail.com";
// if(filter_var($site,FILTER_VALIDATE_URL))
// {
//   echo "<br> This is valid website:".$site;
// }
// else{
// echo"<br>This is not valid website:".$site;
// }
?>

<!--Filter 39-->















<!--Filter Advance 40-->
<?php
// $int = 10;
// $maxint = 100;
// $minint = 5;
// if (filter_var($int, FILTER_VALIDATE_INT, array("options" => 
// array("min_range" => $minint, "max_range" => $maxint)))) {
//   echo "It is valid<br>";
// } else {
//   echo "It is not valid<br>";
// }


//$url="https://www.example.php?name=Peter&age=37";
// if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED))
// {
//   echo "This url is Valid <br>";
// } else {
//   echo "It has not query string";
// }
?>
<!--Filter Advance 40-->




















<!--Error reporting 41-->
<?php
// phpinfo();
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE |E_NOTICE);
// $price = 45;
// if ($price == 45) {
//   print "The price is: $price";
// } else {
//   print "Price is not 45";
// }
?>
<!--Error reporting 41-->






















<!--Exception 42-->
<?php

//function numcheck($num)
// {
//  if($num>1)
//  {
//   throw new Exception("Value must be 1 or below");
//  } 
//  return true;
// }
// try
// {
//   numcheck(2);
//   echo "If you see this, the number is 1 or below";
// }
// catch(Exception $error)
// {
//   echo "Message: ".$error->getMessage();
// }
?>
<!--Exception 42-->

















<!--Explode and Implode 43-->
<?php

// $str="We are learning PHP";
// print_r(explode(' ',$str));
// echo"<br>";

// $str="We are learning PHP";
// $newstr=explode(' ',$str);
// echo $newstr[1];


// $string= array("We", "are", "learning", "PHP");
// echo implode('.',$string);
?>
<!--Explode and Implode 43-->

























<!--Case Change 44-->
<?php 
// if(isset($_POST['text']))
// {
  // global $txt;
  // $txt=$_POST['text'];
  // echo strtoupper($txt."<br>");
  // echo strtolower($txt."<br>");
  // echo ucfirst($txt."<br>");
  // echo ucwords($txt."<br>");
//}
?>
<!-- <form action="index.php" method="POST">
<input type="text" name="text" value="<?php //global $txt;
 //echo $txt; ?>">
<input type="submit" name="Submit">
</form> -->
<!--Case change 44-->























<!--Strip Whitespace/Characters 45-->
<?php 
// if(isset($_POST['text']))
// {
//   global $text;
//   $text=$_POST['text'];
//   // echo trim($text);
//   // echo ltrim($text," .");
//   echo rtrim($text," .");

//  }
?>
<!-- <form action="index.php" method="POST">
<input type="text" name="text" value="<?php //global $text;
 //echo $text; ?>">
<input type="submit" name="Submit">
</form> -->

<?php 
// if(isset($_POST['password']))
// {
//   global $text;
//   $text=$_POST['password'];
//   // echo trim($text);
//   // echo ltrim($text," .");
//   echo trim($text," .");

//  }
?>
<!-- <form action="index.php" method="POST">
<input type="password" name="password" value="<?php // global $text;
 //echo $text; ?>">
<input type="submit" name="Submit">
</form> -->

<!--Strip Whitespace/Characters 45-->




















<!--Require/Require_once 46-->
<?php 
// require "new.php";
// echo "<br>";
// require "new.php";
// echo "<br>";
// require_once "new.php";

?>
<!--Require/Require_once 46-->














































































<?php

// PHP VARIABLE DECLARATION 04
// echo "Love for PHP ";
// $a=5;
// $b=7;
// echo $c=$a+$b;
// $d= " Hello dear";
// $e= " I Love You ";
// $g=143;
// echo $f=$d.$e.$g;
// // PHP VARIABLE DECLARATION 04


// // SHOW OUTPUT IN PHP 05
// echo "PHP IS"," NICE";
// echo "<br>";
// // print "PHP","NICE";
// $A="BANGLADESH";
// var_dump($A);
// $A= print "BANGLADESH";
// var_dump($A)
// SHOW OUTPUT IN PHP 05



//  PHP DATA TYPES 06
// $string="I LOVE YOU";
// echo $string;

// echo "<br>";

// $integer= 143;
// echo $integer;

// var_dump($integer);

// $float=3.1416;
// var_dump ($float);

// $boolean= TRUE;
// var_dump($boolean);

// $array= array("I","LOVE","YOU");
// var_dump($array);
// print_r ($array);

// class maruf
// {
//   function identity()
// {
// return "Maruf is a student";
// }
// function access()
// {
//   echo $this->identity();
// }
// }
// $store=new maruf;
// $store->access();

// $null=1;
// var_dump($null);

// $realnull=null;
// var_dump($realnull);
//  PHP DATA TYPES 06



//   PHP STRING 07
// $str="The font-family property specifies a list of fonts";
// echo strrev($str);

// echo str_word_count($str);

// echo strlen($str);

// echo strpos($str,"a");

// echo str_replace("list","name",$str);
//   PHP STRING 07




//   PHP CONSTANTS 08
// define("CONSTANT","I am a student ");
// echo CONSTANT;

// define("CONSTANT1"," and also job holder ");
// echo CONSTANT1;
// function maruf()
// {
//   echo CONSTANT;
// }
// maruf();
// function mehedi()
// {
//   return CONSTANT;
// }
//  echo mehedi();
//   PHP CONSTANTS 08




//   PHP OPERATOR 09
// echo "ARITHMETIC OPERATION"."<hr>";
// $x=10;
// $y=2;
// echo $x+$y."<br>";

// echo $x-$y."<br>";

// echo $x*$y."<br>";

// echo $x/$y."<br>";

// echo $x%$y."<br>";      
//   PHP OPERATOR 09




//   Assignment Operator 10
// $x=1;
// echo $x."<br>";

// $m=5;
// $m+=5;
// echo $m."<br>";

// $n=5;
// $n-=5;
// echo $n."<br>";

// $o=5;
// $o*=5;
// echo $o."<br>";

// $p=5;
// $p/=5;
// echo $p."<br>";

// $q=5;
// $q%=5;
// echo $q."<br>";
//   Assignment Operator 10





//   Comparison Operator 11
// $x=100;
// $y=100;
// var_dump($x==$y);

// $x=100;
// $y="100";
// var_dump($x==$y);

// $x=100;
// $y="100";
// var_dump($x!==$y);

// $x=100;
// $y="100";
// var_dump($x===$y);  

// $x=100;
// $y="100";
// var_dump($x!==$y);

// $x=100;
// $y="100";
// var_dump($x<>$y);

// $x=100;
// $y="100";
// var_dump($x!=$y);

// $x=100;
// $y="100";
// var_dump($x>=$y);

// $x=100;
// $y="100";
// var_dump($x<=$y);
//   Comparison Operator 11




//   Increment/decrement Operator 12
// echo $a=5;
// echo"<br>";
// echo ++$a;
// echo"<br>";
// echo"<br>";

// $a=5;
// echo $a++;
// echo "<br>";
// echo $a; 
// echo"<br>";
// echo"<br>";

// echo $a=5;
// echo"<br>";
// echo --$a;
// echo "<br>";
// echo"<br>";

// $a=5;
// echo $a--;
// echo"<br>";
// echo $a;
//   Increment/decrement Operator 12




//   Logical Operator 13
//  $a=10;
//  $b=20;
//  if($a==10 and $b==20)
//  {
//   echo "Bangladesh is a small country";
//  }
//  else {
//   echo "Bangladesh is a beautiful country";
//  }
// echo "<br>";

//  if($a==10 or $b==90)
//  {
//   echo "Bangladesh is a small country";
//  }
//  else {
//   echo "Bangladesh is a beautiful country";
//  }
//  echo "<br>";


//  if($a==10 xor $b==20)
//  {
//   echo "Bangladesh is a small country";
//  }
//  else {
//   echo "Bangladesh is a beautiful country";
//  }
//  echo "<br>";

//  $a=10;
//  $b=20;
//  if($a==10 && $b==20)
//  {
//   echo "Bangladesh is a small country";
//  }
//  else {
//   echo "Bangladesh is a beautiful country";
//  }
// echo "<br>";

//  if($a==10 || $b==90)
//  {
//   echo "Bangladesh is a small country";
//  }
//  else {
//   echo "Bangladesh is a beautiful country";
//  }
//  echo "<br>";


//  if($a!==10)
//  {
//   echo "Bangladesh is a small country";
//  }
//  else {
//   echo "Bangladesh is a beautiful country";
//  }
//   Logical Operator 13





//    String Operator 14
// $a="Maruf ";
// $b="hasan";
// $a .= $b;
// echo $a;
//    String Operator 14




//    Array Operator 15
// $a= array("a"=>"Maruf ");
// $b= array("b"=>"Hasan");
// var_dump($a+$b);
// echo "<br>";

// var_dump($a!==$b);
// echo "<br>";

// $a= array("a"=>"Maruf");
// $b= array("a"=>"Maruf");
// var_dump($a===$b);
// echo "<br>";

// $a= array("a"=>"Maruf ");
// $b= array("b"=>"Hasan");
// var_dump($a!=$b);
// echo "<br>";

// $a= array("a"=>"Maruf ");
// $b= array("b"=>"Hasan");
// var_dump($a<>$b);
// echo "<br>";
//    Array Operator 15




//    Conditional statement 16
// $x=10;
// if($x<15)
// {
//   echo "x is smaller then 15";
// }
// echo "<br>";        


// $x=15;
// if($x<10)
// {
//   echo "x is greater then 10";
// }
// else
// echo "x is smaller than 20";
// echo "<br>";   


// $x=50;
// if($x<5)
// {
//   echo"Bangladesh";
// }
// else if($x<10)
// {
//   echo"India";
// }
// else if($x==50)
// {
//   echo "This is true";
// }
//    Conditional Statement 16




//    Switch Statement 17
// $m="Hello";
// switch($m)
// {
//   case "HI";
//   echo"It is right";
//   break;

//   case "HIW";
//   echo"It is right";
//   break;

//   case "HEY";
//   echo"It is right";
//   break;

//   case "He";
//   echo"It is right 1";
//   break;

//   default:
//   echo"There is nothing";
// }
//    Switch Statement 17




//    While Loop 18
// $a=6;
// while($a<=10)
// {
//   echo "The number is: $a <br>";
//   $a++;
// }

// $b=10;
// do
// {
//   echo "At first do something then check the condition";
//   $b++;
//   echo "<br>";
// }
// while($b<20)
//    While Loop 18




//    For Loop 19
// for($a=1;$a<=10;$a++)
// {
//   echo "The number is: $a";
//   echo"<br>";
// }
//    For Loop 19




//    Foreach Loop 20
// $names= array("maruf","hasan","mehedi","hasannn");
// foreach($names as $name)
// {
//   echo "$name<br>";
// }                    
//    Foreach Loop 20




//    Functions 21
// function school()
// {
//   echo "I am a student";
// }
// school();
// echo"<br>";

// function name($n)
// {
//   echo "$n";                                                                       
// }
// name("Maruf");
// name(" Hasan");
// echo"<br>";

// function department($n="hey",$m="year")
// {
//   echo "$n $m";                                                                       
// }
// department("Maruf","CSE");
// department();
// department("Maruf","CSE");
// echo"<br>";

// function add($a,$b)
// {
//   $c=$a+$b;
//   return $c;
// }
// echo "10+10 = ".add(10,10);
//    Functions 21




//   Array 22
// echo "Indexing Array:<br>";
// $a= array(1,6,9,8,5,3,7,8,4);
// echo $a[2]."<br><br>";

// echo count($a);
// echo "<br><br>";

// $length= count($a);
// for($i=0;$i<$length;$i++)
// {
//   echo $a[$i]."<br>";
// }
// echo "<br><br>";
// echo "Assosiative Array:<br>";

// $nameage=array("Maruf"=>"23","Munna"=>"17","Muhit"=>"11");
// foreach($nameage as $name=>$age)
// {
//   echo "Name: ".$name." Age: "."$age<br>";
// }
// echo "<br><br>";

// echo "MULTIDIMENTIONAL Array:<br>";
// $cars = array ( array("BMW",17,30),
//                 array("VOLVO",15.7,11),
//                 array("SAAB",6.9,7.9,0,1)
//               );
//  echo $cars [2][0];
//  echo "<br><br>";

// for($row=0; $row<3; $row++)
// {
//   echo "The row number is: $row <br>";
//   for($column=0;$column<3;$column++)
//   {
//     echo $cars[$row][$column]."<br>";
//   }

// }
//   Array 22




//   Sorting array 23
// $names= array("Maruf",'Hasan','Mehedi');
// sort($names);
// for($i=0;$i<3;$i++)
// {
//   echo $names[$i]."<br>";
// }
// echo "<br>";

// $intvalue= array(2,5,3,9,1,7);
// rsort($intvalue);
// $length = count($intvalue);
// for($j=0; $j<$length; $j++)
// {
//   echo $intvalue[$j]."<br>";
// }

// $work=array("Teacher"=>"100","Farmer"=>"90","Doctor"=>"80");
// ksort($work);
// foreach($work as $k=>$v)
// {
//   echo $k.": ".$v."<br>";
// }

// $work=array("Teacher"=>"59","Farmer"=>"12","Doctor"=>"80");
// asort($work);
// foreach($work as $k=>$v)
// {
//   echo $k.": ".$v."<br>";
// }

//   Sorting Array 23





//   Variable Scope 24
// $m=10;                    
// function one()
// {
//   global $m;
//   $a=10;
//   echo $a."<br>";
//   echo "access from function : $m ";

// }

// function two()
// {
//   $b=20;
//   echo $b;
// }
// one();
// two();
//   Variable Scope 24





//   Superglobal variable 25
// $x=17;
// $y=6;
// function SUM()
// {
//   global $x,$y,$z;
//   echo $z=$x+$y;
// }
// SUM(); 
// echo "<br>";

// $M=10;
// $N=5;
// function test()
// {
//   $GLOBALS['O']=$GLOBALS['M']+$GLOBALS['N'];
// }                  
// test();
// echo $O."<br>";

// echo $_SERVER['PHP_SELF']."<br>";
// echo $_SERVER['SERVER_NAME']."<br>";
// echo $_SERVER['SCRIPT_NAME']."<br>";
// echo $_SERVER['HTTP_USER_AGENT']."<br>";
// echo $_SERVER['SERVER_ADDR']."<br>";
//   Superglobal variable 25




//   $_REQUEST & $_POST 26                 
//   $_REQUEST & $_POST 26
?>
<?php
include 'footer.php';
?>