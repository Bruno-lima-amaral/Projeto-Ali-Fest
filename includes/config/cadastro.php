<?php
    include_once('connect.php');

    $name = filter_input(INPUT_POST, 'name');
    $last_name = filter_input(INPUT_POST, 'lastName');
    $user_name = filter_input(INPUT_POST, 'userName');
    $identify = filter_input(INPUT_POST, 'identify');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $tel = filter_input(INPUT_POST, 'tel');
    $salt = "BGKL23GROW45J19a";
    $custo = '12';
    $hash = crypt($password, $salt);
    $securePassword = $hash . '$2a$' . $custo . '$' . $salt . '$';
    $securePassword = crypt($password, $securePassword);


        $registration_partners = "INSERT INTO usuario (name, last_name, user_name, identify, email, password, tel, create_at) 
        VALUES ('$name','$last_name','$user_name','$identify','$email','$securePassword','$tel', NOW())";

        $result = mysqli_query($connect, $registration_partners);

        if(mysqli_insert_id($connect)) { 
            header("location: ../../registration.php");
        } else {
            header("location: ../../error_registration.php");
        }

    

    $connect->close();
?>