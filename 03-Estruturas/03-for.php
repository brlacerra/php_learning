<?php

for ($i=0; $i<=10; $i++){
    echo $i . "<br>";
}

echo "<br><br>";

for ($i=0; $i<=1000; $i+=5){
    echo $i . "  ";
    if($i>=100 && $i%100==0){
        echo "<br>";
    }
}

echo "<br><br>";

for ($i=0; $i<=1000; $i+=5){
    if($i>200 && $i<800) continue;{
        if($i>=100 && $i%100==0 && $i!=200){
            echo "<br>";
        }
        echo $i . "  ";
    }
    if($i === 900) break;
}


?>