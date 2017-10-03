<?php
  if (isset($_GET['source'])) {
        highlight_file($_SERVER['SCRIPT_FILENAME']);
        exit;
  }
?>
<html>
<head>
<title>Hello World | Courtney's Assignment Link Page</title>
</head>
<body>
  <h3>Todays date:
    <?php
      echo date(DATE_RFC2822);
    //$urlPath=dirname($_SERVER['SCRIPT_URL']).'/';
    //  $labsPath=$urlPath.'labs/';
    ?>
  </h3>
<p>Links to my assignments are here:</p>
<table>
  <tr>
    <th>Lab #</th>
    <th>Source URL(s)</th>
    <th>URL(s)</th>
  </tr>
  <tr>
    <th>0</th>
    <td><a href="/~chall1/cs130a/index.php?source" target="labs">Lab 1 Source code</a></td>
    <td><a href="/~chall1/cs130a/index.php" target="labs">Lab 1</a></td>
  </tr>
  <tr>
    <th>1</th>
    <td><a href="/~chall1/cs130a/example.php?source" target="labs">Assignment 2 Source code</a></td>
    <td><a href="/~chall1/cs130a/example.php" target="labs">Assignment 2</a></td>
  </tr>
  <tr>
    <th>2</th>
    <td><a href="/~chall1/cs130a/Hwk3.php?source" target="labs">Assignment 3 Source code</a></td>
    <td><a href="/~chall1/cs130a/Hwk3.php" target="labs">Assignment 3</a></td>
  </tr>
  <tr>
    <th>3</th>
    <td><a href="/~chall1/cs130a/Hwk4.php?source" target="labs">Assignment 4 Source code</a></td>
    <td><a href="/~chall1/cs130a/Hwk4.php" target="labs">Assignment 4</a></td>
  </tr>
  <tr>
    <th>4</th>
    <td><a href="/~chall1/cs130a/Hwk5/CalcForm.php?source" target="labs">Assignment 5 Source code</a></td>
    <td><a href="/~chall1/cs130a/Hwk5/CalcForm.php" target="labs">Assignment 5</a></td>
  </tr>
  <tr>
    <th>4</th>
    <td><a href="/~chall1/cs130a/Hwk6/index.php?source" target="labs">Assignment 6 Source code</a></td>
    <td><a href="/~chall1/cs130a/Hwk6/index.php" target="labs">Assignment 6</a></td>
  </tr>
</table>
</body>
</html>
