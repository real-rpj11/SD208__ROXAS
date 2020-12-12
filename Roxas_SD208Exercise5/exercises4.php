<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    
</head>
<style>
    body{
        background-image: url('exercises4-background.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
    }
    form{
        padding: 20px;
        border: 2px solid black;
        float: left;
        margin: 100px 200px;
        background-color: #808080;
    }

</style>
<body>
    <form action="bmi4.php" method="GET">
        <h2 style="text-align:center;">BMI</h2>
        height<br/>(cm)
        <input type="number" name="height" id="height" size="5" style="margin-left: 40px;">
        <br>
        weight <br>(kg) 
        <input type="number" name="weight" id="weight" size="5" style="margin-left: 40px;">
        <br>
        <br>
        <input type="submit"  name="bmi" value="Calculate BMI" style="margin-left: 70px;">
    </form>
        
</body>
</html>