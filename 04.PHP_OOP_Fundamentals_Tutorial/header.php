<?php
$fonts = "verdana";
$fonts2 = "#FB8637";
$fontcolor = "#FC8C41";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Syntax</title>

  <style>
    .phpcoding {
      width: 900px;
      margin: 0 auto;
      background-color: <?php echo "#ddd" ?>;
      font-family: <?php echo $fonts ?>
    }

    .header,
    .footer {
      text-align: center;
      color: <?php echo $fontcolor ?>;
      background-color: darkslateblue;
      padding: 25px;
    }

    .header h2,
    .footer h2 {
      margin: 0 auto;
    }

    .maincontent {
      min-height: 600px;
      padding: 20px;
    }

    p {
      margin: 0;
    }
  </style>

</head>

<body>

  <div class="phpcoding">

    <section class="header">
      <h2><?php echo "PHP Fundamental Trainning"; ?></h2>
    </section>
    <section class="maincontent">
      <span style="float:right">
        <?php
        date_default_timezone_set('Asia/Dhaka');
        echo "Time is : " . date('h:i:s a');
        ?>
      </span>