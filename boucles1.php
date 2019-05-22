<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Les boucles 1 PHP</title>
    </head>
    <body>
      <?php
      function impair($num)
{
 if($num % 2 != 0) // Si le nombre est impair on retourne true
 {
  return true;
 }
 return false; // Sinon on retourne false
}

for($i= 0; $i <= 150; $i++)
{
 if(impair($i))
 { // Si le nombre est impair on l'affiche
  echo $i;
 }
}
      ?>
</body>
</html>
