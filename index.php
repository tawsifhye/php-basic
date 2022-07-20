<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = ['apple', 'milk', 'rice', 'mango', 'beef'];
    echo '
   <h2>Hello</h2>
   ';
   $number = 50;
 var_dump($arr);

    echo '<ul>';
    $i = 0;
    foreach($arr as $a) {

        echo '<li>';
        //   print  $arr[$i].ctype_upper($arr[$i]);
        echo ucfirst($a);
        echo '</li>';
        $i++;
    }
    echo '</ul>';

    ?>
</body>

</html>