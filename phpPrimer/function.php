<?php 
    $title="Function";
    include './index.php'

?>
    <h1>Function</h1>
    <?php 
        function writeMassage(){
            echo "hello guys<br>";
        }
        writeMassage();
        echo "<hr>";
        writeMassage();

        //function in parameter
        function addFunction($num1,$num2){
            $sum=$num1+$num2;

            echo "The sum of $num1 and $num2 is : $sum".'<br>';

        }
        function changenum($num){
            $num=$num+10;
       }

       function returnProduct($num1,$num2){
           $sprod=$num1*$num2;
           return $sprod;
       }
        $num=30;
        addFunction(10,29);
        echo "<br>";
        addFunction($num,29);
        echo "<br>";
        addFunction("10","20");
        
        changenum($num);
        echo $num .'<br>';
        
        $return_value=returnProduct(10,12);
        echo $return_value ."<br>";

       

       
        
    ?>
