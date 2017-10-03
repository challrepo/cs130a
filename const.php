<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Constant test</title>
  </head>
  <body>
    <h1>Constant variable exercise</h1>
    This is a define constant declaration:<br>
    <?php
    echo 'define(\'APPLE\', \'GREEN\');<br/>';
    define(APPLE, 'GREEN');
    echo APPLE;
    ?>

    <br>
    <br>

    This is a const declaration:
    <?php

    echo 'const FRUIT = \'Kiwi\';';
    const FRUIT = 'Kiwi';
    echo "<br/> FRUIT = " . FRUIT;
    ?>
    <br>
  </body>
</html>
