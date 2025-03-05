<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $array = [15,4,18,23,10];
    

    function sort_2way($array,$order) {
      if ($order === TRUE) {
        echo "昇順にソートします。<br>";
        sort($array);
        foreach($array as $val) {
          echo $val.'<br>';
        }
      } else {
        echo "降順にソートします。<br>";
        arsort($array);
        foreach($array as $val) {
          echo $val.'<br>';
        }
      }
    }
    sort_2way($array,TRUE);
    sort_2way($array,FALSE);
    
    
    
    ?>



  </p>
</body>
</html>