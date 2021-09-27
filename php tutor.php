<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td{
          border: 1px solid black;

        }
    </style>
</head>
<body>

</body>
</html>
<?php
echo "<table>\n";
$i = 1;
while($i<=11){

        echo "\t<tr>\n";
    $colls = 1;
    while($colls<=3){
        echo "\t \t <td>Row - $i /n, Coll - $colls</td> \n";
        $colls++;
    }
    $i++;
    echo "\t</tr>\n";
}
echo "</table>"
?>