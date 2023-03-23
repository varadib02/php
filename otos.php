<?php
$file = fopen('otos.csv', 'r');
print '<table border="1">';
while (!feof($file)) {//feof($file) != true
    $row = fgets($file);
    //print $row . '<br>';
    $array = explode(';',$row);
    print '<tr>';
    for($i = 0; $i < count($array); $i++){
        print '<td>' . $array[$i] . '</td>';
    }
    print '</tr>';
}
print '</table>'

?>