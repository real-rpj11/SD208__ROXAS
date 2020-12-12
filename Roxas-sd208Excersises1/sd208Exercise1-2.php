<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table width="540px" height="540px" cellpadding="0px" cellspacing="0px" border="5px">
    
    <?php
        for($row=1;$row<=8;$row++)
        {
            echo "<tr>";
            for($column=1;$column<=8;$column++)
            {
            $total=$row+$column;
            if($total%2==0)
            {
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
            else
            {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
            }
            echo "</tr>";
            
        }
        echo "ChessBoard";
    ?>
    </table>
    </center>
</body>
</html>