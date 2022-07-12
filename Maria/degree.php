<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
</head>
<body>
<form action="degree.php" method= "POST">
        °Fahrenheit: <input type="number"  name="fahr" />
       <input  type="submit" name="submit" value="GO"/>
    </form>
    <form action="degree.php" method= "POST">
        °Celsius: <input type="number"  name="celc" />
       <input  type="submit" name="submit1" value="GO"/>
    </form>
    <?php
    function convertFtoC($F){
        $C=($F-32)*(5/9);
        return $C;
    };
    function convertCtoF($C){
        $F = ($C * 9/5) + 32;
        return $F;
    };

    if(isset($_POST["submit"])){
        if($_POST["fahr"]){
            $calc = number_format(convertFtoC($_POST["fahr"]),2);
            echo "{$_POST['fahr']}°F are {$calc}°C <br />";
            if($calc < 5){ echo "<img src= 'https://cdn.pixabay.com/photo/2017/08/02/14/26/winter-landscape-2571788_1280.jpg'>";}
            elseif($calc < 11){echo "<img src='https://cdn.pixabay.com/photo/2015/12/12/22/35/snowman-1090261_1280.jpg'>";}
            elseif($calc < 16){echo "<img src='https://cdn.pixabay.com/photo/2016/11/21/03/56/landscape-1844230_1280.png'>";}
            elseif($calc < 25){echo "<img src='https://cdn.pixabay.com/photo/2014/10/04/15/07/sunset-473604_1280.jpg'>";}
            else{echo "<img src=https://cdn.pixabay.com/photo/2017/04/03/06/20/fire-2197606_1280.jpg>";}           
        }
        else{
            echo "Please enter a number.";
        }
    };
    if(isset($_POST["submit1"])){
        if($_POST["celc"]){
            $calc = number_format(convertCtoF($_POST["celc"]),2);
            echo "{$_POST['celc']}°C are {$calc}°F <br />";
            if($calc < 5){ echo "<img src= 'https://cdn.pixabay.com/photo/2017/08/02/14/26/winter-landscape-2571788_1280.jpg'>";}
                elseif($calc < 11){echo "<img src='https://cdn.pixabay.com/photo/2015/12/12/22/35/snowman-1090261_1280.jpg'>";}
                elseif($calc < 16){echo "<img src='https://cdn.pixabay.com/photo/2016/11/21/03/56/landscape-1844230_1280.png'>";}
                elseif($calc < 25){echo "<img src='https://cdn.pixabay.com/photo/2014/10/04/15/07/sunset-473604_1280.jpg'>";}
                else{echo "<img src=https://cdn.pixabay.com/photo/2017/04/03/06/20/fire-2197606_1280.jpg>";}   
        }
        else{
            echo "Please enter a number.";
        }
    };

    ?>
</body>
</html>