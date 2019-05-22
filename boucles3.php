<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Les boucles 3 PHP</title>
    </head>
    <body>
      <!-- "BORDER" pour les bordure -->
      <TABLE BORDER>
  <?php
  // 1ère ligne de bordure
  echo "<TR><TD></TD>";
  for ($c=0;$c<13;$c++) {
    echo "<TH>$c</TH>";
  }
  echo "</TR>\n";
  // toutes les lignes
  for ($l=0;$l<13;$l++) {
    // 1 ligne
    echo "<TR><TH>$l</TH>";
    for ($c=0;$c<13;$c++) {
      $r=$c*$l;
      echo "<TD ALIGN=right>$r</TD>";
    }
    echo "</TR>\n";
  }
  ?>
     </TABLE>
</body>
</html>
