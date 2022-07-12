<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day2</title>
</head>
<body>
    <!-- <form action="index.php" method="GET">
    name: <input type="text"  name="fname" />
    surname: <input type= "text" name="lname" />
    <input  type="submit" name="submit" />
    </form> -->
    <?php
     if(isset($_GET['submit']))
     { if ($_GET['fname']|| $_GET['fname']){
        echo "Welcome {$_GET['fname']} {$_GET['lname']} <br>";}
     else
     {
        echo "please insert your name and surname <br> <br><br>";
     }};

     function divideParam($num1,$num2){
        $divide = $num1/$num2;
        return $divide;
     }
     $result = divideParam(30,10);
     echo "Your result is {$result} <br><br><br>";

     function calc($Math,$Physics,$English){
        $sum = $Math+$Physics+$English;
        $average = $sum/3;
       return [$sum,$average];
    };
        $grades = calc(3,4,5);
        echo "Sum {$grades[0]}<br>";
        echo "Average {$grades[1]}<br><br><br>";

        function box($width,$height,$depth){
            $area = $width*$height*6;
            $volume = $width*$height*$depth;
           return [$area,$volume];
        };
            $box = box(2,7,5);
            echo "The area of the box is: {$box[0]}<br>";
            echo "The volume of the box is: {$box[1]}<br><br><br>";

        function timeCount($mins){
            $hours = floor($mins/60);
            $min = $mins%60;
            return [$hours,$min];
        };
        $time = timeCount(200);
        echo "200 minutes = {$time[0]} hour(s) and {$time[1]} minute(s).<br><br><br>";
     ?>

    <form action="index.php" method="POST">
        name: <input type="text"  name="fname"><br>
        surname: <input type= "text" name="lname"><br>
        age: <input type= "number" name="age"><br>
        <input  type="submit" name="submit">
    </form>
    <form action="index.php" method="GET">
    hobbies: <input type="text"  name="hobbies"><br>
    <input  type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        if($_POST['fname'] && $_POST['lname'] && $_POST['age']){
            if(strlen($_POST['fname']) > 5){
                echo "<div style='color:green'><p>{$_POST['fname']}</p></div>";
            }
            else{
                echo "<div style='color:red'><p>{$_POST['fname']}</p></div>";
            }
            echo "<div><p>{$_POST['lname']}</p></div>";
            echo "<div><p>{$_POST['age']}</p></div>";
        }
    };
    if(isset($_GET["submit"])){
        if($_GET["hobbies"]){
            $hobbieparts = explode(",", $_GET["hobbies"]);
            foreach($hobbieparts as $key => $val){
                echo $hobbieparts[$key]."<br/>";
            }
        }
    };
    ?>
</body>
</html>