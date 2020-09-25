<?php
    // include('sd208_exercise_4-1.php');
    $errorName = " ";
    $errorLast = " ";
    $errorEmail =" ";
    $inputFirstName = " ";
    $inputLastName = " ";
    $inputEmail = " ";

    if(isset($_POST['register_button'])){
       
        $firstName = strlen($_POST['first_name']);
        $lastName = strlen($_POST['last_name']);
        $email = $_POST['email'];
        $address = $_POST['address'];

            if( $firstName <= 25 and $firstName >= 2){
                $inputFirstName = ucwords($_POST['first_name']);
            } 
            else {
                $errorName = "* Name should at least 2 characters and not exceed 25 characters!";
            }
            if($lastName <= 25 and $lastName >= 2){
                $inputLastName = ucwords($_POST['last_name']);
            }
            else {
                $errorLast = "* Name should at least 2 characters and not exceed 25 characters!";
            }
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorEmail = "* Invalid email format";
            }
            else {
                $inputEmail = $email;
            }
            
        
            
    }
?>