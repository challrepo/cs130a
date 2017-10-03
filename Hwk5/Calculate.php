<?php
  if (isset($_GET['source'])) {
        highlight_file($_SERVER['SCRIPT_FILENAME']);
        exit;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Assignment 5 - CS130A</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h2>Car Loan Payment Calculator</h2>
    <h3>Result</h3>
  <div class="result">
    Your monthly payment will be:
  <span class="amount">
<?php

// Get input values from form
$loanAmount   = $_REQUEST['loanAmount'];
$interestRate = $_REQUEST['interestRate'];
$term         = $_REQUEST['term'];

// Calculate the payment amount
$payment = $loanAmount * ($interestRate/12) * (
    pow(1+($interestRate/12), $term) / (pow(1+($interestRate/12), $term)-1)
);

// output the result
printf('%.2f', $payment);
 ?>

    </span>
  </div>
</body>
</html>
