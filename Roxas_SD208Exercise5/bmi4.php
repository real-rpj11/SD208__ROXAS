<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
    
</head>
<style>
    body{
        background-image: url('exercises4-background2.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
    }
    form{
        padding: 20px;
        border: 2px solid black;
        margin: 100px 300px;
        background-color: #f2f3f4;
    }
</style>
<body>
    <center>
    <?php      
        if ($_GET['bmi']){
            $weight = $_GET['weight'];
            $height = $_GET['height'];

            function bmi($weight,$height){
                // $bmi = $weight/($height*$height);
                $bmi = ($weight/$height/$height) * 10000;
                return $bmi;
            }

            $bmi = bmi($weight,$height);
            
            if ($bmi < 18.5){
                $result = " underweight";
            } elseif ($bmi >= 18.5 AND $bmi <= 24.9) {
                $result = " normal weight";
            } elseif ($bmi >= 25 AND $bmi <= 29.9) {
                $result = " overweight";
            } elseif ($bmi >= 30) {
                $result = " obesity";
            }


            
        }

        ?>
        <form action="bmi4.php" method="post">
            <?php 
                echo "Your BMI is ". $bmi ;
                echo "<br>You are: ";
                echo "$result";
            ?>
            <br>
            <br>
            <input type="submit" name = "calculator" value="Back to Calculator">
        </form>
        

        <?php
           
            if (isset($_POST['calculator'])){
                header("Location: exercises4.php");
            }
        ?>
    </center>
</body>
</html>