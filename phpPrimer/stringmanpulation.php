<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String Manupulation</h1>
    <?php 
        $phargraph1="hello friend";
        $phargraph2="I am susiri dayan";
        $name="red apple";
        echo $phargraph1 ." ". $phargraph2."<br>";

        //string transformation
        echo "UPPERCASE first letter: ".ucfirst($name)."<br>";
        echo "Uppercase first letter of each words: ".ucwords($name)."<br>";
        echo "Uppercase: ". strtoupper($name)."<br>";
        echo "lowercase: ". strtolower("THIS IS LOWER CASE");
        echo "Repeat String: ". str_repeat($name,10) ."<br>";
        echo "Get a String: ". substr($name,3,10) ."<br>";

        echo 'find character "a": '. strchr($name,'a').'<br>';
    ?>
</body>
</html>