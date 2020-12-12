<?php
'<style>

</style>';
// variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$email = $_POST['email'];

function checkLength( $fieldName, $field){
    $Err = "";
    if (strlen(trim($field)) < 2) {
        $Err = "$fieldName must be more than 2 characters<br/>";
    } elseif (strlen(trim($field)) > 25) {
        $Err = "$fieldName must be less than 25 characters<br/>";
    }
    return $Err;
}

if (isset($_POST['submit'])) {
    $fnameCheck = checkLength("firstname" , $fname);
    if (strlen($fnameCheck) > 0) {
        echo $fnameCheck;
    } else {
        echo "<b>Firstname:<b> $fname<br/>";
    }

    $lnameCheck = checkLength("lastname" , $lname);
    if (strlen($lnameCheck) > 0) {
        echo $lnameCheck;
    }  else {
        echo "<b>Lastname:<b> $lname<br/>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "$email is not a valid email address<br/>";
    } else {
        echo "<b>Email Address:<b> $email<br/>";
    }
    echo "<b>Address:<b/> $address";
}
