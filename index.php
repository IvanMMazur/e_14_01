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
    <ul>
    <?php 
      $con=mysqli_connect("localhost","root","","sklep");
        /**print_r($con); проверка подключения с базой данных*/
        mysqli_query($con, "SET CHARSET utf8");
         $sql="SELECT * FROM `towary` WHERE `promocja`=1";
          $result=mysqli_query($con,$sql);
         {
           $i=1;
           while($row=mysqli_fetch_array($result))
           {
            echo "<li>".$row['nazwa']."</li>";
            $i++;
           }
         }
      mysqli_close($con);
    ?>
    </ul>
  </div>
  <div class="srodkowy">
    <h3>Cena wybranego artykulu w promocji</h3>
    <form method="post" action="">
      <select name="wybor">
        <option value="Gumka do mazania">Gumka do mazania</option>
        <option value="Cienkopis">Cienkopis</option>
        <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
        <option value="Markery 4 szt.">Markery 4 szt.</option>
      </select>
    <input type="submit" name="wybierz" value="WYBIERZ">
    </form>

    <?php
      if(!empty($_POST['wybor'])){
      $sql = "SELECT (cena*0.85) as cena FROM towary WHERE nazwa LIKE '{$_POST['wybor']}'  ";
      $con=mysqli_connect("localhost","root","","sklep");
      $resoult=mysqli_query($con,$sql);
        while ($record = $resoult->fetch_object()) {
          $cp = round($record->cena*100)/100;
          echo("<div class=\"ii\">Uwaga, cena w promocji wynosi, dzis {$cp} zlotych<bold>!!!</bold></div>");
        }
      }
    ?>
    
  </div>
  <div class="prawy">
   <h3>Kontakt</h3>
   <p>telefon: 123123123<br>e-mail:<a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
   <img src="promocja2.png" alt="promocja" height="180" width="200">
  </div>
  <div class="stopka">
    <h4>Autor strony 11223344555</h4>
  </div>
</body>
</html>
