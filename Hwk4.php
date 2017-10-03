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

      // Task 1
      /*  Here we are assigning some elements to an array to create an assosciative array. We are then going to print out some
         of the array element values.
      */
      print "<h3>Task 1</h3>";

      $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
      "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
      "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
      "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
      "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
      "Austria" => "Vienna", "Poland"=>"Warsaw") ;

      print "The capital of Netherlands is {$ceu['Netherlands']}<br/>";
      print "The capital of Greece is {$ceu['Greece']}<br/>";
      print "The capital of Germany is {$ceu['Germany']}<br/>";

      print "<h3>Task 2</h3>";

      // Task 2
      /* Here we will sort our array by key using a sorting algorithm behind the scenes to
         order the array by key name alphabetically. We will then print our array to the screen.

      */
      if(ksort($ceu))
        print_r($ceu);
      else
        print "Error sorting \$ceu by key<br/>";

      print "<h3>Task 3</h3>";

      // Task 3
      /* Here we will do something to similar to Task 3 however we will be sorting our array by value */
      if(asort($ceu))
        print_r($ceu);
      else
        print "Error sorting \$ceu by value<br/>";

      // Task 4
      /* We will create a multi-dimensional array by first creating several arrays in seperate statements
         and then assiging these arrays as a list to one array. A few print operations will then follow.
         */
      print "<h3>Task 4</h3>";

      // multi-dimensional array using arrays
      $array1 = array(1, 2, 3);
      $array2 = array(3, 4, 5);
      $multiDimen = array($array1, $array2);

      // one line multi-dimensional array
      $mynewarray = array(array(1, 2, 3), array(3, 4, 5));
      print_r($mynewarray);
      print_r("<br/>");
      print_r($multiDimen);
      print_r("<br/>");

      // Task 5
      /* We delete an array element by unsetting the key and then print the array to the screen*/
      print "<h3>Task 5</h3>";

      unset($ceu['Lithuania']);
      print_r($ceu);

      print_r(explode('/', 'http://www.apple.com/trailers/wb/harry_potter/thegobletoffire/large.html'));
    ?>
  </body>
</html>
