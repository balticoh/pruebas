<?php
//Arrays asociativos
$array["nombre"] = "Mi nombre es Luis";
$array["edad"] = "tengo 49 a&ntildeos";
$array["gustos"] = "y megusta PHP";

foreach($array as $key => $value) {
    echo "[$key] => $value <br />";
}
//Arrays escalares
#$array[0] = "Mi nombre";
#$array[1] = "es Luis, tengo";
#$array[2] = "49 a&ntildeos";
#$array[] = "y me gusta PHP :)";

#$count = count($array) - 1;

#for($i = 0; $i <= count; $i++) {
 #   echo $array[$i] ." ";
#}