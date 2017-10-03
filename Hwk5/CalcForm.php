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

    <form class="" action="Calculate.php" method="post">
      <table id="dataForm">
        <tr>
          <td>
            <label for="loanAmount">Loan Amount: </label>
            <input type="text" name="loanAmount" value="0.00" size="8" placeholder="0.00"></td>
        </tr>
        <tr>
          <td>
            <label for="interestRate">Interest Rate i.e. 5% = 0.05: </label>
            <input type="text" name="interestRate" value="0.00" size="8" placeholder="0.05"></td>
        </tr>
        <tr>
          <td>
            <label for="term">Number of Months: </label>
            <input type="text" name="term" value="0" size="8" placeholder="36"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="calculate" value="Calculate"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
