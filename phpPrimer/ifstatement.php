<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>If Statement</h2>
    <h3 style="color: red;"></h3>
    <?php 
        $grade=50;
        
        if($grade >= 50){
            echo '<h3 style="color: green"> You Passed</h3>';
        }
        else{
            echo '<h3 style="color: red"> You Falid</h3>';
        }
        //IF-ELSE IF-ELSE
        $grade="B";
        if($grade =="A"){
            echo "<h2> You are Best</h2>";
        }
        elseif ($grade =="B"){
            echo "<h2> You are good</h2>";
        }
        else{
            echo "<h2> Sorry you falid!";
        }
?>
</body>
</html>