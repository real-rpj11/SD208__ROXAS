<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    function countWords($str){
        echo "$str<br>";
        $str = explode(" ", $str);
        $store = [];
        $output = [];
        foreach ($str as $key) {
            $el = strtolower($key);
            if(in_array($el, $store)){

            }
            else{
                array_push($store, $el);

            }
        }
        foreach ($store as $value) {
            array_push($output, $value);
            $count = 0;
            foreach($str as $val){
                $el = strtolower($val);
                if($value === $el){
                    $count++;
                }
            }
            array_push($output, $count);
        }
        foreach($output as $out){
            echo $out; 
            if(array_search($out, $output)%2 === 0){
                echo ' : ';
            }else{
                echo '<br> ';
            }
        }
    }
    countWords('Nory was a Catholic because her mother was a Catholic, and Nory’s mother was a Catholic because her father was a Catholic, and her father was a Catholic because his mother was a Catholic, or had been');
    ?>
    
    
</body>
</html>