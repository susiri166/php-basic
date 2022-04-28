<?php 

    $title="Array";
    include './index.php'
?>

    <h1>Array</h1>
    <?php 
        //a variable
        $num=3;

        //a array
        $numbers=array(1,2,3,4,5,6,7,8,9);
        echo $numbers[0];
        echo "<p>$numbers[1]</p>";

        $size=count($numbers);
        echo "<p>Array size is: $size</p>";

        for($i=0;$i<$size;$i++){
            echo "$numbers[$i]";
        }
    ?>

