<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php 
        $grade=0;
        while($grade <10){
            echo '<p>hello i am while</p>';
            $grade++;
        }
    ?>
    <h1>Do While Loop</h1>
    <?php 
        $grade=7;
        do{
            echo '<p>i am do while loop</p>';
            $grade++;
        }while($grade <10);
    ?>
</body>
</html>