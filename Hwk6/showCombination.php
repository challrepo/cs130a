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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


    <title>Hwk6 - CS130A</title>
  </head>
  <body>
    <div class="content">
      <div class="hero">
        <form class="" action="showCombination.php" method="post">
          <?php

          $backgroundColor = $_POST['backgroundColor'];
          $textColor       = $_POST['textColor'];
          $error           = 0;

          if($backgroundColor === $textColor) {
            $error = 1;
          }
          ?>

          <h2>Pick A Color Combination To See Your Selection:</h2>
          <div class="error">

          </div>
          <div class="input">
            <p>Step 1. Select A Background Color</p>
            <select class="" name="backgroundColor">
               <option value="012622">Dark Green</option>
               <option value="003b36">Rich Black</option>
               <option value="ece5f0">Lavender Mist</option>
               <option value="e98a15">Carrot Orange</option>
               <option value="59114d">Pansy Purple</option>
            </select>
          </div>
          <div class="input">
            <p>Step 2. Select A Text Color</p>
            <select class="" name="textColor">
               <option value="89023e">Pink Raspberry</option>
               <option value="cc7178">Cinnamon Satin</option>
               <option value="ffd9da">Pale Pink</option>
               <option value="c7d9b7">Pale Silver</option>
               <option value="f3e1dd">Pale Pink #2</option>
            </select>
          </div>
          <div class="input">
            <input type="submit" name="" value="Generate Combination" id  ="send">
          </div>
        </form>
      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var error = <?php echo $error;?>;
        var bgColor = '<?php echo $backgroundColor; ?>';
        var textColor = '<?php echo $textColor; ?>';

        if(!error) {
          $('.content').css('background-color', '#' + bgColor);
          $('.content').css('color', '#' + textColor);
        } else {
          $('.error').html('Error: Please enter different background and text colors.');
        }
      });
    </script>
  </body>
</html>
