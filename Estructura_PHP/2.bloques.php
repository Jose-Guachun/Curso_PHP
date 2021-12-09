<?php
// ****************ESTRUCTURA DE CONTROL*******************

//if
if ($a<4) {
    # code...
}elseif ($a>7) {
    # code...
}else {
    # code...
}

//switch
switch ($login) {
    case true:
        # code...
        break;
    case false:
        # code...
         break;
    
    default:
        # code...
        break;
}

//foeach me sive mas para consulta datos
foreach ($datos as $row) {
    # code...
}


//while 
$b=100;
while ($b <= 10) {
    # code...
    $b++;
}


//do while, sirve siempre y cuando queremos que el codigo
// se ejecute almenos una vez
do {
    # code...
} while ($a <= 10);

//for
for ($i=0; $i < 10 ; $i++) { 
    # code...
}

