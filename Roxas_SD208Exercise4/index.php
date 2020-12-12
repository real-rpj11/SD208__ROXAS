<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises 3</title>
    
</head>
<style>
    body {
       background-image: url('2.png');
       background-repeat: no-repeat;
    }

    form {
        width: 200px;
        margin: 50px;
        border-style: solid;
        border-radius: 10px;
        padding: 50px;
        background-color: #fec5ec;
    }

    input {
        margin: 5px;
    }

    .error {
        color: #f92822;
    }
</style>

<body>
    <center>
        <form action="formhandling3.php" method="post">
            <h1>Registration Form</h1>
            <label for="fname">Firstname:</label>
            <input type="text" name="fname">
            <span class="error"></span><br>
            <label for="lname">Lastname:</label>
            <input type="text" name="lname">
            <span class="error"></span><br>
            <label for="email">Email Address:</label>
            <input type="email" name="email">
            <span class="error"></span><br>
            <label for="address">Addresss:</label>
            <input type="text" name="address"><br>
            <label for="password">Password:</label>
            <input type="password" name="password"><br>
            <input type="submit"  name="submit" value="Submit">
        </form>
    </center>
</body>

</html>