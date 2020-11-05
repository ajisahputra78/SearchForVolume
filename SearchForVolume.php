<?php
    function volume($diameter){
        define("phi", 3.14);
        $jari_jari =$diameter/2;
        $volume = 4/3*$phi*$jari_jari*$jari_jari*$jari_jari;
        $volume_terakhir =  number_format($volume,2);
        echo "Diameter :" .$diameter;
        echo "<br>";
        return $volume_terakhir;
    }

    echo "Volume Bola Adalah : ".$volume(21);
?>