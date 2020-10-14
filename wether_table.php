<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
define('IMG_PATH', 'images/');
define('FILENAME_K', 'filename');
define('ALT_K', 'alt');
define('TEMPS_K', 'temps');

$previsions = array(
'2018-02-11' => array(
FILENAME_K => 'degagement.gif',
ALT_K => 'icone degaement',
TEMPS_K => '-17ºC',
),
'2018-02-12' => array(
FILENAME_K => 'soleil_nuage.gif',
ALT_K => 'icone soleil et nuage',
TEMPS_K => '-11ºC',
),
'2018-02-13' => array(
FILENAME_K => 'neige.gif',
ALT_K => 'icone de neige',
TEMPS_K => '-12ºC',
),
'2018-02-14' => array(
FILENAME_K => 'soleil.gif',
ALT_K => 'icone soleil',
TEMPS_K => '-15ºC',
),
'2018-02-15' => array(
FILENAME_K => 'neige.gif',
ALT_K => 'icone de neige',
TEMPS_K => '-11ºC',
),
'2018-02-16' => array(
FILENAME_K => 'soleil.gif',
ALT_K => 'icone soleil',
TEMPS_K => '-15ºC',
),
);
/////////// HARSHIL SONI
    function show($k,$temp,$img)
    {
        echo '<tr>';
        echo "<td>$k</td>";
        echo "<td><img src='images/$img'></td>";
        echo "<td>$temp</td>";
        echo "</tr>";
    }
?>
<body>
    <div>
        <header>
            <h1>Weather Table</h1>
        </header>
        <main>
            <table>
                <?php 
                    foreach($previsions as $key => $v){
                        $temp = $v[TEMPS_K];
                        $img = $v[FILENAME_K];
                        $k = $key;
                        show($k,$temp,$img);
                    }
                ?>
            </table>
        </main>
    </div>
</body>
</html>