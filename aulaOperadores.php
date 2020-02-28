<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
      <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m= ($n1+$n2)/2;
        echo "A soma vale ".($n1+$n2);
        echo "<br/> A subtração vale ".($n1-$n2);
        echo "<br/> A multiplicação vale ".($n1*$n2);
        echo "<br/> A divisão vale ".($n1/$n2);
        echo "<br/> O modulo vale ".($n1%$n2);
        echo "<br/> A média é $m";
      ?>
  </body>
</html>
