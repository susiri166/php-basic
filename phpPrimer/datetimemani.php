<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date and Time Manupulation</h1>
    <?php 
        $datenow=getdate();
        echo "Today's date is :<br>";
        echo $datenow['mday'].'<br>';
        echo $datenow['month'].'<br>';
        echo $datenow['year'].'<br>';

        echo "Today's date: ".$datenow['mday']. '/'. $datenow['month'] .'/'. $datenow['year'];
    ?>
</body>
</html>