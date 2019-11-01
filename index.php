<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sklep papierniczy</title>
  <link rel="stylesheet" href="styl.css" type="text/css">
  <meta charset="utf-8">
</head>
<body>
  <div class="baner">
    <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
  </div>
  <div class="lewy">
    <h3>Promocja 15% obejmuje artykuly:</h3>
    <?php 
      $con=mysqli_connect("localhost","root","","sklep");
        mysqli_query($con, "SET CHARSET utf8");
         $sql="SELECT * FROM `towary` WHERE `promocja`=1";
          $result=mysqli_query($con,$sql);
         {
           $i=1;
           while($row=mysqli_fetch_array($result))
           {
            echo "<ul><li>".$row['nazwa']."</li></ul>";
            $i++;
           }
         }
      mysqli_close($con);
    ?>
  </div>
  <div class="srodkowy">
    <h3>Cena wybranego artykulu w promocji</h3>
    <form method="post" action="1.php">
      <select name="wybor">
        <option value="Gumka do mazania">Gumka do mazania</option>
        <option value="Cienkopis">Cienkopis</option>
        <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
        <option value="Markery 4 szt.">Markery 4 szt.</option>
      </select>
    <input type="submit" value="WYBIERZ">
    </form>
    
  </div>
  <div class="prawy">
   <h3>Kontakt</h3>
   <p>telefon: 123123123<br>e-mail:<a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
   <img src="promocja2.png" alt="promocja" height="180" width="200">
  </div>
  <div class="stopka">
    <h4>Autor strony 11223344555</h4>
  </div>
<!-- //скрипты не сделаны и не подсоеденены -->
<!-- <?php
$con=mysqli_connect("localhost","root","","sklep");
  if (mysqli_connect_errno()) {
      echo "FALSE".mysqli_error();
  } else {
    echo ("SELECT database_id");
  }
mysqli_close($con);
?> -->
</body>
</html>
