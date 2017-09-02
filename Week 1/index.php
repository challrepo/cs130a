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
      $urlPath=dirname($_SERVER['SCRIPT_URL']).'/';
      $labsPath=$urlPath.'labs/';
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
</table>
</body>
</html>
