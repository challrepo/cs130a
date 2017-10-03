
<?php
error_reporting(E_ERROR | E_PARSE);

/*
Observations:

variables - Variables are used to store data for later use
data types - PHP has it's own version of data typing that is dynamic and based on the value
data type conversion - PHP has some nuances regarding data conversion for example
if a number and a string that starts with a numeric value are added, the numeric value is used as a number
resulting in addition operation happening.
difference between single and double quoted strings - single quoted strings are cannot interpolate variables into the string.
They also do not allow for control characters like \n to be processed like they were if they were enclosed in double quotes.
*/
?>

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
    <title>Homework 3 | CS130</title>
  </head>
  <body>
    <?php

      /*
        Part I
      */
      // string
      const STR_CONST_DBQT = "Constant string, double quote defined";
      define(STR_CONST_DEF, "Constant string defined");

      // float
      const FLOAT_CONST = 3.14;
      define(FLOAT_CONST_DEF, 3.14);

      // integer
      const INT_CONST = 5;
      define(INT_CONST_DEF, 5);

      // variable expansion into Constant
      $name = "Courtney";
      define(GREETING, "Welcome, ${name}!");
      print GREETING . '<br/>';


      /*
        Part II
     */

     // integer
     $age = 39;

     // boolean
     $isHungry = TRUE;

     // float
     $amount = 11.52;

     // string
     $nameDblQuote    = "Courtney's age is ${age}";
     print $nameDblQuote . "<br/>";

     $nameSingleQuote = 'Courtney\'s age is ${age}' . '<br/>';
     print $nameSingleQuote;

     $intvar = 2;
     print "type is: ".gettype($intvar).'<br/>';

     $floatvar = 4.4;
     print "type is: ".gettype($floatvar).'<br/>';

     $string = "1 is the loneliest number";
     print "type is: ".gettype($string).'<br/>';

     $thisvar = $intvar + $string;
     print "type is: ".gettype($thisvar).'<br/>';

     $that = $floatvar - $string;
     print "type is: ".gettype($that).'<br/>';

     $other = $intvar * $floatvar;
     print "type is: ".gettype($other).'<br/>';

     $what = "$intvar";
     print 'the type of the variable $what is: '.gettype($what);
     ?>
  </body>
</html>
