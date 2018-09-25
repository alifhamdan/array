<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>latihan</title>
    <style media="screen">
      .warna-table{
        background-color: silver;
      }
    </style>
  </head>
  <body>
    <table border="1" cellpadding="10" cellspacing="0">
      <?php for($i = 1; $i <= 5; $i++) :?>
          <?php if ( $i % 2 == 0) :?>
            <tr class="warna-table">
          <?php else : ?>
            <tr></tr>
          <?php endif; ?>
          <?php for($j = 1; $j <= 5; $j++) :?>
            <td><?php echo "$i,$j"; ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </table>
  </body>
</html>
