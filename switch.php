<?php

$motor = 'Honda Metik';

switch($motor){
        case "Honda  Metik" :
            echo "Sa Punya Motor Honda Metik";
            break;
        case "Yamaha Beat" :    
            echo "Sa Punya Motor Yamaha Beat";
            break;
        case "Zusuki" :
            echo "Sa Punya Motor Zusuki";
            break;
            default :
            echo "Sa Belum Punya Motor";
            break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="" method="get">
            <select nama ="motor" id="">
                <option value="Honda Metik".>Honda Metik</option>
                <option value="Yamaha Beat".>Yamaha Beat</option>
                <option value="Zusuki".>Zusuki</option>
                <option value="".> Sa Belum Punya Motor</option>

        </form>

</body>
</html>