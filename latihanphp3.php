<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .warna-baris{
        background-color: silver;

      }
    </style>
  </head>
  <body>
    <table class="warna-baris" border="1" cellpadding= "10"; cellspacing= "0";>
      <?php
        for( $i = 1; $i <= 3; $i++ ) {
          echo "<tr>";
            for($j = 1; $j <=5; $j++ )
              echo "<td>$i,$j</td>";
          echo "</tr>";
        }
      ?>
    </table>
    <p></p>
  </body>
</html>
