<?php
    for ($i=0; $i <= 10; $i++) { 
        echo $i;
    }

    $colors = array("Apple"=>"Red","Banana"=>"Yellow","Blueberry"=>"Blue");
    foreach($colors as $color){
        echo $color;
        ?>
        <br>
        <?php
    }

    $array= array("Blue","Red","Yellow","Green");
    $array1= array("Pink","Purple");
    echo array_push($array,"Grey");

    echo array_pop($array);

    echo array_merge($array,$array1);

    echo array_slice($array,0,3);
?>