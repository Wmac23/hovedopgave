<?php      
    include('connection.php');  
    $user_name = $_POST['user_name'];  
    $pass_word = $_POST['pass_word'];  
      
        //Forhindre mysqli injection  
        $user_name = stripcslashes($user_name);  
        $pass_word = stripcslashes($pass_word);  
        $user_name = mysqli_real_escape_string($con, $user_name);  
        $pass_word = mysqli_real_escape_string($con, $pass_word);  