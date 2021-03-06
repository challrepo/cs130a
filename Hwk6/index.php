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
          <h2>Pick A Color Combination To See Your Selection:</h2>
          <div class="input">
            <p>Step 1. Select A Background Color</p>
            <select class="" name="backgroundColor">
               <option value="012622">Dark Green</option>
               <option value="003b36">Rich Black</option>
               <option value="cc7178">Cinnamon Satin</option>
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
            <button id="send" role="button">
              <label for="send">Generate Combination</label>
            </button>
          </div>
        </form>
      </div>

    </div>
  </body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
