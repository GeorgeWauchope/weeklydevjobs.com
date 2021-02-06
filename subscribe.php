<?php


function validate($data) {
    if (filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

if (validate($_POST)) {
    //Send the email & name to the email provider e.g. Sendgrid
    require "success.php";
} else {
    echo "The email that you entered was not valid";
}
