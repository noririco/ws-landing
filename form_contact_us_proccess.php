<?php
/**
 * Form proccess for #contact-us form.
 * @todo Send mail if needed.
 * @todo Save the form into database.
 */


if(!empty($_POST['trigger']) && $_POST['trigger'] == 'form_submit'){
    if(!empty($_POST['name'])){
        $name = $_POST['name']; 
        $name = clean_input($name); 
        // var_dump($name);
        if(!preg_match("/^[\p{Hebrew} ]*$/u", $name)) {
            $name = "";
            trigger_error("Only letters allowed.", E_USER_ERROR);
        }
        else {
            //input ok
        }
    }
    else trigger_error("POST name is empty!", E_USER_ERROR);
    
    if(!empty($_POST['phone'])){
        $phone = $_POST['phone']; 
        $phone = clean_input($phone); 
        if(!preg_match("/^\d{9,10}$/", $phone)) {
            $phone = "";
            trigger_error("Only 9-10 numbers are allowed.", E_ERROR);
        }
        else {
            //input ok
        }
    }
    else trigger_error("POST phone is empty!", E_ERROR);
    
    if(!empty($_POST['email'])){
        $email = $_POST['email']; 
        $email = clean_input($email); 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = "";
            trigger_error("email address is not valid.", E_ERROR);
        }
        else {
            //input ok
        }
    }
    else trigger_error("POST email is empty!", E_ERROR);

    if(!empty($_POST['licence'])){
        $licence = $_POST['licence']; 
        $licence = clean_input($licence); 
        if(!preg_match("/^\d{6,7}$/", $licence)) {
            $licence = "";
            trigger_error("Only 6-7 numbers are allowed.", E_ERROR);
        }
        else {
            //input ok
        }
    }
    else trigger_error("POST licence is empty!", E_ERROR);

    if(!empty($_POST['city'])){
        $city = $_POST['city']; 
        $city = clean_input($city); 
        if(!preg_match("/^[\p{Hebrew} ]*$/u", $city)) {
            $city = "";
            trigger_error("Only letters allowed.", E_ERROR);
        }
        else {
            //input ok
        }
    }
    else trigger_error("POST city is empty!", E_ERROR);


    //FINALIZE RESULT?
    $to      = "coodydev@gmail.com";
    $subject = 'New Lead - We Share Landing ('.$name.')';
    $message = 'Contact form result:' ."\r\n".
                'Fullname: ' . $name ."\r\n".
                'Phone:' . $phone ."\r\n".
                'Email:' . $email ."\r\n".
                'Licence:' . $licence ."\r\n".
                'City:' . $city;

    $headers = 'From: no-reply@weshare.co.il' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo "SUCCESS";
    }
    else {
        echo "ERROR MAILING";
    }

    die;
}

// $has_name_error = false;
// $name_error = $phone_error = $email_error = $licence_error = $city_error = "";
// $name = $phone = $email = $licence = $city = $success = "";

function clean_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    $input = mb_convert_encoding($input, "UTF-8");
    return $input;
}


?>