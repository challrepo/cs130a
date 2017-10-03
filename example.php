
<?php /*
Observations:

1. Parse error, syntax error T_VARIABLE
2. The code executes without any errors but the result is not the intended or wanted result
3. print's the literal string to socket_create_listen
4. The gross pay is commented out and not executed
5. Parse error, syntax unexpected '<'
6. Division by zero error, probably because php thinks the value is a constant

*/
?>

<?php
  if (isset($_GET['source'])) {
        highlight_file($_SERVER['SCRIPT_FILENAME']);
        exit;
  }
?>
<html>
<head>
<title>Basic PHP Example</title>
</head>
<body>

<?php
$hoursWorked = 40;
$payRate = 12;
$grossPay = $hoursWorked * $payRate;

print "<p>Hours Worked: $hoursWorked</p>";
print "<p>Pay Rate: $payRate</p>";
print "<p>Gross Pay: $grossPay</p>";
?>

</body>
</html>
