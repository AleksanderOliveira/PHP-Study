<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <?php
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];
      echo "<h2> Os valores recebidos são $v1 e $v2 <br/>";
      echo "O valor absoluto de $v2 é ". abs($v2);
      echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1,$v2);
      echo "<br/>A raiz de $v1 é ". sqrt($v1);
      echo "<br/>O valor de $v2 arredondado é ". round($v2);// ceil arredonda pra cima e floor arredonda pra baixo
      echo "<br/>A parte inteira de $v2 é ". intval($v2);
      echo "<br/>O valor de $v1 em moeda é R$" . number_format($v1,2);
     ?>
  </body>
</html>
