<?php
/**
 * Form proccess for #contact-us form.
 * @todo Send mail if needed.
 * @todo Save the form into database.
 */


$name_error = $phone_error = $email_error = $licence_error = $city_error = "";
$name = $phone = $email = $licence = $city = $success = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST["name"])) {
        $name_error = "שדה זה הכרחי.";
    }
    else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*/", $name)) {
            $name_error = "אותיות בלבד.";
        }
    }
    if(empty($_POST["phone"])) {
        $phone_error = "שדה זה הכרחי.";
    }
    else {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^\d{9,10}/", $phone)) {
            $phone_error = "מספר טלפון לא תקין.";
        }
    }
    if(empty($_POST["email"])) {
        $email_error = "שדה זה הכרחי.";
    }
    else {
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "כתובת המייל אינה תקינה.";
        }
    }
    if(empty($_POST["licence"])) {
        $licence_error = "שדה זה הכרחי.";
    }
    else {
        $licence = test_input($_POST["licence"]);
        if(!preg_match("/^\d{6,7}/", $licence)) {
            $licence_error = "מספר רישיון לא תקין.";
        }
    }
    if(empty($_POST["city"])) {
        $city_error = "שדה זה הכרחי.";
    }
    else {
        $city = test_input($_POST["city"]);
        if(!preg_match("/^[a-zA-Z ]*/", $city)) {
            $city_error = "אותיות בלבד.";
        }
    }

    //Check if no erros
    if($name_error == "" && $phone_error == "" && $email_error == "" && $licence_error == "" && $city_error == ""){
        $form_body = "";
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $form_body .= "$key: $value\n";
        }
        // echo $form_body."<br>";
        //send mail($to,$subject,$mail_body) // from local host change php.ini SMTP if needed

        //(if mail sent..) clear fields
        $name = $phone = $email = $licence = $city = $success = "";
    } else {
        // echo $name_error."<br>";
        // echo $phone_error."<br>";
        // echo $email_error."<br>";
        // echo $licence_error."<br>";
        // echo $city_error."<br>";
    }
}

function test_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>